<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Editeur extends CI_Controller {

  public function __construct() {
      //	Obligatoire
      parent::__construct();
          if (!($this->session->has_userdata('login'))) {

              header('location: ' . site_url('utilisateur/errorSession'));
          }

  }

  public function fiche($id){
      
    $data['login'] = $this->session->login;
    $data['editeur'] = $this->editeur_model->selectById($id);
    $data['reservation'] = $this->reservation_model->selectByEditeur($id);
    $data['jeu'] = array();
    foreach ($data['reservation'] as $item) {
        $tmp = $this->jeu_model->selectByReservation($item->numReservation);
        array_push($data['jeu'], $tmp);
    }
    $this->load->view('editeur/fiche_editeur', $data);
  }


}
