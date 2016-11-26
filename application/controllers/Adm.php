<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Adm extends CI_Controller 
	{
		function __construct(){
			parent::__construct();
			$this->load->model('Crud_model');
			$this->load->library('form_validation');
		} 

		public function index()
		{
			if ($this->session->userdata('logged')) {

			$data['title'] = "MO | Área do Usuário";
			$this->load->view('Adm/commons/header',$data);
			$this->load->view('Adm/home');
			$this->load->view('Adm/commons/footer');
			
			} else{
				redirect(base_url('adm/login'));
			}
		}

		public function CadastroProduto()
		{

			if ($this->session->userdata('logged')) {

			$data['success'] = null;
			$this->form_validation->set_rules('id_ga','Grupo de Produto','required|is_natural_no_zero|trim',array('is_natural_no_zero' => 'Selecione um grupo de Produto'));
			$this->form_validation->set_rules('nome','Nome do Produto','required|min_length[3]|trim');
	    	$this->form_validation->set_rules('id_um','Unidade de Medida','required|is_natural_no_zero|trim',array('is_natural_no_zero' => 'Selecione uma unidade de medida'));
	    	$this->form_validation->set_rules('preco_custo','Preço de Custo','required|numeric|trim');
	    	$this->form_validation->set_rules('preco_venda','Preço de Venda','required|numeric|trim');
			
			if($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}else{
				$table = 'produto';
				$dataRegister = $this->input->post();
				$res = $this->Crud_model->Insert($table,$dataRegister);
				if($res){
					$data['error'] = null;
					$data['success'] = "Produto Inserido com sucesso";
				}else{
					$data['error'] = "Não foi possivel inserir o Produto";
				}
			}

			#grupoAlimentos
			$tabela = 'grupo_alimentos';
			$grupoProduto = $this->Crud_model->ReadAll($tabela);
			$data['grupoProduto'] = $grupoProduto;
			#unidade de Medida
			$tabela = 'unidade_medida';
			$umProduto = $this->Crud_model->ReadAll($tabela);
			$data['umProduto'] = $umProduto;

			$header['title'] = "MO | Cadastro de Produto";
			$this->load->view('Adm/commons/header',$header);
			$this->load->view('Adm/cadastro/cadastro-produto',$data);
			$this->load->view('adm/commons/footer');
		}else{
			redirect(base_url('Adm/login'));
		}
	}
}