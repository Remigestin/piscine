<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jeu_model extends CI_Model{

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
                    ->join('reservation', 'jeu.numReservation = reservation.numReservation')
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
                    ->join('reservation', 'jeu.numReservation = reservation.numReservation')
                    ->join('festival', 'festival.numFestival = reservation.numFestival')
                    ->where('festival.numFestival', $fest)
                    ->where('numEditeur', $id)
                    ->get()
                    ->result();
  }

   public function selectByEditeurALL($id, $fest) {
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
                    ->join('concerner', "concerner.numjeu = jeu.numJeu")
                    ->join('reservation', 'jeu.numReservation = reservation.numReservation')
                    ->join('festival', 'festival.numFestival = reservation.numFestival')
                    ->where('festival.numFestival', $fest)
                    ->where('concerner.numReservation', $id)
                    ->order_by('concerner.numReservation')
                    ->get()
                    ->result();
  }



}
