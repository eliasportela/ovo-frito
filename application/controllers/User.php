<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
	} 
	
public function Login()
  {
    $this->form_validation->set_rules('user','Usuário','required|min_length[4]|alpha_dash|trim');
    $this->form_validation->set_rules('senha','Senha','required|min_length[6]|trim');
    if($this->form_validation->run() == FALSE)
   	{
      $data['error'] = validation_errors();
    }
    else
    {
      $dataLogin = $this->input->post();
      $res = $this->User_model->Login($dataLogin);

      if($res)
      {
        foreach($res as $result)
        {
          if (password_verify($dataLogin['senha'], $result->senha))
    
          {
            $data['error'] = null;
            $this->session->set_userdata('logged',true);
            $this->session->set_userdata('id',$result->id_funcionario);
            redirect(base_url('adm'));
          }
          else
          {
          	$data['error'] = "Senha incorreta.";
          }
        }

      }
      else
      {
        $data['error'] = "Usuário não cadastrado.";
      }
    }

    if ($this->session->userdata('logged')) {
    	redirect(base_url('adm'));
    }else{

	    $data['title'] = "MO | Login";
		$this->load->view('adm/commons/header',$data);
	    $this->load->view('adm/login',$data);
	    $this->load->view('adm/commons/footer');
	}

    
  }

	public function Logout() {
		$this->session->unset_userdata('logged');
		$this->session->unset_userdata('id');
		redirect();
	}

	public function Register() {

		if ($this->session->userdata('logged')) {

		$data['success'] = null;
		$this->form_validation->set_rules('nome','Nome','required|min_length[4]|trim');
    	$this->form_validation->set_rules('user','User','required|min_length[4]|alpha_dash|trim');
    	$this->form_validation->set_rules('senha','Senha','required|min_length[6]|trim');
    	$this->form_validation->set_rules('confSenha','Confirmação da Senha','required|min_length[6]|trim');
		
		if($this->form_validation->run() == FALSE){
			$data['error'] = validation_errors();
		}else{
			$dataRegister = $this->input->post();

			if ($dataRegister['senha'] == $dataRegister['confSenha']) {
				$dataModel = array(
						'nome' => $dataRegister['nome'], 
						'user' => $dataRegister['user'],
						'senha' => $dataRegister['senha']);

				$res = $this->User_model->Save($dataModel);
			
				if($res){
					$data['error'] = null; 
					$data['success'] = "Usuario Inserido com sucesso";
				}else{
					$data['error'] = "Não foi possivel inserir o Usuário";
				}
			}else{
					$data['error'] = "Senhas não correspondem";
				}
		}

		$data['title'] = "MO | Cadastro-Funcionario";
		$this->load->view('adm/commons/header',$data);
	    $this->load->view('adm/cadastro/cadastro-funcionario',$data);
	    $this->load->view('adm/commons/footer');
		}else{
			redirect(base_url('adm/login'));
		}
	}
	
	public function UpdatePassw() {
		$data['success'] = null;
		$data['error'] = null;
		$this->form_validation->set_rules('senha','Senha','required|min_length[6]|trim');
		$this->form_validation->set_rules('novaSenha','Nova Senha','required|min_length[6]|trim');
		$this->form_validation->set_rules('confSenha','Confirmar Senha','required|min_length[6]|trim');
		if($this->form_validation->run() == FALSE){
			$data['error'] = validation_errors();
		}else{
			$dataRegister = $this->input->post();
			$dataUser = $this->User_model->GetUser($this->session->userdata('id'));
			
			$res = $this->User_model->Validar($dataUser); 
			
			foreach($res as $result)
	        {
	          	if (password_verify($dataRegister['senha'], $result->senha))
	    
	   	       {
		          	if ($dataRegister['novaSenha'] == $dataRegister['confSenha']) {
		          		#die(var_dump($dataUser));
						$dataModel = array(
							'senha' => $dataRegister['novaSenha'],
							'id_funcionario' => $dataUser->id_funcionario);
						#die(var_dump($dataModel));
						$this->User_model->Update($dataModel);
						$data['success'] = "Senha alterada com sucesso!";
						$data['error'] = null;
					}else{
					$data['error'] = "As senhas não são iguais";
					}
				}
	        else {
	          	$data['error'] = "Senha incorreta.";
	        }
	    }		
	}

		$data['user'] = $this->User_model->GetUser($this->session->userdata('id'));
		$data['title'] = "MO | Cadastro-Funcionario";
		$this->load->view('adm/commons/header',$data);
	    $this->load->view('adm/alterar-senha',$data);
	    $this->load->view('adm/commons/footer');
	}

}
