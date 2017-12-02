<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suivi extends CI_Controller {
    
        public function __construct() {
            //	Obligatoire
            parent::__construct();

            $this->load->model('suivi_model');
        }
        
	public function index()
	{
                $data['suivi'] = $this->suivi_model->selectAll();
		$this->layout->view('suivi/home', $data);
	}
}
