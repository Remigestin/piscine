<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Festival_model extends CI_Model{

    protected $table = 'festival';
    
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
  
  public function update_nbTableMax($id, $nb) {
        $this->load->database('default');

        $this->db->set('nbDemiTableTotal', $nb);
              
        $this->db->where('numFestival', (int)$id);
        return $this->db->update($this->table);
        
    }
}