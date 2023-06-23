<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

	public function insert($table,$data)
	{
		$result=$this->db->insert($table,$data);
		return $result;
	}
	
	public function fetchAlldata($table)
	{
		$data=$this->db->get($table);
		return $data->result();
	}
	
	public function update($table,$data,$id)
	{
		$this->db->where('id',$id);
		$result=$this->db->update($table,$data);
		return $result;
	}
	
	public function delete($table,$id)
	{
		$this->db->where('id',$id);
		$result=$this->db->delete($table);
		return $result;
	}
	
	public function selectbycolumn($table,$col,$val)
	{
		$this->db->where($col,$val);
		$data=$this->db->get($table);
		return $data->result();
	}
	
	public function selectbymultiplecolumn($table,$condition)
	{
		$this->db->where($condition);
		$data=$this->db->get($table);
		return $data->result();
	}
	
}
