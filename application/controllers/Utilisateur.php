<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {
    
        public function __construct() {
            //	Obligatoire
            parent::__construct();
 
        }

	
	public function index()
	{
		$this->load->view('user/login');
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
        
        public function errorSession() {
            $this->load->view('errors/page_403');
        }
}   
