<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class coursedetails extends CI_Controller {

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
        $this->load->model('init_models');


         /*if ( !$this->session->userdata('logged_in'))
    { 
        $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    }*/

    }


    public function index() {
        $banners = $this->init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'Course Details',
            'title' => 'Course Details',
            'banners' => $banners
        );
        $this->load->view('coursedetails',$view_params);
        if(isset($_POST['action']))
        {
        $this->insertreview();
        }
    }
       

    function insertreview()
    {
        $sessid= $this->session->userdata('suserid');
        $data=array(

            /* 'course_rating' =>$this->input->post('rating'),*/
            'course_rating' => "5",
            'course_review' =>$this->input->post('Review_Contents'),
            'review_title' =>$this->input->post('Review_title'),
            'course_id' =>$this->input->post('course_id'),
            'user_id' => $sessid
             
            );
            
 $this->init_models->insertreview($data);
             
    //echo"<script>alert('Data Inserted Successfully');</script>";
             
    }

}
