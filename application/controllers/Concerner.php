<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Concerner extends CI_Controller {

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

  
  
  public function creer(){
     
     
     $data['action'] = "create";
     $data['numJeu'] = $_POST['numJeu'];
     $data['numReservation'] = $_POST['numReservation'];
     $this->load->view('jeu/modifier_jeu_reservation', $data);
     
  }
  
  public function create() {
      $data = array(
            "quantiteJeu" => htmlspecialchars($_POST['quantiteJeu']),
            "arrive" => htmlspecialchars($_POST['arrive']),
            "aRenvoyer" => htmlspecialchars($_POST['aRenvoyer']),
            "surdimension" => htmlspecialchars($_POST['surdimension']),
            "prixRenvoi" => htmlspecialchars($_POST['prixRenvoi']),
            "prototype" => htmlspecialchars($_POST['prototype'])
            
        );
      
      $idJeu = $_POST['numJeu'];
      $idReservation = $_POST['numReservation'];
      
      $this->concerner_model->insert($idJeu, $idReservation, $data);
      
      $jeu = $this->jeu_model->selectById($idJeu);
      $idEditeur = $jeu[0]->numEditeur;
      
      header('location:  ' . site_url("editeur/fiche/$idEditeur"));
     
      
       
      
     
  }
  
  public function modifier($idJeu, $idReservation) {
      
      $data['concerner'] = $this->concerner_model->selectById($idJeu, $idReservation);
      $data['numJeu'] = $idJeu;
     $data['numReservation'] = $idReservation;
      $data['action'] = "edit";
      $this->load->view('jeu/modifier_jeu_reservation', $data);
  }
  
  public function edit() {
      
        $data = array(
            "quantiteJeu" => htmlspecialchars($_POST['quantiteJeu']),
            "arrive" => htmlspecialchars($_POST['arrive']),
            "aRenvoyer" => htmlspecialchars($_POST['aRenvoyer']),
            "surdimension" => htmlspecialchars($_POST['surdimension']),
            "prixRenvoi" => htmlspecialchars($_POST['prixRenvoi']),
            "prototype" => htmlspecialchars($_POST['prototype'])
            
        );
        
      $idJeu = $_POST['numJeu'];
      $idReservation = $_POST['numReservation'];
      $this->concerner_model->update($idJeu, $idReservation, $data);
      
      
      $jeu = $this->jeu_model->selectById($idJeu);
      $idEditeur = $jeu[0]->numEditeur;

      header('location:  ' . site_url("editeur/fiche/$idEditeur"));
      
      
  }
  
  public function delete($idJeu, $idReservation) {
      $data['jeu'] = $this->jeu_model->selectById($idJeu);
      $idEditeur = $data['jeu'][0]->numEditeur;
      $this->concerner_model->delete($idJeu, $idReservation);

      header('location:  ' . site_url("editeur/fiche/$idEditeur"));
      
    }
  


}
