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
                        $this->session->anneeFestival = $festival[0]->année;

                    }
                }

  }

  public function index() {

        $data['editeur'] = $this->editeur_model->selectAll();
        $data['login'] = $this->session->login;

        $this->load->view('editeur/liste_editeur', $data);
  }

  public function fiche($id){

    $festival = $this->session->festival;
    $data['login'] = $this->session->login;
    $data['editeur'] = $this->editeur_model->selectById($id);
    $data['contact'] = $this->contact_model->selectByEditeur($id);
    $data['suivi'] = $this->suivi_model->selectByEditeur($id, $festival);
    
    $this->load->library('utile');

    //Pour les variables booleennes, on remplace les 1 par des Oui et des 0 par des Non
    $data['suivi'][0]->contacte = $this->utile->OuiNon($data['suivi'][0]->contacte);
    $data['suivi'][0]->presentAuFestival = $this->utile->OuiNon($data['suivi'][0]->presentAuFestival);
    $data['suivi'][0]->paiement = $this->utile->OuiNon($data['suivi'][0]->paiement);
    $data['suivi'][0]->facture = $this->utile->OuiNon($data['suivi'][0]->facture);
    $data['suivi'][0]->annule = $this->utile->OuiNon($data['suivi'][0]->annule);
    $data['suivi'][0]->reponse = $this->utile->OuiNon($data['suivi'][0]->reponse);


    $data['reservation'] = $this->reservation_model->selectByEditeur($id, $festival);

    //Pour chaque réservation
    $data['jeuReservation'] = array();
    foreach ($data['reservation'] as $item) {

        // on récupère les jeux correspondants et on récupère le nom de la zone
        $tmp = $this->jeu_model->selectByReservation($item->numReservation, $festival);
        array_push($data['jeuReservation'], $tmp);

        //On récupère le nom de la zone
        $zone = $this->zone_model->selectById($item->numZone);
        $nomZone = Editeur::nomZone($zone[0]);
        $item->nomZone = $nomZone;

        $item->nbTable = $item->nbDemiTable / 2;

    }

    //Pour les variables booleennes, on remplace les 1 par des Oui et des 0 par des Non
    foreach ($data['jeuReservation'] as $item) {
        foreach ($item as $item2) {
            $item2->arrive = $this->utile->OuiNon($item2->arrive);
            $item2->aRenvoyer = $this->utile->OuiNon($item2->aRenvoyer);
            $item2->surdimension = $this->utile->OuiNon($item2->surdimension);
            $item2->prototype = $this->utile->OuiNon($item2->prototype);
        }
    }

    //On récupère tous les jeux de l'editeur indépendamment du festival
    $data['jeu'] = $this->jeu_model->selectByEditeurALL($id);

    $this->load->view('editeur/fiche_editeur', $data);
  }

   public function fiche2($id){

    $data['login'] = $this->session->login;
    $data['editeur'] = $this->editeur_model->selectById($id);
    $data['contact'] = $this->contact_model->selectByEditeur($id);



    //On récupère tous les jeux de l'editeur indépendamment du festival
    $data['jeu'] = $this->jeu_model->selectByEditeurALL($id);

    $this->load->view('editeur/fiche2_editeur', $data);
  }




  public function creer(){

     $data['action'] = "create";
     $this->load->view('editeur/ajout_editeur', $data);

  }

  public function create() {
      $data = array(
            "nomEditeur" => htmlspecialchars($_POST['nomEditeur']),
            "rueEditeur" => htmlspecialchars($_POST['rueEditeur']),
            "villeEditeur" => htmlspecialchars($_POST['villeEditeur']),
            "cpEditeur" => htmlspecialchars($_POST['cpEditeur']),
        );

      $this->editeur_model->insert($data);

       $editeur = $this->editeur_model->getLast();
       $id = $editeur[0]->numEditeur;

       header('location:  ' . site_url("editeur/fiche2/$id"));




  }

  public function modifier($id,  $typeFiche) {
      $data['editeur'] = $this->editeur_model->selectById($id);
      $data['typeFiche'] = $typeFiche;
      $data['action'] = "edit";
      $this->load->view('editeur/ajout_editeur',$data);
  }

  public function edit() {

       $data = array(
            "nomEditeur" => htmlspecialchars($_POST['nomEditeur']),
            "rueEditeur" => htmlspecialchars($_POST['rueEditeur']),
            "villeEditeur" => htmlspecialchars($_POST['villeEditeur']),
            "cpEditeur" => htmlspecialchars($_POST['cpEditeur']),
        );
     $id = $_POST['numEditeur'];

      $this->editeur_model->update($id, $data);
      if ($_POST['typeFiche'] == 1){
           header('location:  ' . site_url("editeur/fiche/$id"));
      } else {
          header('location:  ' . site_url("editeur/fiche2/$id"));
      }

  }

  public function delete($id) {
      $data['editeur'] = $this->editeur_model->selectById($id);
      $this->editeur_model->delete($id);
      header('location:  ' . site_url("editeur"));
    }

     public function commentaire($id, $editeur) {
        $this->suivi_model->update_commentaire($id, $_POST['commentaire']);
        header('location:  ' . site_url("editeur/fiche/$editeur"));
   }




  public function nomZone($zone) {


        if ($zone->numType == NULL) {
            $nom = $this->editeur_model->selectById($zone->numEditeur);
            return $nom[0]->nomEditeur;
        }
        else if ($zone->numEditeur == NULL) {
            $nom = $this->type_model->selectById($zone->numType);
            return $nom[0]->libelleType;
        }
    }



}
