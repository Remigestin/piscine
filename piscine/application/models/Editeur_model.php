<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Editeur_model extends CI_Model {
    
    protected $table = 'editeur';
    
    public function selectAll() {
        $this->load->database('default');
        
        return $this->db->select('*')
                        ->from($this->table)
                        ->get()
                        ->result();
                
                
    }
    
    public function selectById($id) {
         $this->load->database('default');
        
        return $this->db->select('*')
                        ->from($this->table)
                        ->where('editeur.numEditeur', $id)
                        ->get()
                        ->result();
    }
    
     public function selectNameById($id) {
        $this->load->database('default');
        
        return $this->db->select('nomEditeur')
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

