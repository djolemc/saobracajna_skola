<?php

class login extends CI_Controller {

    public function index() {
        $this->load->view('sabloni/header');
        $this->load->view('logovanje');
        $this->load->view('sabloni/footer');
    }

   
    
}
