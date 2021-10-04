<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('Role') == 'admin') {
			if (time() - $this->session->userdata('login_time') > 600) {
				redirect(base_url() . 'index.php/Logout');
			}
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
			$this->load->view('admin/adminindex', $data);
		} else {
			redirect(base_url() . 'index.php/Login');
		}
	}
	public function addnewitem()
	{
		if ($this->session->userdata('Role') == 'admin') {
			if (time() - $this->session->userdata('login_time') > 600) {
				redirect(base_url() . 'index.php/Logout');
			}
			$this->load->view('admin/template/addnew');
		} else {
			redirect(base_url() . 'index.php/Login');
		}
	}
	public function addnewbook()
	{

		$this->load->model('admin_model');
		$imageName = $this->input->post('book');

		$config['upload_path'] = './resources/book_pics';
		$config['allowed_types'] = 'gif|png|jpg|jpeg';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('book')) {
			$data = array('upload_data' => $this->upload->data());
			$image = $data['upload_data']['file_name'];
			$res = $this->admin_model->addnewbook($this->input->post(), $image);
		}
	}
	public function addnewtextile()
	{
		$this->load->model('admin_model');
		$imageName = $this->input->post('textile');

		$config['upload_path'] = './resources/textile_pics';
		$config['allowed_types'] = 'gif|png|jpg|jpeg';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('textile')) {
			$data = array('upload_data' => $this->upload->data());
			$image = $data['upload_data']['file_name'];
			$res = $this->admin_model->addnewtextile($this->input->post(), $image);
		}
	}
	public function operate()
	{
		if ($this->session->userdata('Role') == 'admin') {
			if (time() - $this->session->userdata('login_time') > 600) {
				redirect(base_url() . 'index.php/Logout');
			}
			$this->load->model('customer_model');
			$data['book'] = $this->customer_model->getbook();
			// $data['textile'] = $this->customer_model->gettextile();
			$this->load->view('admin/operate/main', $data);
		} else {
			redirect(base_url() . 'index.php/Login');
		}
	}
	public function removebook($id)
	{
		if ($this->session->userdata('Role') == 'admin') {
			if (time() - $this->session->userdata('login_time') > 600) {
				redirect(base_url() . 'index.php/Logout');
			}
			$this->load->model('admin_model');
			$res = $this->admin_model->removebook($id);
		} else {
			redirect(base_url() . 'index.php/Login');
		}
	}
	public function removetextile($id)
	{
		if ($this->session->userdata('Role') == 'admin') {
			if (time() - $this->session->userdata('login_time') > 600) {
				redirect(base_url() . 'index.php/Logout');
			}
			$this->load->model('admin_model');
			$res = $this->admin_model->removetextile($id);
		} else {
			redirect(base_url() . 'index.php/Login');
		}
	}
	

	public function about()
	{
		if ($this->session->userdata('Role') == 'admin') {
			if (time() - $this->session->userdata('login_time') > 600) {
				redirect(base_url() . 'index.php/Logout');
			}
			$this->load->view('admin/template/about');
		} else {
			redirect(base_url() . 'index.php/Login');
		}
	}
	public function contact()
	{
		if ($this->session->userdata('Role') == 'admin') {
			if (time() - $this->session->userdata('login_time') > 600) {
				redirect(base_url() . 'index.php/Logout');
			}
			$this->load->view('admin/template/contact');
		} else {
			redirect(base_url() . 'index.php/Login');
		}
	}



	public function itemtable()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			//get data from  database view 'admindashboard'
			$data['itemdata'] = $this->admin_model->itemdata();

			$this->load->view('admin/itemtable', $data);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function editform($id)
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$data['edit'] = $this->admin_model->editget($id);
			$this->load->view('admin/editform', $data);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function editing()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$res = $this->admin_model->editing($this->input->post());
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function addnew()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$res = $this->admin_model->addnew($this->input->post());
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}


	public function customertable()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			//get data from  database view ''
			$data['customerdata'] = $this->admin_model->customerdata();

			$this->load->view('admin/customertable', $data);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function farmertable()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			//get data from  database view ''
			$data['farmerdata'] = $this->admin_model->farmerdata();

			$this->load->view('admin/farmertable', $data);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}


	public function ordertable()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			//get data from  database view 'admindashboard'
			$data['orderdata'] = $this->admin_model->orderdata();

			$this->load->view('admin/ordertable', $data);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function order_moreinfo($id)
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$res1 = $this->admin_model->order_moreinfo($id);
			echo json_encode($res1);;
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}

	public function set_delivered_status()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$this->admin_model->set_delivered_status($this->input->post());
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function set_dispatched_status()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$this->admin_model->set_dispatched_status($this->input->post());
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function set_completed_status()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$this->admin_model->set_completed_status($this->input->post());
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	// ============================================================
	public function supplytable()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			//get data from  database view 'admindashboard'
			$data['itemdata'] = $this->admin_model->supplydata();

			$data['addsupply'] = $this->admin_model->addsupplies();

			$data['getitems'] = $this->admin_model->getitems();

			$this->load->view('admin/supplytable', $data);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function getitem($farmerid)
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$res = $this->admin_model->getitem($farmerid);
			echo json_encode($res);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function supplyform()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');

			$res = $this->admin_model->supplypayment($this->input->post());


			if ($res == true) {
				echo true;
			} else {
				echo false;
			}
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function getsupplierdetails()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$res = $this->admin_model->getsupplierdetails($this->input->post('supplyref'));
			echo json_encode($res);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function addsupplypayment()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('admin_model');
			$res = $this->admin_model->addsupplypayment($this->input->post());
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}

	public function adminhome()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->view('admin/topnavbar/home');
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function adminshop()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->model('customer_model');
			$data['allitem'] = $this->customer_model->getallitem();
			$data['fruititem'] = $this->customer_model->getfruititem();
			$data['vegitem'] = $this->customer_model->getvegitem();
			$this->load->view('admin/topnavbar/shop', $data);
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function adminabout()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->view('admin/topnavbar/about');
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
	public function admincontact()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->view('admin/topnavbar/contact');
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}


	public function admingallery()
	{
		if ($this->session->userdata('Role') == 'admin') {
			$this->load->view('admin/topnavbar/gallery');
		} else {
			redirect(base_url() . 'index.php/Homepage/login');
		}
	}
}
