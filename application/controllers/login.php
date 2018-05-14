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
        
        if (!$result) {
            //ako nije ulogovan, vrati na indeks
            $msg='<font color=red>Invalid username and/or password.</font><br>';
            $this->index($msg);
        } 
        else {
            //uloguj korisnika
         //  redirect(base_url('admin/index'));
           //$this->load->helper('url');

            redirect (site_url('/admin/index'));
            
        }
        
    }
    
    
   
    
}



//https://www.codeproject.com/Articles/476944/Create-user-login-with-Codeigniter