<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jeu extends CI_Controller {

  public function __construct() {
      //	Obligatoire
      parent::__construct();
          if (!($this->session->has_userdata('login'))) {

              header('location: ' . site_url('utilisateur/errorSession'));
          }

  }

  public function index(){
    $data['jeu'] = $this->jeu_model->getJeu();
    $data['login'] = $this->session->login;
    $this->load->view('jeu/liste_jeux', $data);
  }


}
