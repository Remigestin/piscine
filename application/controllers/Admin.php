<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
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
                       
                    }
                }
            
        }
public function index()
	{              
	$data['login'] = $this->session->login;
	$data['editeur1'] = $this->admin_model->getDataEditeur1();
	$data['editeur2'] = $this->admin_model->getDataEditeur2();
	$data['editeur3'] = $this->admin_model->getDataEditeur3();
	$data['editeur4'] = $this->admin_model->getDataEditeur4();
	$data['editeur5'] = $this->admin_model->getDataEditeur5();
	$data['editeur6'] = $this->admin_model->getDataEditeur6();
	$data['jeu1'] = $this->admin_model->getDataJeux();
	$data['jeu2'] = $this->admin_model->getDataJeux2();
	$data['jeu3'] = $this->admin_model->getDataJeux3();
	$data['jeu4'] = $this->admin_model->getDataJeux4();
	$data['jeu5'] = $this->admin_model->getDataJeux5();
	$data['frais1'] = $this->admin_model->getDataFrais1();
	$data['frais2'] = $this->admin_model->getDataFrais2();



	$this->load->view('admin/page_admin', $data);
	}
}