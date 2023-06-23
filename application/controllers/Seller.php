<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

	 
	public function index()
	{
		$this->load->view('admin/seller');
	}

	public function backupseller()
	{
		$this->load->view('admin/backup-ramraj-seller');
	}
	
}
