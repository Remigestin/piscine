<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suivi extends CI_Controller {
    
        public function __construct() {
            //	Obligatoire
            parent::__construct();
                if (!($this->session->has_userdata('login'))) {
           
                    header('location: ' . site_url('utilisateur/errorSession'));
                } 
            
        }
        
	public function index()
	{
                
                $data['suivi'] = $this->suivi_model->selectAll();
                $data['login'] = $this->session->login;
                foreach($data['suivi'] as $item) {
                    
                    $item->annule = str_replace(1, "Oui", $item->annule); //Pour les variables booleennes, on remplace les 1 par des Oui et des 0 par des Non
                    $item->annule = str_replace(0, "Non", $item->annule);
                    
                    $item->contacte = str_replace(1, "Oui", $item->contacte);
                    $item->contacte = str_replace(0, "Non", $item->contacte);
                    
                    $item->paiement = str_replace(1, "Oui", $item->paiement);
                    $item->paiement = str_replace(0, "Non", $item->paiement);
                    
                    $item->presentAuFestival = str_replace(1, "Oui", $item->presentAuFestival);
                    $item->presentAuFestival = str_replace(0, "Non", $item->presentAuFestival);
                    
                    $item->facture = str_replace(1, "Oui", $item->facture);
                    $item->facture = str_replace(0, "Non", $item->facture);
                    
                    
                    $nom = $this->editeur_model->selectNameById($item->numEditeur); //on récupère le nom de l'editeur à partir de son id
                    $item->nomEditeur = $nom[0]->nomEditeur;
                }
		$this->load->view('suivi/home', $data);
	}
}
