<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	 
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function aboutus()
	{
		$this->load->view('admin/about-rrs');
	}
	
	public function about()
	{
		$this->load->view('admin/about');
	}
	
	public function franchise()
	{
		$this->load->view('admin/franchise');
	}

	public function news()
	{
		$this->load->view('admin/news');
	}

	public function contact()
	{
		$this->load->view('admin/contact');
	}
	
	public function career()
	{
		$this->load->view('admin/career');
	}

	public function module()
	{
		$this->load->view('admin/module');
	}
	
}
