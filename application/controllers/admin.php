<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Dragoljub Djordjevic
 * Description: Admin controller class
 * Ovo mogu da vide samo ulogovani korisnici
 */

class admin extends CI_Controller {
    public $controller;
    public function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        // $this->load->helper('url');
        $this->load->model('model_admin');
        $this->controller="admin";
    }

    public function index() {
              $this->loadView("index.php");
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect(site_url('/admin/index'));
        }
    }

    public function loadView($glavniDeo, $korisnici = NULL) {
        $korisnici['controller']=$this->controller;
        $this->load->view('sabloni/header');
        $this->load->view('admin/admin_menu');
        $this->load->view($glavniDeo, $korisnici);
        $this->load->view('sabloni/footer');
    }

    public function do_logout() {
        $this->session->sess_destroy();
        redirect(site_url('/login/index'));
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

    public function unesi_ucenika() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('ime', 'Ime_ucenika', 'required');
        $this->form_validation->set_rules('jedinstveni_broj', 'Ime_ucenika', 'required');
        $this->form_validation->set_rules('delovodni', 'Ime_ucenika', 'required');
        $this->form_validation->set_rules('prezime', 'Prezime_ucenika', 'required');
        $this->form_validation->set_rules('ime_oca', 'Ime_oca', 'required');
        $this->form_validation->set_rules('ime_majke', 'Ime_majke', 'required');
        $this->form_validation->set_rules('prezime_majke', 'Prezime_majke', 'required');
        $this->form_validation->set_rules('datum', 'Datum', 'required');
        $this->form_validation->set_rules('jmbg', 'Jmbg', 'required');
        $this->form_validation->set_rules('mesto_rodj', 'Mesto_rodjenja', 'required');
        $this->form_validation->set_rules('opstina_rodj', 'Opstina_rodjenja', 'required');
        $this->form_validation->set_rules('drzava_rodj', 'Drzava_rodjenja', 'required');
        $this->form_validation->set_rules('adresa_stan', 'Adresa_stanovanja', 'required');
        $this->form_validation->set_rules('broj_tel', 'Broj_telefona', 'required');
        $this->form_validation->set_rules('mobilni', 'Mobilni', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if($this->form_validation->run()=== FALSE){
            $this->loadView("ucenik.php");
        }else{
            $this->model_admin->unesi_ucenika();
            /*$data = array(
            'poruka' => "Profesor je uspešno dodat u bazu!");
            $this->session->set_userdata($data);*/
            redirect(site_url('/admin/ucenik'));
        }
        
    }

    public function unesi_profesora() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('ime', 'Ime_profesora', 'required');
        
        if($this->form_validation->run()=== FALSE){
            $this->loadView("profesor.php");
        }else{
            $this->model_admin->unesi_profesora();
            /*$data = array(
            'poruka' => "Profesor je uspešno dodat u bazu!");
            $this->session->set_userdata($data);*/
            redirect(site_url('/admin/profesor'));
        }
        
        
    }



}

?>
