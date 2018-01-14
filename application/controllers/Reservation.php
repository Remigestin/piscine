<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

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

  
  
  public function create() {
      $festival = $this->session->festival;
      
      $data = array(
            "numZone" => htmlspecialchars($_POST['numZone']),
            "numFestival" => htmlspecialchars($festival),
            "numEditeur" => htmlspecialchars($_POST['numEditeur']),
        );
      
     
      $this->reservation_model->insert($data);
      
      $id = $_POST['numEditeur'];
      
      header('location:  ' . site_url("editeur/fiche/$id"));

  }
  
  
  public function delete($id) {
      $reservation = $this->reservation_model->selectById($id);
      $idEditeur = $reservation[0]->numEditeur;
      $this->reservation_model->delete($id);
        header('location:  ' . site_url("editeur/fiche/$idEditeur"));
      
    }
  


}
