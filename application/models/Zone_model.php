<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zone_model extends CI_Model{

 protected $table = 'zone';

public function selectById($id) {
        $this->load->database('default');

        return $this->db->select('*')
                        ->from($this->table)
                        ->where('numZone', $id)
                        ->get()
                        ->result();

    }

public function getZoneEditeur() {
    $this->load->database('default');
/*
select distinct editeur.numEditeur, nomEditeur as Editeur, nbDemiTable as "Nombre de 1/2 tables"
from(select numZone,numEditeur from zone where zone.numType is NULL) as temp,reservation, editeur
where reservation.numZone=temp.numZone and temp.NumEditeur=reservation.numEditeur and editeur.numEditeur=reservation.numEditeur
*/

$sql="select distinct editeur.numEditeur, nomEditeur , nbDemiTable, temp.numZone, sum(quantiteJeu) as nbJeux from(select numZone,numEditeur from zone where zone.numType is NULL) as temp,reservation, editeur,concerner
where reservation.numZone=temp.numZone and temp.NumEditeur=reservation.numEditeur and editeur.numEditeur=reservation.numEditeur and reservation.numReservation=concerner.numReservation group by nomEditeur";
$res=$this->db->query($sql);
return $res->result() ;

}

 public function getZoneType() {
    $this->load->database('default');
/*
select libelleType as Type, sum(nbDemiTable) as "Nombre de 1/2 tables"
from(select numZone,numType from zone where zone.numEditeur is NULL) as temp,type,reservation
where reservation.numZone=temp.numZone and temp.numType=type.numType group by libelleType
*/
$sql="select libelleType, nbDemiTable, temp.numZone, sum(quantiteJeu) as nbJeux from(select numZone,numType from zone where zone.numEditeur is NULL) as temp,type,reservation, concerner
where reservation.numZone=temp.numZone and temp.numType=type.numType  and reservation.numReservation=concerner.numReservation group by libelleType";
$res=$this->db->query($sql);
return $res->result() ;

  }

public function type_zone($id,$fes) {
    //renvoi true si la zone est une zone TYPE et false si c'est une Zone EDITEUR
    $sql="select temp.numZone from(select numZone,numType from zone where zone.numEditeur is NULL) as temp,reservation, festival where temp.numZone=? and reservation.numZone=temp.numZone and festival.numFestival = ? and festival.numFestival=reservation.numFestival";
    $res=$this->db->query($sql,array($id,$fes));
    $res=$res->num_rows() ;
    return $res==0;
  }


public function getFicheZone($id,$f) {
     $this->load->database('default');
       $sql="select editeur.numEditeur, nomEditeur, nomJeu, quantiteJeu from zone,reservation, festival, jeu, concerner, editeur
       where zone.numZone=? and reservation.numZone=zone.numZone and concerner.numReservation=reservation.numReservation and concerner.numJeu=jeu.numJeu and editeur.numEditeur=jeu.numEditeur and festival.numFestival = ? and festival.numFestival=reservation.numFestival";
       $res=$this->db->query($sql,array($id,$f));
       return $res->result() ;
     }




   }
