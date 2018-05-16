<?php

require_once APPPATH . 'controllers\admin.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of direktor
 *
 * @author Korisnik
 */
class direktor extends admin {
    public function __construct() {
        parent::__construct();
        $tip = $this->session->userdata('tip');
        if ($tip ==1) {
            echo 'Niste autorizovani da pristupite stranici!!!';
            //dodati link ka indexu
            exit;
        }
        $this->controller="direktor";
    }
    
     public function loadView($glavniDeo, $korisnici = NULL) {
        $korisnici['controller']=$this->controller;
        $this->load->view('sabloni/header');
        $this->load->view('direktor/direktor_menu');
        $this->load->view($glavniDeo, $korisnici);
        $this->load->view('sabloni/footer');
    }
    
    
     public function administracija() {
        $result = $this->model_admin->dohvati_operatera();
        $data['korisnici'] = $result;
        $this->loadView("direktor/administracija.php", $data);
    
    }
    
    
    public function unos_operatera() {
        //  $this->load->model('model_admin');
        $this->model_admin->unos_operatera();
        $data = array(
            'poruka' => "Operater je uspešno dodat u bazu!");
        $this->session->set_userdata($data);
        redirect(site_url('direktor/administracija'));
    }


         

    
    public function obrisi_operatera($idkorisnik) {
        $this->model_admin->obrisi_operatera($idkorisnik);
        redirect(site_url('/direktor/administracija'));

    }
}
