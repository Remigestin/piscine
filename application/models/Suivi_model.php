<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Suivi_model extends CI_Model {

    protected $table = 'suivi';

    public function selectAll($festival) {
        $this->load->database('default');

        return $this->db->select('*')
                        ->from($this->table)
                        ->where('numFestival', $festival)
                        ->get()
                        ->result();
    }

     public function selectByEditeur($id, $fest) {
        $this->load->database('default');

        return $this->db->select('*')
                        ->from($this->table)
                        ->where('numEditeur', $id)
                        ->where('numFestival', $fest)
                        ->get()
                        ->result();
    }



    public function selectEditeurNonSuivi($festival){

      /*select editeur.`numEditeur`, editeur.`nomEditeur` from editeur
      left join suivi on editeur.numEditeur = suivi.numEditeur
      where numSuivi is null
      */

       $this->load->database('default');
               $sql = "select editeur.numEditeur, editeur.nomEditeur from editeur where editeur.numEditeur not in (select numEditeur from suivi,festival where festival.numFestival=? and suivi.numFestival=festival.numFestival)";
               $res=$this->db->query($sql,$festival);
               return $res->result() ;
   }

   public function insert($data){
     $this->load->database('default');
     $this->db->set('commentaire', $data['commentaire'])
             ->set('reponse', $data['reponse'])
             ->set('prix', $data['prix'])
             ->set('presentAuFestival', $data['presentAuFestival'])
             ->set('paiement', $data['paiement'])
             ->set('facture', $data['facture'])
             ->set('contacte', $data['contacte'])
             ->set('annule', $data['annule'])
             ->set('derniereDateContact', $data['derniereDateContact'])
             ->set('derniereDateReponse', $data['derniereDateReponse'])
             ->set('numEditeur', $data['numEditeur'])
             ->set('numFestival', $data['numFestival'])
             ->insert($this->table);
   }

   public function update_commentaire($id, $commentaire) {
        $this->load->database('default');

        $this->db->set('commentaire', $commentaire);

        $this->db->where('numSuivi', (int)$id);
        return $this->db->update($this->table);

    }

    public function update($id, $data) {
        $this->load->database('default');
        $this->db->set('numSuivi', $data['numSuivi'])
                 ->set('commentaire', $data['commentaire'])
                 ->set('reponse', $data['reponse'])
                 ->set('presentAuFestival', $data['presentAuFestival'])
                 ->set('paiement', $data['paiement'])
                 ->set('facture', $data['facture'])
                 ->set('contacte', $data['contacte'])
                 ->set('annule', $data['annule'])
                 ->set('derniereDateContact', $data['derniereDateContact'])
                 ->set('derniereDateReponse', $data['derniereDateReponse'])
                 ->set('numEditeur', $data['numEditeur'])
                 ->set('numFestival', $data['numFestival'])
                 ->where('numSuivi', $id);
                 return $this->db->update($this->table);
    }


}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
