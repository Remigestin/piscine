<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Editeur_model extends CI_Model {

    protected $table = 'editeur';

    public function selectAll() {
        $this->load->database('default');

        return $this->db->select('*')
                        ->from($this->table)
                        ->get()
                        ->result();


    }

    public function selectById($id) {
         $this->load->database('default');

        return $this->db->select('*')
                        ->from($this->table)
                        ->where('editeur.numEditeur', $id)
                        ->get()
                        ->result();
    }

     public function selectNameById($id) {
        $this->load->database('default');

        return $this->db->select('nomEditeur')
                        ->from($this->table)
                        ->where('numEditeur', $id)
                        ->get()
                        ->result();


    }

    public function getLast() {
      $this->load->database('default');

    return $this->db->select('*')
                    ->from($this->table)
                    ->order_by('numEditeur', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  }

  public function insert($data) {
    $this->load->database('default');


        $this->db->set('nomEditeur', $data['nomEditeur'])
                ->set('rueEditeur', $data['rueEditeur'])
                ->set('villeEditeur', $data['villeEditeur'])
                ->set('cpEditeur', $data['cpEditeur'])
                ->insert($this->table);
  }

  public function update($id, $data) {
        $this->load->database('default');

        $this->db->set('nomEditeur', $data['nomEditeur'])
                ->set('rueEditeur', $data['rueEditeur'])
                ->set('villeEditeur', $data['villeEditeur'])
                ->set('cpEditeur', $data['cpEditeur']);


        $this->db->where('numEditeur', (int)$id);
        return $this->db->update($this->table);

    }

  public function delete($id) {
        $this->load->database('default');

        return $this->db->where('numEditeur', (int) $id)
			->delete($this->table);
    }

}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
