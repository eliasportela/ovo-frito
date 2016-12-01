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
			$this->load->view('adm/commons/header',$data);
			$this->load->view('Adm/home');
			$this->load->view('adm/commons/footer');
			
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
			$this->load->view('adm/commons/header',$header);
			$this->load->view('Adm/cadastro/cadastro-produto',$data);
			$this->load->view('adm/commons/footer');
		}else{
			redirect(base_url('adm/login'));
		}
	}

	public function VerProdutos(){
		$table = 'produto';
		$sql = "SELECT p.id_produto as id_produto, p.id_ga as id_ga, p.id_um as id_um, p.nome as nome, g.nome as nome_grupo , u.nome nome_unidade, p.preco_custo as preco_custo, p.preco_venda as preco_venda FROM produto p INNER JOIN grupo_alimentos g ON(g.id_ga = p.id_ga) INNER JOIN unidade_medida u ON(u.id_um = p.id_um) WHERE p.fg_ativo = 1 order by p.id_ga";

		$produtos = $this->Crud_model->Query($sql);
		#die(var_dump($produtos));
		$data['produto'] = $produtos;
		$header['title'] = "MO | Produtos";
		$this->load->view('adm/commons/header',$header);
		$this->load->view('Adm/movimentacoes/produtos',$data);
		$this->load->view('adm/commons/footer');
	}

	public function EditarProdutos(){
		
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
				$dataModel = array(
						'nome' => $dataRegister['nome'],
						'id_ga' => $dataRegister['id_ga'],
						'id_um' => $dataRegister['id_um'],
						'preco_custo' => $dataRegister['preco_custo'],
						'preco_venda' => $dataRegister['preco_venda']);
				$id_produto = array('id_produto' => $dataRegister['id_produto']);
				$res = $this->Crud_model->Update($table,$dataModel,$id_produto);
				if($res){
					redirect(base_url('adm/produtos'));
				}else{
					$data['error'] = "Não foi possivel editar o Produto";
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

			#obtendo produto para edicao;
			$table = 'produto';
			$idProduto = $this->input->get();
			$dataModel = array(
						'id_produto' => $idProduto['id']);
			$produto = $this->Crud_model->Read($table,$dataModel);
			$header['title'] = "MO | Editar Produto";
			$data['produto'] = $produto;
			$this->load->view('adm/commons/header',$header);
			$this->load->view('Adm/cadastro/editar-produto',$data);
			$this->load->view('adm/commons/footer');

		}else{
			redirect(base_url('adm/login'));
		}
	}

	public function RemoverProduto(){
		$idProduto = $this->input->get();
		$tabela = 'produto';
		$id_produto = array(
						'id_produto' => $idProduto['id']);
		$dataModel = array(
						'fg_ativo' => 0);
		$res = $this->Crud_model->Update($tabela,$dataModel,$id_produto);
		if($res){
			redirect(base_url('adm/produtos'));
		}else{
			redirect(base_url('adm'));
			}
	}
}