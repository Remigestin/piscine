<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
    public function getDataEditeur1($num) {
		//requete pour le nombre d'editeur
		$this->load->database('default');
		$sql="select count(editeur.numEditeur) as temp from editeur,reservation,festival where editeur.numEditeur=reservation.numEditeur and reservation.numFestival=?";
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row ;
}
    public function getDataEditeur2($num) {
		//requete pour le nombre d'ed contactés
		$this->load->database('default');
		$sql="select sum(contacte) as temp from suivi,festival where contacte=1 and suivi.numFestival=festival.numFestival and festival.numFestival=?";
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row ;
}
	public function getDataEditeur3($num) {
		//requete pour les ed ayant reservé
		$this->load->database('default');
		$sql="select count(numEditeur) as temp from (select distinct numEditeur from reservation,festival where reservation.numFestival=festival.numFestival and festival.numFestival=?) as a";
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row ;
}
	public function getDataEditeur4($num) {
		//ed ayant annulés
		$this->load->database('default');
		$sql="select sum(annule) as temp from suivi,festival where annule=1 and suivi.numFestival=festival.numFestival and festival.numFestival=?";
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row ;
		}
	public function getDataEditeur5($num) {
		//ed ayant été facturé
		$this->load->database('default');
		$sql="select sum(facture) as temp from suivi,festival where facture=1 and suivi.numFestival=festival.numFestival and festival.numFestival=?";
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row ;
		}
	public function getDataEditeur6($num) {
		//ed ayant payé
		$this->load->database('default');
		$sql="select count(paiement) as temp from suivi,festival where paiement=1 and suivi.numFestival=festival.numFestival and festival.numFestival=?";
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row ;
		}
	public function getDataJeux($num) {
		//nb jeux
		$this->load->database('default');
		$sql="select sum(quantiteJeu) as temp from concerner,reservation,festival where concerner.numReservation=reservation.numReservation and reservation.numFestival=festival.numFestival and festival.numFestival=?";
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row ;
	}
	public function getDataJeux2($num) {
		//nb jeux arrivés
		$this->load->database('default');
		$sql="select sum(quantiteJeu) as temp from reservation,festival,concerner where concerner.arrive=1 and concerner.numReservation=reservation.numReservation and reservation.numFestival=festival.numFestival and festival.numFestival=?" ;
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row;
}
	public function getDataJeux3($num) {
		//nb jeux a renvoyer
		$this->load->database('default');
		$sql="select sum(quantiteJeu) from concerner,reservation,festival where aRenvoyer=1 and concerner.numReservation=reservation.numReservation and reservation.numFestival=festival.numFestival and festival.numFestival=?" ;
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row;
}
	public function getDataJeux4($num) {
		//nb jeux surdim
		$this->load->database('default');
		$sql="select sum(quantiteJeu) from concerner,reservation,festival where surdimension=1 and concerner.numReservation=reservation.numReservation and reservation.numFestival=festival.numFestival and festival.numFestival=?" ;
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row;
}		
	public function getDataJeux5($num) {
		//nb jeux proto
		$this->load->database('default');
		$sql="select sum(quantiteJeu) from concerner,reservation,festival where prototype=1 and concerner.numReservation=reservation.numReservation and reservation.numFestival=festival.numFestival and festival.numFestival=?" ;
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row;
}
	public function getDataFrais1($num) {
		//nb prix renvoi
		$this->load->database('default');
		$sql="select sum(prixRenvoi) as temp from reservation, festival,concerner where concerner.numReservation=reservation.numReservation and reservation.numFestival=festival.numFestival and festival.numFestival=?" ;
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row;
}
	public function getDataFrais2($num) {
		//benf prevu
		$this->load->database('default');
		$sql="select sum(prix) as temp from suivi,festival where suivi.numFestival=festival.numFestival and festival.numFestival=?" ;
		$res=$this->db->query($sql,$num);
		$row = $res->row_array();		
		return $row;
}
}


