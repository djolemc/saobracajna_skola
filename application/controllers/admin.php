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

    public function loadView($glavniDeo,$data="aaa") {

        $tip = $this->session->userdata('tip');

        if ($tip == 0)
            $menu = 'admin/admin_menu';
        else
        if ($tip == 1)
            $menu = 'korisnik/korisnik_menu';


        $this->load->view('sabloni/header');
        $this->load->view($menu);
        $this->load->view($glavniDeo,$data);
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
       $data['user']=$this->model_admin->dohvati_operatera();
       $this->loadView("admin/administracija.php",$data);
    }

    public function priznati_ispiti() {
        
        $this->loadView("priznati_ispiti.php");
    }

    public function dokumentacija() {
        $this->loadView("dokumentacija.php");
    }

    public function unesi_ucenika() {
        $this->load->model('model_admin');
        $this->model_admin->unesi_ucenika();
        redirect (site_url('admin/ucenik'));
    }

    public function unesi_profesora() {
        $this->load->model('model_admin');
        $this->model_admin->unesi_profesora();
    }

    public function unos_operatera() {
        $this->load->model('model_admin');
        $this->model_admin->unos_operatera();
        $data = array(
            'poruka' => "Operater je uspešno dodat u bazu!");
        $this->session->set_userdata($data);
        redirect(site_url('/admin/administracija'));
    }

   
}

?>
