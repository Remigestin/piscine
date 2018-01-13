<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utilisateur_model extends CI_Model {
    
    protected $table = 'utilisateur';
    
    public function checkPassword($login, $mdp) {
        $this->load->database('default');
        
        return $this->db->select('*')
                        ->from($this->table)
                        ->where('login', $login)
                        ->where('mdp', $mdp)
                        ->get()
                        ->result();
                
                
    }
    

    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

