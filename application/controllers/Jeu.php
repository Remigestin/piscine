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
  
  public function creer($id, $type_fiche){
     $data['numEditeur'] = $id;
     $data['typeFiche'] = $type_fiche;
     $data['action'] = "create";
     $data['type'] = $this->type_model->selectAll();
     $this->load->view('jeu/formulaire_jeu', $data);
     
  }
  
  public function create() {
      $data = array(
            "nomJeu" => htmlspecialchars($_POST['nomJeu']),
            "numType" => htmlspecialchars($_POST['numType']),
            "numEditeur" => htmlspecialchars($_POST['numEditeur']),
        );
      
     
      $this->jeu_model->insert($data);
      
      $id = $_POST['numEditeur'];
      if ($_POST['typeFiche'] == 1){
           header('location:  ' . site_url("editeur/fiche/$id"));
      } else {
          header('location:  ' . site_url("editeur/fiche2/$id"));
      }
      
       
      
     
  }
  
  public function modifier($id,  $typeFiche) {
      
      $data['jeu'] = $this->jeu_model->selectById($id);
      $data['numEditeur'] = $data['jeu'][0]->numEditeur;
      $data['typeFiche'] = $typeFiche;
      $data['type'] = $this->type_model->selectAll();
      $data['action'] = "edit";
      $this->load->view('jeu/formulaire_jeu', $data);
  }
  
  public function edit() {
      
        $data = array(
            "nomJeu" => htmlspecialchars($_POST['nomJeu']),
            "numType" => htmlspecialchars($_POST['numType'])
        );
        
      $id = $_POST['numJeu'];
      $this->jeu_model->update($id, $data);
      
      $idEditeur = $_POST['numEditeur'];
      
      if ($_POST['typeFiche'] == 1){
           header('location:  ' . site_url("editeur/fiche/$idEditeur"));
      } else {
          header('location:  ' . site_url("editeur/fiche2/$idEditeur"));
      }
      
  }
  
  public function delete($typeFiche, $id) {
      $data['jeu'] = $this->jeu_model->selectById($id);
      $idEditeur = $data['jeu'][0]->numEditeur;
      $this->jeu_model->delete($id);
      
      
      if ($typeFiche == 1){
          header('location:  ' . site_url("editeur/fiche/$idEditeur"));
      } else {
          header('location:  ' . site_url("editeur/fiche2/$idEditeur"));
      }
    }
  


}
