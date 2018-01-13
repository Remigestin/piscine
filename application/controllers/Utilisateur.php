<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {
    
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
            if (!($this->session->has_userdata('login'))) {
		$this->load->view('user/login');
            }
            else {
                 header('location: '. site_url('suivi'));
            }
	}
        
        public function connected() {
            $this->load->library('securite');    
            $mdp = $this->securite->chiffrer($_POST['mdp']);
            $login = $_POST['login'];
            $check = $this->utilisateur_model->checkPassword($login, $mdp);
            $bool = empty($check);
            if ($bool) {
                $this->load->view('errors/error_test');
            } else {
                
                $this->session->set_userdata('login', $login);
                header('location: '. site_url('suivi'));
            }
        }
        
        public function deconnected() {
            $this->session->sess_destroy();
            header('location:  ' . site_url(''));
        }
        
        
}   
