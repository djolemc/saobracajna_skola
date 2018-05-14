<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_admin
 *
 * @author Korisnik
 */
class model_admin extends CI_Model{
     public function __construct() {
        parent::__construct();
        $this->load->database();
    }
public function unesi_ucenika(){
     $this->db->set("delovodni_broj", $delovodni_broj);
     $this->db->set("jedinstveni_broj", $jedinstveni_broj);
     $this->db->set("ime", $ime);
     $this->db->set("prezime", $prezime);
     $this->db->set("ime_roditelja", $ime_otac);
     $this->db->set("datum", mdate("%Y-%m-%d"));
     $this->db->insert("ucenik");
     $id=$this->db->insert_id();
      //return $id;
    }
}