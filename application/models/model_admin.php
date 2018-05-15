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
    $jedinstveni_broj_ucenik=$this->input->post("jedinstveni_broj_ucenik");
    $delovodni_broj=$this->input->post("delovodni_broj");
    $prezime=$this->input->post("prezime");
    $ime_otac=$this->input->post("ime_otac");
    $ime_majka=$this->input->post("ime_majka");
    $prezime_majka=$this->input->post("prezime_majka");
    $datum=$this->input->post("datum_rodjenje");
    $jmbg=$this->input->post("jmbg");
     
    $this->db->set("ime", $ime);
    $this->db->set("jedinstveni_broj_ucenik", $jedinstveni_broj_ucenik);
    $this->db->set("delovodni_broj", $delovodni_broj);
    $this->db->set("prezime", $prezime);
    $this->db->set("ime_otac", $ime_otac);
    $this->db->set("ime_majka", $ime_majka);
    $this->db->set("prezime_majka", $prezime_majka);
    $this->db->set("datum_rodjenje", mdate("%Y-%m-%d"));
    $this->db->set("jmbg", $jmbg);
    
    
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