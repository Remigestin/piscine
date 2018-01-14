<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reservation_model extends CI_Model {
    
    protected $table = 'reservation';
  
    
    public function selectByEditeur($id, $fest) {
         $this->load->database('default');
        
        return $this->db->select('*')
                        ->from($this->table)
                        ->join('festival', "festival.numFestival = reservation.numFestival")
                        ->where('numEditeur', $id)
                        ->where('festival.numFestival', $fest)
                        ->get()
                        ->result();
    }
    
    public function selectById($id) {
         $this->load->database('default');
        
        return $this->db->select('*')
                        ->from($this->table)
                        ->where('numReservation', $id)
                        ->get()
                        ->result();
    }
    
    public function insert($data) {
    $this->load->database('default');

    
        $this->db->set('numZone', $data['numZone'])
                ->set('numFestival', $data['numFestival'])
                ->set('numEditeur', $data['numEditeur'])
                ->insert($this->table);
  }
    
    
    public function update_table($id, $nb) {
        $this->load->database('default');

        $this->db->set('nbDemiTable', $nb);
              
        $this->db->where('numReservation', $id);
        return $this->db->update($this->table);
        
    }
    
    public function delete($id) {
        $this->load->database('default');
        
        return $this->db->where('numReservation', (int) $id)
			->delete($this->table);
    }
 
   
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

