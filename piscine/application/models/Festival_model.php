<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Festival_model extends CI_Model{

  public function getLast() {
      $this->load->database('default');

    return $this->db->select('numFestival')
                    ->from('festival')
                    ->order_by('numFestival', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  }
}