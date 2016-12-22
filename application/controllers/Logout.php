<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('Init_models');
       if ($this->session->userdata('logged_in'))
    { 

 $this->session->sess_destroy();

        redirect("index.php/home");
        
    }
    else{
        redirect("index.php/home");

    }

    }


    public function index() {
        $view_params = array(
            'm_title' => 'Logout',
            'title' => 'Logout'
        );
        $this->load->view('logout',$view_params);
    }

}
