<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Dragoljub Djordjevic
 * Description: Admin controller class
 * Ovo mogu da vide samo ulogovani korisnici
 */

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
      $this->check_isvalidated();
        // $this->load->helper('url');
    }

    public function index() {
        $this->loadView("index.php");
    }
    
   private function check_isvalidated(){
        if (!$this->session->userdata('validated')) {
             redirect (site_url('/admin/index'));
        }
    }


        private function loadView($glavniDeo) {
        $this->load->view('sabloni/header');
        $this->load->view('sabloni/admin_menu');
        $this->load->view($glavniDeo);
        $this->load->view('sabloni/footer');
    }

    public function do_logout(){
        $this->session->sess_destroy();
        redirect (site_url('/login/index'));
    }


public function ucenik() {
    $this->loadView("ucenik.php");
}
public function profesor() {
    $this->loadView("profesor.php");
}
public function predmet() {
    $this->loadView("predmet.php");
}

public function prijava_ispita() {
    $this->loadView("prijava_ispita.php");
}
public function raspored() {
    $this->loadView("raspored.php");
}
    
public function statistika() {
    $this->loadView("statistika.php");
}

public function priznati_ispiti() {
    $this->loadView("priznati_ispiti.php");
}
public function dokumentacija() {
    $this->loadView("dokumentacija.php");
}
public function unesi_ucenika(){
    $delovodni_broj=$this->input->post("delovodni_broj");
    $jedinstveni_broj=$this->input->post("jedinstveni_broj");
    $ime=$this->input->post("ime");
    $prezime=$this->input->post("prezime");
    $ime_roditelja=$this->input->post("ime_roditelja");
    $datum=$this->input->post("datum");
    
    $id=$this->model_admin->unesi_ucenika();
}
}

?>
