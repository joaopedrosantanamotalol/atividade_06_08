<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/model/pessoas.php'; // Equivalente ao Import do Java, necessário para fazer a linha 9 funcionar por exemplo. Require = import, once = import prioritário de forma automatica

class PessoasController{//classe da pessoa controller
    private $pessoa;

    public function _construct(){//metodo construtor
      $this->pessoa = new Pessoa(){
          if($_GET['acao'] == 'inserir'){
          $this->inserir();
          }
      }
    }
//bloco para set variaveis no banco
    public function inserir(){//metodo inserir ao banco
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        //fim
        $this->pessoa->inserir();//locando pessoa ao inserir
    }

}    
new PessoasController();//classe principal
?>
