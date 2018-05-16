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
class model_admin extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function unesi_ucenika() {

        /* $this->form_validation->set_rules('ime','Унеси име',
          'required|min_length[2]|max_length[20]');
          //$this->form_validation->set_rules('jedinstveni_broj','Јединствени број','required');
          if($this->form_validation->run()==FALSE){
          $this->unesi_ucenika();// ne treba redirect jer na refresh treba da proba da opet nesto doda
          }
          else{
          //ispravno */
        $data = array(
            'ime' => $this->input->post("ime"),
            'jedinstveni_broj_ucenik' => $this->input->post("jedinstveni_broj"),
            'delovodni_broj' => $this->input->post("delovodni"),
            'prezime' => $this->input->post("prezime"),
            'ime_otac' => $this->input->post("ime_oca"),
            'ime_majka' => $this->input->post("ime_majke"),
            'prezime_majka' => $this->input->post("prezime_majke"),
            'datum_rodjenje' => $this->input->post("datum"),
            'jmbg' => $this->input->post("jmbg"),
            'mesto_rodjenje' => $this->input->post("mesto_rodj"),
            'opstina_rodjenje' => $this->input->post("opstina_rodj"),
            'drzava_rodjenje' => $this->input->post("drzava_rodj"),
            'adresa_stanovanje' => $this->input->post("adresa_stan"),
            'broj_telefon' => $this->input->post("broj_tel"),
            'telefon_mobilni' => $this->input->post("mobilni"),
            'e-mail' => $this->input->post("email")
        );



        /* $this->db->set("ime", $ime);
          $this->db->set("jedinstveni_broj_ucenik", $jedinstveni_broj);
          $this->db->set("delovodni_broj", $delovodni);
          $this->db->set("prezime", $prezime);
          $this->db->set("ime_otac", $ime_oca);
          $this->db->set("ime_majka", $ime_majke);
          $this->db->set("prezime_majka", $prezime_majke);
          $this->db->set("datum_rodjenje", mdate("%Y-%m-%d"));
          $this->db->set("jmbg", $jmbg);
          $this->db->set("mesto_rodjenje", $mesto_rodj);
          $this->db->set("opstina_rodjenje", $opstina_rodj);
          $this->db->set("drzava_rodjenje", $drzava_rodj);
          $this->db->set("adresa_stanovanje", $adresa_stan);
          $this->db->set("broj_telefon", $broj_tel);
          $this->db->set("telefon_mobilni", $mobilni);
          $this->db->set("e-mail", $email);
          $this->db->set("tip_ucenik_idtip_ucenik",1);
          $this->db->set("godina_obrazovanja_idgodina_obrazovanja",1); */

        $this->db->insert("ucenik", $data);
        // $id=$this->db->insert_id();
        //return $id;
    }

//}

    public function unesi_profesora() {

        $data = array(
            'ime' => $this->input->post("ime"),
            'idprofesor' => $this->input->post("idprofesor"),
            'prezime' => $this->input->post("prezime"),
            'adresa' => $this->input->post("adresa"),
            'broj_telefon' => $this->input->post("broj_telefon"),
            'e-mail' => $this->input->post("e-mail"),
            'angazovan_sa_strane' => $this->input->post("angazovan")
        );


        $this->db->insert("profesor", $data);
    }

    public function unos_operatera() {
        $ime = $this->input->post("ime");
        $prezime = $this->input->post("prezime");
        $username = $this->input->post("kor_ime");
        $password = $this->input->post("lozinka");
        $email = $this->input->post("email");
        $tip = $this->input->post("tip");

        $this->db->set("ime", $ime);
        $this->db->set("prezime", $prezime);
        $this->db->set("korisnicko_ime", $username);
        $this->db->set("lozinka", $password);
        $this->db->set("email", $email);
        $this->db->set("guid", $tip);

        $this->db->insert("korisnik");
    }

    public function dohvati_operatera() {

        $query = $this->db->query('select * from korisnik where guid="1"');
        $result = $query->result_array();
        return $result;
    }

    public function obrisi_operatera($idkorisnik) {
        $query = $this->db->query("delete  from korisnik where idkorisnik='$idkorisnik'");
        //to do Ime i prezime korisnika
    }

}
