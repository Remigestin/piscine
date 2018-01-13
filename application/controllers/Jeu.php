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
                        $this->session->anneeFestival = $festival[0]->année;

                    }
                }

  }

  public function index(){
    $festival = $this->session->festival;

    $data['jeu'] = $this->jeu_model->getJeu($festival);
    $data['jeu1'] = $this->admin_model->getDataJeux($festival);
    $data['jeu2'] = $this->admin_model->getDataJeux2($festival);
    $data['login'] = $this->session->login;
    $this->load->view('jeu/liste_jeux', $data);
  }


}
