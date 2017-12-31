<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zone_model extends CI_Model{

public function getZoneEditeur() {
    $this->load->database('default');
/*
select distinct nomEditeur as Editeur, nbDemiTable as "Nombre de 1/2 tables" 
from(select numZone,numEditeur from zone where zone.numType is NULL) as temp,reservation, editeur 
where reservation.numZone=temp.numZone and temp.NumEditeur=reservation.numEditeur and editeur.numEditeur=reservation.numEditeur
*/

$sql="select distinct nomEditeur , nbDemiTable from(select numZone,numEditeur from zone where zone.numType is NULL) as temp,reservation, editeur 
where reservation.numZone=temp.numZone and temp.NumEditeur=reservation.numEditeur and editeur.numEditeur=reservation.numEditeur";
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
$sql="select libelleType, nbDemiTable from(select numZone,numType from zone where zone.numEditeur is NULL) as temp,type,reservation
where reservation.numZone=temp.numZone and temp.numType=type.numType group by libelleType";
$res=$this->db->query($sql);
return $res->result() ;

  }


}