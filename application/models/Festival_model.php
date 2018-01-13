<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Festival_model extends CI_Model{

    
  public function selectAll() {
      $this->load->database('default');

    return $this->db->select('*')
                    ->from('festival')
                    ->get()
                    ->result();
  }
  
  public function selectById($id) {
      $this->load->database('default');

    return $this->db->select('*')
                    ->from('festival')
                    ->where('numFestival', $id)
                    ->get()
                    ->result();
  }
  
  public function getLast() {
      $this->load->database('default');

    return $this->db->select('*')
                    ->from('festival')
                    ->order_by('numFestival', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  }
}