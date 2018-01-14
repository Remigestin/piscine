<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jeu_model extends CI_Model{

    protected $table = 'jeu';
    
  public function getJeu($fest) {
    $this->load->database('default');

    /* SELECT nomJeu,libelleType,nomEditeur
    FROM `jeu` JOIN type ON jeu.numType = type.numType
    JOIN editeur on jeu.numEditeur = editeur.numEditeur
    */

    return $this->db->select('nomJeu, libelleType, nomEditeur, jeu.numEditeur')
                    ->from('jeu')
                    ->join('type', 'jeu.numType = type.numType')
                    ->join('editeur', 'jeu.numEditeur = editeur.numEditeur')
                    ->join('concerner', 'concerner.numJeu = jeu.numJeu')
                    ->join('reservation', 'concerner.numReservation = reservation.numReservation')
                    ->join('festival', 'festival.numFestival = reservation.numFestival')
                    ->where('festival.numFestival', $fest)
                    ->get()
                    ->result();
  }

  public function selectByEditeur($id, $fest) {
    $this->load->database('default');

    return $this->db->select('*')
                    ->from('jeu')
                    ->join('type', 'jeu.numType = type.numType')
                    ->join('concerner', 'concerner.numJeu = jeu.numJeu')
                    ->join('reservation', 'concerner.numReservation = reservation.numReservation')
                    ->join('festival', 'festival.numFestival = reservation.numFestival')
                    ->where('festival.numFestival', $fest)
                    ->where('numEditeur', $id)
                    ->get()
                    ->result();
  }

   public function selectByEditeurALL($id) {
    $this->load->database('default');

    return $this->db->select('*')
                    ->from('jeu')
                    ->join('type', 'jeu.numType = type.numType')
                    ->where('numEditeur', $id)
                    ->get()
                    ->result();
  }

   public function selectByReservation($id, $fest) {
    $this->load->database('default');

    return $this->db->select('*')
                    ->from('jeu')
                    ->join('type', 'jeu.numType = type.numType')
                    ->join('concerner', 'concerner.numJeu = jeu.numJeu')
                    ->join('reservation', 'concerner.numReservation = reservation.numReservation')
                    ->join('festival', 'festival.numFestival = reservation.numFestival')
                    ->where('festival.numFestival', $fest)
                    ->where('concerner.numReservation', $id)
                    ->order_by('concerner.numReservation')
                    ->get()
                    ->result();
  }
  
  public function selectById($id) {
    $this->load->database('default');

    return $this->db->select('*')
                    ->from($this->table)
                    ->where('numJeu', $id)
                    ->get()
                    ->result();
  }
  
   public function insert($data) {
    $this->load->database('default');

    
        $this->db->set('nomJeu', $data['nomJeu'])
                ->set('numType', $data['numType'])
                ->set('numEditeur', $data['numEditeur'])
                ->insert($this->table);
  }
  
  public function update($id, $data) {
        $this->load->database('default');

        $this->db->set('nomJeu', $data['nomJeu'])
                ->set('numType', $data['numType']);
                

        $this->db->where('numJeu', (int)$id);
        return $this->db->update($this->table);
        
    }
    
    public function delete($id) {
        $this->load->database('default');
        
        return $this->db->where('numJeu', (int) $id)
			->delete($this->table);
    }
    
    public function selectNotInReservation($idRes, $idEditeur) {
    $this->load->database('default');

    return $this->db->select('jeu.numJeu, jeu.nomJeu')
                    ->from('jeu')
                    ->join('concerner', 'jeu.numJeu = concerner.numJeu', 'left')
                    ->where('numEditeur', $idEditeur)
                    ->where('numReservation is null',null, false)
                    ->get()
                    ->result();
  }

}
