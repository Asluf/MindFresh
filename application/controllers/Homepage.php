<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function index()
	{

		$this->load->model('customer_model');
		$data['book'] = $this->customer_model->getbook();		
		$this->load->view('template/shop', $data);
	}
	public function more($id)
	{

		$this->load->model('customer_model');
		$data['part'] = $this->customer_model->getmore($id);		
		$this->load->view('template/moredetails', $data);
	}
	
	public function about()
	{
		$this->load->view('template/about');
	}

	public function contact()
	{
		
		$this->load->view('template/contact');
		
	}

	public function login()
	{
		if ($this->session->userdata('Email' != '')) {
			redirect(base_url() . 'index.php/Homepage/logout');
		}
		$this->load->view('template/loginpage');
	}
	// verify the user login
	public function verifyuser()
	{
		$this->load->model('login_model');
		$login = $this->login_model->verifyuser($this->input->post());

		$data = array('Email' => $login['0']['Email'], 'Username' => $login['0']['Name'], 'Pic' => $login['0']['Image_Path'], 'Role' => $login['0']['Role'], 'Id' => $login['0']['ID'], 'login_time' => time());
		if (count($login)) {
			$this->session->set_userdata($data);
			if ($login['0']['Role'] == 'customer') {
				echo "customer";
			} else if ($login['0']['Role'] == 'farmer') {
				echo "farmer";
			} else if ($login['0']['Role'] == 'admin') {
				echo "admin";
			}
		} else {
			echo false;
		}
	}
	// logout
	public function logout()
	{
		if ($this->session->userdata('checkout') != '') {
			redirect(base_url() . 'index.php/Customer/cancelcheckoutlogout');
		}
		$this->session->unset_userdata('Email');
		$this->session->unset_userdata('Id');
		$this->session->unset_userdata('Role');
		$this->session->unset_userdata('Username');
		$this->session->unset_userdata('Pic');
		$this->session->unset_userdata('login_time');

		redirect(base_url() . 'index.php/Home');
	}
}
