<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
    public function getDataEditeur1() {
		$this->load->database('default');
		$sql="select count(editeur.numEditeur) as temp from editeur";
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row ;
}
    public function getDataEditeur2() {
		$this->load->database('default');
		$sql="select sum(contacte) as temp from suivi where contacte=1";
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row ;
}
	public function getDataEditeur3() {
		$this->load->database('default');
		$sql="select count(numEditeur) as temp from (select distinct numEditeur from reservation) as a";
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row ;
}
	public function getDataEditeur4() {
		$this->load->database('default');
		$sql="select sum(annule) as temp from suivi where annule=1";
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row ;
		}
	public function getDataEditeur5() {
		$this->load->database('default');
		$sql="select sum(facture) as temp from suivi where facture=1";
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row ;
		}
	public function getDataEditeur6() {
		$this->load->database('default');
		$sql="select count(paiement) as temp from suivi where paiement=1";
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row ;
		}
	public function getDataJeux() {
		$this->load->database('default');
		$sql="select sum(quantiteJeu) as temp from concerner";
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row ;
	}
	public function getDataJeux2() {
		$this->load->database('default');
		$sql="select sum(quantiteJeu) as temp from concerner where arrive=1" ;
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row;
}
	public function getDataJeux3() {
		$this->load->database('default');
		$sql="select sum(quantiteJeu) from concerner where aRenvoyer=1" ;
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row;
}
	public function getDataJeux4() {
		$this->load->database('default');
		$sql="select sum(quantiteJeu) from concerner where surdimension=1" ;
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row;
}		
	public function getDataJeux5() {
		$this->load->database('default');
		$sql="select sum(quantiteJeu) from concerner where prototype=1" ;
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row;
}
	public function getDataFrais1() {
		$this->load->database('default');
		$sql="select sum(prixRenvoi) as temp from concerner" ;
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row;
}
	public function getDataFrais2() {
		$this->load->database('default');
		$sql="select sum(prix) as temp from suivi" ;
		$res=$this->db->query($sql);
		$row = $res->row_array();		
		return $row;
}
}


