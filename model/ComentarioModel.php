<?php
require_once "../config/Conexao.php";

class ComentarioModel
{
    function __construct()
    {
        $this->conexao = Conexao::getConnection();
    }

    public function inserir($nome)
    {
        global $nome;
        $sql = ("INSERT INTO coment (nome) value ($nome)");
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("s", $nome);
        return $comando->execute();
    }
}
