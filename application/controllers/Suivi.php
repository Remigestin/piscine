<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suivi extends CI_Controller {

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

	public function index()
	{

                $data['suivi'] = $this->suivi_model->selectAll($this->session->festival);
                $data['login'] = $this->session->login;
                $data['editeur1'] = $this->admin_model->getDataEditeur1($this->session->festival);
              	$data['editeur2'] = $this->admin_model->getDataEditeur2($this->session->festival);
                $data['nonSuivi'] = $this->suivi_model->selectEditeurNonSuivi($this->session->festival);


                foreach ($data['suivi'] as $item) {
                    $charges=$this->editeur_model->charges($item->numEditeur,$this->session->festival);
                    $produits=$this->editeur_model->produits($item->numEditeur,$this->session->festival);
                    $item->prix=$produits['prix']-$charges['temp'];
                    }

                foreach($data['suivi'] as $item) {

                    $this->load->library('utile');

                //Pour les variables booleennes, on remplace les 1 par des Oui et des 0 par des Non
                $item->contacte = $this->utile->OuiNon($item->contacte);
                $item->presentAuFestival = $this->utile->OuiNon($item->presentAuFestival);
                $item->paiement = $this->utile->OuiNon($item->paiement);
                $item->facture = $this->utile->OuiNon($item->facture);
                $item->annule = $this->utile->OuiNon($item->annule);
                $item->reponse = $this->utile->OuiNon($item->reponse);


                    $nom = $this->editeur_model->selectNameById($item->numEditeur); //on récupère le nom de l'editeur à partir de son id
                    $item->nomEditeur = $nom[0]->nomEditeur;
                }
		$this->load->view('suivi/home', $data);
	}

  public function add() {
    $numEditeur= $_POST['ajoutEditeurFestival'];
    $festival = $this->session->festival;

    $data = array(
      "commentaire" => "",
      "reponse" => 0,
      "prix" => 0,
      "presentAuFestival" => 0,
      "paiement" => 0,
      "facture" => 0,
      "contacte" => 0,
      "annule" => 0,
      "derniereDateContact" => "2010-01-01",
      "derniereDateReponse" => "2010-01-01",
      "numEditeur" => $numEditeur,
      "numFestival" => $festival
    );
    $this->suivi_model->insert($data);
    header('location: ' . site_url('suivi'));
  }

  public function modifier($id){
    $festival = $this->session->festival;
    $data['login'] = $this->session->login;
    $data['suivi'] = $this->suivi_model->selectByEditeur($id, $festival);
    //$data['nom'] = $this->editeur_model->selectNameById($data['suivi']->numEditeur);
    $this->load->view('suivi/modifier_suivi', $data);
  }

  public function edit(){
    $festival = $this->session->festival;
    $numEditeur = (int)$_POST['numEditeur'];
    $data['suivi'] = $this->suivi_model->selectByEditeur($numEditeur, $festival);

    $data = array(
      "numSuivi" =>$data['suivi'][0]->numSuivi,
      "commentaire" => $data['suivi'][0]->commentaire,
      "reponse" => (int)$_POST['repondu'],
      "prix" => $data['suivi'][0]->prix,
      "presentAuFestival" => (int)$_POST['present'],
      "paiement" => (int)$_POST['paye'],
      "facture" => (int)$_POST['facture'],
      "contacte" => (int)$_POST['contacte'],
      "annule" => (int)$_POST['annule'],
      "derniereDateContact" => (int)$_POST['derniereContact'],
      "derniereDateReponse" => (int)$_POST['derniereReponse'],
      "numEditeur" => $data['suivi'][0]->numEditeur,
      "numFestival" => $data['suivi'][0]->numFestival
    );

    $this->suivi_model->update($suivi[0]->numSuivi, $data);
    header('location: ' . site_url("editeur/fiche/$numEditeur"));

  }




}
