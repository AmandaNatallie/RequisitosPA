<?php

require_once 'database/dbConnection.php';
class mUsuarios extends dbConnection{
    private $id_usuario;
    private $nome;
    private $usuario;
    private $senha;
    private $id_tipo;
    private $email;
    
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getId_tipo() {
        return $this->id_tipo;
    }

    function getEmail() {
        return $this->email;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setId_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}

