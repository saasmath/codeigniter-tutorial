<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bootstrap_home extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $this->load->view('bootstrap/bootstrap_home');
    }

}