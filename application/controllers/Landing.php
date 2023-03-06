<?php

/**
 * 
 */
class Landing extends CI_Controller {
    

    public function index() {
        $this->load->view('landing/index');
    }

    public function detail() {
        $this->load->view('landing/pengaduan-detail');
    }
    
    
}