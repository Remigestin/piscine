<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zone extends CI_Controller {

        public function __construct() {
            //	Obligatoire
            parent::__construct();
                if (!($this->session->has_userdata('login'))) {

                    header('location: ' . site_url('login/errorSession'));
                }
                 else {
                    if(!($this->session->has_userdata('festival'))) {
                        $festival = $this->festival_model->getLast();
                        $this->session->festival = $festival[0]->numFestival;
                        $this->session->anneeFestival = $festival[0]->année;

                    }
                }

        }

  public function index(){
    $data['zoneEditeur'] = $this->zone_model->getZoneEditeur();
	$data['zoneType'] = $this->zone_model->getZoneType();
        foreach ($data['zoneType'] as $item) {
            $item->nbTable = $item->nbDemiTable /2 ;
        }
        foreach ($data['zoneEditeur'] as $item) {
            $item->nbTable = $item->nbDemiTable /2 ;
        }
    $data['login'] = $this->session->login;
    $this->load->view('zone/liste_zone', $data);
  }

  public function fiche($id){
    $festival = $this->session->festival;
    $data['login'] = $this->session->login;

    $data['ficheZone'] = $this->zone_model->getficheZone($id,$festival);
    $this->load->view('zone/fiche_zone', $data);


  }

	}
