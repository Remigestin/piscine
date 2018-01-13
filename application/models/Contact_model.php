<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_model extends CI_Model {
    
    protected $table = 'contact';
    
    public function selectByEditeur($id) {
    $this->load->database('default');

    return $this->db->select('*')
                    ->from('contact')
                    ->where('numEditeur', $id)
                    ->get()
                    ->result();
  }
  
   public function insert($data) {
    $this->load->database('default');

    
        $this->db->set('nomContact', $data['nomContact'])
                ->set('prenomContact', $data['prenomContact'])
                ->set('mailContact', $data['mailContact'])
                ->set('telContact', $data['telContact'])
                ->set('numEditeur', $data['numEditeur'])
                ->insert($this->table);
  }
  
  public function update($id, $data) {
        $this->load->database('default');

        $this->db->set('nomContact', $data['nomContact'])
                ->set('prenomContact', $data['prenomContact'])
                ->set('mailContact', $data['mailContact'])
                ->set('telContact', $data['telContact'])
                ->set('numEditeur', $data['numEditeur']);
                
                
        
        $this->db->where('id', (int)$id);
        return $this->db->update($this->table);
        
    }
    
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

