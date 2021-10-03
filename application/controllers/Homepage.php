<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function index()
	{

		$this->load->model('customer_model');
		// $data['book'] = $this->customer_model->getbook();
		$data['book1'] = $this->customer_model->book1();
		$data['book2'] = $this->customer_model->book2();
		$data['book3'] = $this->customer_model->book3();
		$data['book4'] = $this->customer_model->book4();
		$data['book5'] = $this->customer_model->book5();
		$data['book6'] = $this->customer_model->book6();
		$data['book7'] = $this->customer_model->book7();
		$data['book8'] = $this->customer_model->book8();
		$data['book9'] = $this->customer_model->book9();
		$data['book10'] = $this->customer_model->book10();
		$data['book11'] = $this->customer_model->book11();
		
		// $data['textile'] = $this->customer_model->gettextile();
		$this->load->view('template/shop', $data);
	}
	public function mobile()
	{
		$this->load->model('customer_model');
		$data['mobile'] = $this->customer_model->getmobile();
		$this->load->view('template/mobile',$data);
	}
	public function about_()
	{
		$this->load->view('template/about2');
	}
	public function search_($id)
	{
		$this->load->model('customer_model');
		$data['searchmobile'] = $this->customer_model->getsearch($id);

		$this->load->view('template/search2',$data);
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
