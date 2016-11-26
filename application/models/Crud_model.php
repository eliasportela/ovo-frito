<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Crud_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function Insert($table,$data)
	{
		$res = $this->db->insert($table,$data);
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	public function ReadAll($table){
		$this->db->select('*')->from($table);
		$result	= $this->db->get()->result();
		if($result){
			return $result;
		}else{
			return false;
			}
		}

	function Update($data)
	{
		$data['passw'] = password_hash($data['passw'], PASSWORD_DEFAULT);
		$this->db->where('id',	$this->session->userdata('id'));
		$this->db->update('funcionario',	$data);
	}

	function Login($data){
		$this->db->select('*')->from('funcionario')->where('user',$data['user']);
		$results = $this->db->get()->result();
		return $results;
	}
}