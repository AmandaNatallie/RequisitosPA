<?php

require_once 'actions/aFarmacias.php';

class Farmacias extends aFarmacias{
    public function criptSenha($senha){
        $cr = md5(sha1($senha));
        $this->setSenha($cr);
    }
    
    public function upload($arquivo){
        
        $nome = md5_file($arquivo['tmp_name']);
        $ext = substr($arquivo['name'],-4);
        $nomeOK = $nome.$ext;
        
        $destino = "../midias/farmacias/$nomeOK";
        
        if(move_uploaded_file($arquivo['tmp_name'], $destino)){
            $this->setLogotipo($nomeOK);
        }
            
        
    }
}