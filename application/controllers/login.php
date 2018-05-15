<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
       
            }
    
    public function index($msg= NULL) {
        $data['msg']=$msg;
        $this->load->view('sabloni/header');
        $this->load->view('logovanje',$data);
        $this->load->view('sabloni/footer');
    }
    
    public function process() {
        //load model
        $this->load->model('login_model');
        $result= $this->login_model->validate();
        $tip=$this->session->userdata('tip');
        
        if (!$result) {
            //ako nije ulogovan, vrati na indeks
            $msg='<font color=red>Invalid username and/or password.</font><br>';
            $this->index($msg);
        } 
        else {
            if ($tip==0) {
           
                //ako je ulogovan admin
            redirect (site_url('/admin/index_admin'));
            
        }
        else {
            if ($tip==1) {
                
                //ako je ulogovan operater
               redirect (site_url('/admin/index_korisnik')); 
            }
        } 
            
        
    }
    
    }
   
    
}



//https://www.codeproject.com/Articles/476944/Create-user-login-with-Codeigniter


?>