<?php
class ConexaoMySQLi {
    private $conexao;

    public function __construct() {
        $this->conexao = new mysqli("localhost", "root", "", "contatos");

        if($this->conexao->connect_error) {
            die("Erro na conexao: " . $this->connect_error);
        }
    }

    public function executarQuery($sql) {
        $resultado = $this->conexao->query($sql);

        if(!$resultado) {
            die("Erro na execução da query " . $this->conexao->error);
        }
        $this->conexao->close();

        return $resultado;
    }
}

// Exemplo de uso da conexão
$novaConexao = new ConexaoMySQLi();

// Exemplo de execução de query
print_r($novaConexao->executarQuery("select * from contatos_info"));

// // Exemplo de execução de query
// $resultado = $novaConexao->query("select * from contatos_info");

// // Fechar a conexão quando terminar de usá-la
// $novaConexao->close();

?>