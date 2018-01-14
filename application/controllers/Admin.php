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
                        $this->session->anneeFestival = $festival[0]->année;
                       
                    }
                }
            
        }
public function index()
	{
	$festival = $this->session->festival;
        
	$data['login'] = $this->session->login;
        
        $data['festival'] = $this->festival_model->selectAll();
                
	$data['editeur1'] = $this->admin_model->getDataEditeur1($festival);
	$data['editeur2'] = $this->admin_model->getDataEditeur2($festival);
	$data['editeur3'] = $this->admin_model->getDataEditeur3($festival);
	$data['editeur4'] = $this->admin_model->getDataEditeur4($festival);
	$data['editeur5'] = $this->admin_model->getDataEditeur5($festival);
	$data['editeur6'] = $this->admin_model->getDataEditeur6($festival);
	$data['jeu1'] = $this->admin_model->getDataJeux($festival);
	$data['jeu2'] = $this->admin_model->getDataJeux2($festival);
	$data['jeu3'] = $this->admin_model->getDataJeux3($festival);
	$data['jeu4'] = $this->admin_model->getDataJeux4($festival);
	$data['jeu5'] = $this->admin_model->getDataJeux5($festival);
	$data['frais1'] = $this->admin_model->getDataFrais1($festival);
	$data['frais2'] = $this->admin_model->getDataFrais2($festival);
        
        $data["courant"] = $this->festival_model->selectById($festival);



	$this->load->view('admin/page_admin', $data);
	}
        
         public function nbTableMax() {
             $festival = $this->session->festival;
            $this->festival_model->update_nbTableMax($festival, $_POST['nbTable']);
             header('location:  ' . site_url("admin"));
        }
        
        public function changeFest() {
            $festival = $this->festival_model->selectById($_POST['festival']);
            $this->session->festival = $festival[0]->numFestival;
            $this->session->anneeFestival = $festival[0]->année;
            header('location:  ' . site_url('admin'));
        }
}