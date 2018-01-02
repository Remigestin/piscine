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
}
