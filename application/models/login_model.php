<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Autor:Dragoljub Djordjevic
 * Opis:metod za logovanje korisnika
 */

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function validate() {
        //   $username= $this->security->xss_clean($this->input->post('username'));
        //   $password= $this->security->xss_clean($this->input->post('password'));
        $username = $this->input->post('username');
        $password = $this->input->post('password');


//Priprema upit:

        $this->db->where('user_name', $username);
        $this->db->where('user_password', $password);

//Pokrece upit

        $query = $this->db->get('user_login');
        $user=$query->row_array();



        if ($user!=NULL) {
            //Ako imamo korisnika, pravimo podatke za sesiju
           // $row = $query->row();
            /*$data = array(
                'userid' => $row->id,
                'username' => $row->username,
                'validated' => true
            );
            $this->session->set_userdata($data);*/
            return true;
        } else
//ako validacija nije uspela, vrati false
            return false;
    }

}

/*public function ispravanpassword($password){
        $this->db->where('username',$this->username);
        $this->db->where('password',$password);
        $result=$this->db->get('autor');
        $autor=$result->row_array();
       
        if($autor!=NULL){
            $this->ime=$autor['ime'];
            $this->prezime=$autor['prezime'];
            $this->id=$autor['id'];
            return TRUE;
        }
        else
            return false;*/