<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct() 
	{
       parent::__construct();
       $this->load->model('Main_model');
    }
	public function index()
	{
		$this->load->view('index');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function wishlist()
	{
		$this->load->view('wishlist');
	}
	public function forgot_password()
	{
		$this->load->view('reset_password');
	}
	public function category()
	{
		$this->load->view('category');
	}
	public function product()
	{
		$this->load->view('product');
	}
	public function view_cart()
	{
		$this->load->view('view_cart');
	}
	public function checkout()
	{
		$this->load->view('checkout');
	}
	public function check_email_avalibility()  
    {  
      	$email = $this->input->post('email');
		$recive = $this->Main_model->is_email_available($email);
		if ($recive->num_rows()) {
			echo 'true';
		}
		else{
			echo 'false';
		}
	} 
	public function check_phone_avalibility()  
    {  
      	$mobile = $this->input->post('mobile');
		$recive = $this->Main_model->is_phone_available($mobile);
		if ($recive->num_rows()) {
			echo 'true';
		}
		else{
			echo 'false';
		}
	}
	public function register_user()
	{
		$result = $this->Main_model->send_data();
		echo json_encode($result);
	}
	public function cnfrm_reg_otp()
  	{
        $id = $this->input->post('id');
        $otp = $this->input->post('otp');
        $data = $this->Main_model->cnfrm_reg_otp($id, $otp);
        if($data->num_rows() > 0)
        {
          $this->Main_model->insert_otp($id);
          echo "true";
        }
        else
        {
           echo "false";
        }
  	}

}
