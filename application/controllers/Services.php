<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
{
	 
	public function index()
	{
		
		$this->load->view('admin/services');
	}
	
	public function servicedetails()
	{
	
		$this->load->view('admin/service-details');
	}
	
	public function ramrajconnect()
	{
		$this->load->view('admin/ramraj-connect');
	}
	
	public function ramrajecommerce()
	{
		$this->load->view('admin/ramraj-ecommerce');
	}

	public function ramrajlogistics()
	{
		$this->load->view('admin/ramraj-logistics');
	}
	
	public function ramrajseller()
	{
		$this->load->view('admin/ramraj-seller');
	}

	public function agriculture()
	{
		$this->load->view('admin/Agriculture');
	}
}

