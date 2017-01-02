<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
/*
Constructor
Whatever initialization of helpers you want , write it here
*/    
      public function __construct()
        {
                parent::__construct();
                // Your own constructor code
            $this->load->helper('url');
        }

    
    
    
/*Main Function of This Controller*/    
	public function index()
	{
        /*$data is an array which is passed to the view*/
        $data['title'] = "Index Page"; 
		$this->load->view('login',$data);
	}
    
    
    /*Sample Function for e.g*/
public function index2()
	{
         /*$data is an array which is passed to the view*/
        $data['title'] = "Index2 Page"; 
		$this->load->view('login',$data);
	}
}
