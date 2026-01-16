<?php
class principal
{
    // Variáveis privadas para proteção dos dados de acesso
    private $Usuario;
    private $Senha;
    private $DB;
    private $Server;
    private $conexao;
    private $Porta;

    // Método Construtor: Define as credenciais assim que o objeto é criado
    function __construct()
    {
        // Tenta pegar do ambiente (Render), senão usa o padrão local
        $this->Usuario = getenv('DB_USER') ?: 'root';
        $this->Senha = getenv('DB_PASS') ?: '';
        $this->DB = getenv('DB_NAME') ?: 'blog';
        $this->Server = getenv('DB_HOST') ?: 'localhost';
        $this->Porta = getenv('DB_PORT') ?: 3306;
    }

    // Método para realizar a conexão com o MySQL
    function conectar()
    {
        $this->conexao = mysqli_connect($this->Server, $this->Usuario, $this->Senha, $this->DB, $this->Porta);

        if (mysqli_connect_errno())
            $status_conexao = false;
        else
            $status_conexao = true;

        return $status_conexao;
    }

    // Método getter para permitir acesso à conexão nos arquivos incluídos
    function getConexao()
    {
        return $this->conexao;
    }
}
