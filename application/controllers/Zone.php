<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Zone extends CI_Controller {
    
        public function __construct() {
            //	Obligatoire
            parent::__construct();
                if (!($this->session->has_userdata('login'))) {
           
                    header('location: ' . site_url('utilisateur/errorSession'));
                } 
            
        }
        
  public function index(){
    $data['zoneEditeur'] = $this->zone_model->getZoneEditeur();
	$data['zoneType'] = $this->zone_model->getZoneType();
    $data['login'] = $this->session->login;
    $this->load->view('zone/liste_zone', $data);
  }
	}
