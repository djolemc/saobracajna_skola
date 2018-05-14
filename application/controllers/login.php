<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
       
            }
    
    public function index() {
        $this->load->view('sabloni/header');
        $this->load->view('logovanje');
        $this->load->view('sabloni/footer');
    }
    
    public function process() {
        //load model
        $this->load->model('login_model');
        $result= $this->login_model->validate();
        
        if (!result) {
            //ako nije ulogovan, vrati na indeks
            $this->index();
        } 
        else {
            //uloguj korisnika
            redirect ('home');
        }
        
    }
    

   
    
    
   
    
}



//https://www.codeproject.com/Articles/476944/Create-user-login-with-Codeigniter