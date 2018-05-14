<?php



if (!defined('BASEPATH')) exit ('No direct script access allowed');

/*Autor:Dragoljub Djordjevic
*Opis:metod za logovanje korisnika
*/ 


class Login_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }


public function validate() {
    $username= $this->security->xss_clean($this->input->post('username'));
    $password= $this->security->xss_clean($this->input->post('password'));



//Priprema upit:

$this->db->where('username', $username);
$this->db->where('password', $password);

//Pokrece upit

$query=$this->db->get('users');

if ($query->num_rows==1) {
    //Ako imamo korisnika, pravimo podatke za sesiju
    $row=$query->row();
    $data=array (
        'userid' =>$row->userid,
        'fname' =>$row->fname,
        'lname'=>$row->lname,
        'username'=>$row->username,
        'valideted'=>true
         );
    $this->session->set_userdata($data);
    return true;
}
//ako validacija nije uspela, vrati false
return false;
}
}