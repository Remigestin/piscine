<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reservation_model extends CI_Model {
    
    protected $table = 'reservation';
  
    
    public function selectByEditeur($id) {
         $this->load->database('default');
        
        return $this->db->select('*')
                        ->from($this->table)
                        ->where('numEditeur', $id)
                        ->get()
                        ->result();
    }
   
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

