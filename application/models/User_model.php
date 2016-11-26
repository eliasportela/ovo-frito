<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function Save($data)
	{
		$data['senha'] = password_hash($data['senha'], PASSWORD_DEFAULT);
		$res = $this->db->insert('funcionario',$data);
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	public function GetUser($id){
		$this->db->select('*')->from('funcionario')->where('id_funcionario',$id);
		$result	= $this->db->get()->result();
		if($result){
			return $result[0];
		}else{
			return false;
			}
		}

	function Update($data)
	{
		$data['senha'] = password_hash($data['senha'], PASSWORD_DEFAULT);
		$this->db->update('funcionario',$data);
	}

	function Login($data){
		$this->db->select('*')->from('funcionario')->where('user',$data['user']);
		$results = $this->db->get()->result();
		return $results;
	}


	function Validar($data){
		$this->db->select('*')->from('funcionario')->where('user',$data->user);
		$results = $this->db->get()->result();
		return $results;
	}
}