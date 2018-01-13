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
   
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

