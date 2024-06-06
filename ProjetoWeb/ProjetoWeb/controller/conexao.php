<?php // Iniciando o código PHP

class Conexao { // Criando uma classe voltada a conexão com o banco
    private $host = "localhost"; // Bloco de variáveis
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    // Método construtor
    public function __construct() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco); // Conectando com o MySQLi

        if($this->conexao->connect_error) { // Verificando erros na conexão
            die("Falha na Conexão: " . $this->conexao->connect_error); // Exibindo o erro
        }
    }

    // Método para obter a conexão
    public function getConexao() {
        return $this->conexao;
    }    
}

?>
