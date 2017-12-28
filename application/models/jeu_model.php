<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jeu_model extends CI_Model{

  public function getJeu() {
    $this->load->database('default');

    /* SELECT nomJeu,libelleType,nomEditeur
    FROM `jeu` JOIN type ON jeu.numType = type.numType
    JOIN editeur on jeu.numEditeur = editeur.numEditeur
    */

    return $this->db->select('nomJeu, libelleType, nomEditeur')
                    ->from('jeu')
                    ->join('type', 'jeu.numType = type.numType')
                    ->join('editeur', 'jeu.numEditeur = editeur.numEditeur')
                    ->get()
                    ->result();
  }



}
