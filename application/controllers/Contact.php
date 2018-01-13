<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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

  public function creer($id){
     $data['id'] = $id;
     $data['action'] = "create";
     $this->load->view('contact/ajout_contact', $data);
     
  }
  
  public function create() {
      $data = array(
            "nomContact" => htmlspecialchars($_POST['nomContact']),
            "prenomContact" => htmlspecialchars($_POST['prenomContact']),
            "mailContact" => htmlspecialchars($_POST['mailContact']),
            "telContact" => htmlspecialchars($_POST['telContact']),
            "numEditeur" => htmlspecialchars($_POST['id']),
        );
      
      $this->contact_model->insert($data);
      $editeur = $_POST['id'];
      header('location:  ' . site_url("editeur/fiche/$editeur"));
  }
  
  public function modifier($id) {
      $data['contact'] = $this->contact_model->selectById($id);
      $data['action'] = "edit";
      $data['id'] = $id;
      $this->load->view('contact/ajout_contact',$data);
  }
  
  public function edit() {
      
      $data = array(
            "nomContact" => htmlspecialchars($_POST['nomContact']),
            "prenomContact" => htmlspecialchars($_POST['prenomContact']),
            "mailContact" => htmlspecialchars($_POST['mailContact']),
            "telContact" => htmlspecialchars($_POST['telContact']), 
        );
     
      $id = $_POST['id'];
      $this->contact_model->update($id, $data);
      $contact = $this->contact_model->selectById($id);
      $editeur = $contact[0]->numEditeur;
      header('location:  ' . site_url("editeur/fiche/$editeur"));
  }
  
  public function delete($id) {
      $contact = $this->contact_model->selectById($id);
      $editeur = $contact[0]->numEditeur;
        $this->contact_model->delete($id);
         header('location:  ' . site_url("editeur/fiche/$editeur"));
    }


}

