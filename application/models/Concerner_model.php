<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Concerner_model extends CI_Model{

    protected $table = 'concerner';
    
 
  public function selectById($idJeu, $idRes) {
    $this->load->database('default');

    return $this->db->select('*')
                    ->from($this->table)
                    ->where('numJeu', $idJeu)
                    ->where('numReservation', $idRes)
                    ->get()
                    ->result();
  }
  
   public function insert($idJeu, $idRes, $data) {
    $this->load->database('default');

    
        $this->db->set('numReservation', $idRes)
                ->set('numJeu', $idJeu)
                ->set('quantiteJeu', $data['quantiteJeu'])
                ->set('arrive', $data['arrive'])
                ->set('aRenvoyer', $data['aRenvoyer'])
                ->set('surdimension', $data['surdimension'])
                ->set('prixRenvoi', $data['prixRenvoi'])
                ->set('prototype', $data['prototype'])
                ->insert($this->table);
  }
  
  public function update($idJeu, $idRes, $data) {
        $this->load->database('default');

        $this->db->set('quantiteJeu', $data['quantiteJeu'])
                ->set('arrive', $data['arrive'])
                ->set('aRenvoyer', $data['aRenvoyer'])
                ->set('surdimension', $data['surdimension'])
                ->set('prixRenvoi', $data['prixRenvoi'])
                ->set('prototype', $data['prototype']);
                

        $this->db->where('numJeu', $idJeu)
                ->where('numReservation',$idRes);
        return $this->db->update($this->table);
        
    }
    
    public function delete($idJeu, $idRes) {
        $this->load->database('default');
        
        return $this->db->where('numJeu', $idJeu)
                ->where('numReservation',$idRes)
			->delete($this->table);
    }

}


