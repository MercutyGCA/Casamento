<?php
require "model/ComentarioModel.php";

class Comentario
{
    function __construct()
    {
        $this->comentar = new ComentarioModel();
    }

    function inserir($nome)
    {
        global $nome;
        $coment = $this->comentar->inserir($nome);
    }
}
