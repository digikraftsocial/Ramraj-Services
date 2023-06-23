<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller
{
	 
	public function index()
	{
		
		$this->load->view('admin/testimonials/all-testimonials');
	}
	
	public function add()
	{
	
		$this->load->view('admin/testimonials/add-testimonials');
	}
	
	public function edit()
	{
		
	}
	public function delete()
	{
	
	}
}
