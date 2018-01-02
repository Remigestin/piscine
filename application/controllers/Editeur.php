<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Editeur extends CI_Controller {

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

  public function fiche($id){
    $festival = $this->session->festival;
    
    $data['login'] = $this->session->login;
    $data['editeur'] = $this->editeur_model->selectById($id);
    $data['contact'] = $this->contact_model->selectByEditeur($id);
    $data['suivi'] = $this->suivi_model->selectByEditeur($id);
    
    $this->load->library('utile');
    
    //Pour les variables booleennes, on remplace les 1 par des Oui et des 0 par des Non
    $data['suivi'][0]->contacte = $this->utile->OuiNon($data['suivi'][0]->contacte);
    $data['suivi'][0]->presentAuFestival = $this->utile->OuiNon($data['suivi'][0]->presentAuFestival);
    $data['suivi'][0]->paiement = $this->utile->OuiNon($data['suivi'][0]->paiement);
    $data['suivi'][0]->facture = $this->utile->OuiNon($data['suivi'][0]->facture);
    $data['suivi'][0]->annule = $this->utile->OuiNon($data['suivi'][0]->annule);
    $data['suivi'][0]->reponse = $this->utile->OuiNon($data['suivi'][0]->reponse);
    
    
    $data['reservation'] = $this->reservation_model->selectByEditeur($id, $festival);
    
    //Pour chaque réservation, on récupère les jeux correspondants
    $data['jeu'] = array();
    foreach ($data['reservation'] as $item) {
        $tmp = $this->jeu_model->selectByReservation($item->numReservation, $festival);
        array_push($data['jeu'], $tmp);
    }
    $this->load->view('editeur/fiche_editeur', $data);
  }


}
