<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jeu extends CI_Controller {

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

  public function index(){
    $data['jeu'] = $this->jeu_model->getJeu($this->session->festival);
    $data['login'] = $this->session->login;
    $this->load->view('jeu/liste_jeux', $data);
  }


}
