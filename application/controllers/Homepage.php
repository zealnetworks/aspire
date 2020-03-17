<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller 
{
	public function __construct ()
    {
        parent::__construct(); 
        $this->load->model ('');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

    }

    public function index () {
        $this->data['title'] = 'Aspire solutions Nig';
		$this->load->view('homepage/index', $this->data);
     }
     public function contact(){
         $this->load->view("homepage/header");
         $this->load->view("homepage/contact");
         $this->load->view("homepage/footer");
     }
     public function about (){
        $this->load->view("homepage/header");
        $this->load->view("homepage/about");
        $this->load->view("homepage/footer");

     }

     public function services (){
        $this->load->view("homepage/header");
         $this->load->view("homepage/services");
         $this->load->view("homepage/footer");
     }

     public function gallery (){
        $this->load->view("homepage/header");
         $this->load->view("homepage/gallery");
         $this->load->view("homepage/footer");
     }
}