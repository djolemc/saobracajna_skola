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
    $ime=$this->input->post("ime");
    $jedinstveni_broj=$this->input->post("jedinstveni_broj");
    $delovodni=$this->input->post("delovodni");
    $prezime=$this->input->post("prezime");
    $ime_oca=$this->input->post("ime_oca");
    $ime_majke=$this->input->post("ime_majke");
    $prezime_majke=$this->input->post("prezime_majke");
    $datum=$this->input->post("datum");
    $jmbg=$this->input->post("jmbg");
    $mesto_rodj=$this->input->post("mesto_rodj");
    $opstina_rodj=$this->input->post("opstina_rodj");
    $drzava_rodj=$this->input->post("drzava_rodj");
    $adresa_stan=$this->input->post("adresa_stan");
    $broj_tel=$this->input->post("broj_tel");
    $mobilni=$this->input->post("mobilni");
    $email=$this->input->post("email");
     
    $this->db->set("ime", $ime);
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
    
    $this->db->insert("ucenik");
    // $id=$this->db->insert_id();
      //return $id;
    }
public function unesi_profesora(){
    $ime=$this->input->post("ime");
    $idprofesor=$this->input->post("idprofesor");
    $prezime=$this->input->post("prezime");
    $adresa=$this->input->post("adresa");
    $broj_telefon=$this->input->post("broj_telefon");
    $email=$this->input->post("e-mail");
    $angazovan=$this->input->post("angazovan");
    //titula
    //angazovan sa strane
     
    $this->db->set("ime", $ime);
    $this->db->set("idprofesor", $idprofesor);
    $this->db->set("prezime", $prezime);
    $this->db->set("adresa", $adresa);
    $this->db->set("broj_telefon", $broj_telefon);
    $this->db->set("e-mail", $email);
    $this->db->set("angazovan_sa_strane", $angazovan);
    
    
    
    $this->db->insert("profesor");    
}  

public function unos_operatera() {
    $ime= $this->input->post("ime");
    $prezime= $this->input->post("prezime");
    $username= $this->input->post("kor_ime");
    $password= $this->input->post("lozinka");
    $email= $this->input->post("email");
    $tip=$this->input->post("tip");
  
    $this->db->set("ime",$ime);
    $this->db->set("prezime",$prezime);
    $this->db->set("korisnicko_ime",$username);
    $this->db->set("lozinka",$password);
    $this->db->set("email",$email);
    $this->db->set("guid",$tip);
    
    $this->db->insert("korisnik");    
}



}