<?php

class Home extends CI_Controller {
    
    public function index() {
        $data['judul'] = 'Home | Tegar Wahyu Akbar';
        $this->load->view("home/head", $data);
        $this->load->view("home/index");
        $this->load->view("home/foot");
    }

}