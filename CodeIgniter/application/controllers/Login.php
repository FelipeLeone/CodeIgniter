<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		echo "<h1>Pagina de produtos</h1>";

    }

    public function validarLogin(){
        $this->load->model("usuariosModel");//importando o model

				//essa linha carrega o modo de busca do banco
        $usuario = $this->input->post("user");//user é o name do input da tela no caso view
        $senha = $this->input->post("pass");//pass é o name do input da tela no caso view
        if(empty($usuario)){
            echo "ErroEmail";
            die();
        }
        if(empty($senha)){
            echo "ErroSenha";
            die();
        }
				else{
	        $usuario = $this->usuariosModel->logarUsuario($usuario, $senha);

					if($usuario == ""){

						echo "FalhaLogin";
					}
					else{
						echo "SucessoCliente";
					}
			}
    }

	public function prod()
	{
		$texto = "Felipe Leoe";
		$id = "I";
		$dados = array("mensagem" => $texto, "id" => $id);
		$this->load->view('produtos/prodTela', $dados);
	}
	public function listarArray()
	{
		$this->load->model("produtosModel", "Produtos");
		$resultado = $this->Produtos->listarTodos();
		var_dump($resultado);
	}
}
