<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Dragoljub Djordjevic
 * Description: Admin controller class
 * Ovo mogu da vide samo ulogovani korisnici
 */

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        // $this->load->helper('url');
        $this->load->model('model_admin');
    }

    public function index_admin() {
              $this->loadView("index.php");
    }
        

    public function index_korisnik() {
        $this->loadView("index.php");
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect(site_url('/admin/index'));
        }
    }

    public function loadView($glavniDeo, $korisnici = NULL) {

        $tip = $this->session->userdata('tip');

        if ($tip == 0)
            $menu = 'admin/admin_menu';
        else
        if ($tip == 1)
            $menu = 'korisnik/korisnik_menu';


        $this->load->view('sabloni/header');
        $this->load->view($menu);
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

    public function administracija() {
         $tip = $this->session->userdata('tip');
        if ($tip ==0) {
        $result = $this->model_admin->dohvati_operatera();
        $data['korisnici'] = $result;
        $this->loadView("admin/administracija.php", $data);
    }   else {
        echo 'Niste autorizovani da pristupite stranici!!!';
        //dodati link ka indexu
        exit;
        
    }
    }

    public function priznati_ispiti() {

        $this->loadView("priznati_ispiti.php");
    }

    public function dokumentacija() {
        $this->loadView("dokumentacija.php");
    }

    public function unesi_ucenika() {



        $ime = $this->input->post("ime");
        $jedinstveni_broj = $this->input->post("jedinstveni_broj");
        $delovodni = $this->input->post("delovodni");
        $prezime = $this->input->post("prezime");
        $ime_oca = $this->input->post("ime_oca");
        $ime_majke = $this->input->post("ime_majke");
        $prezime_majke = $this->input->post("prezime_majke");
        $datum = $this->input->post("datum");
        $jmbg = $this->input->post("jmbg");
        $mesto_rodj = $this->input->post("mesto_rodj");
        $opstina_rodj = $this->input->post("opstina_rodj");
        $drzava_rodj = $this->input->post("drzava_rodj");
        $adresa_stan = $this->input->post("adresa_stan");
        $broj_tel = $this->input->post("broj_tel");
        $mobilni = $this->input->post("mobilni");
        $email = $this->input->post("email");

        $this->load->model('model_admin');
        $this->model_admin->unesi_ucenika($ime, $jedinstveni_broj, $delovodni, $prezime, $ime_oca, $ime_majke, $prezime_majke, $datum, $jmbg, $mesto_rodj, $opstina_rodj, $drzava_rodj, $adresa_stan, $broj_tel, $mobilni, $email);
        redirect(site_url('admin/ucenik'));
    }

    public function unesi_profesora() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('ime', 'Ime_profesora', 'required');
        
        if($this->form_validation->run()=== FALSE){
            $this->loadView("profesor.php");
        }else{
            $this->model_admin->unesi_profesora();
            $data = array(
            'poruka' => "Profesor je uspešno dodat u bazu!");
            $this->session->set_userdata($data);
            redirect(site_url('/admin/profesor'));
        }
        
        
    }

    public function unos_operatera() {
        //  $this->load->model('model_admin');
        $this->model_admin->unos_operatera();
        $data = array(
            'poruka' => "Operater je uspešno dodat u bazu!");
        $this->session->set_userdata($data);
        redirect(site_url('/admin/administracija'));
    }


         

    
    public function obrisi_operatera($idkorisnik) {
        $this->model_admin->obrisi_operatera($idkorisnik);
        redirect(site_url('/admin/administracija'));

    }

}

?>
