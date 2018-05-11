<?php

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->loadView("index.php");
    }

    private function loadView($glavniDeo) {
        $this->load->view('sabloni/header');
        $this->load->view('sabloni/admin_menu');
        $this->load->view($glavniDeo);
        $this->load->view('sabloni/footer');
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
}

?>
