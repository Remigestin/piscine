<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
        public function __construct() {
            //	Obligatoire
            parent::__construct();
 
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
        
}   
