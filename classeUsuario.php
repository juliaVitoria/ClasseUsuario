<?php
class Usuario{
    private $id, $nome, $email, $login, $senha, $dataCadastro, $ativo;

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getDataCadastro(){
        return $this->dataCadastro;
    }
    public function getAtivo(){
        return $this->ativo;
    }
    public function renovarSenha(){
         $this->senha = "123456";
    }
    public function addusuario($nome, $email, $login, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
        $this->dataCadastro = date("Y=m-d");
        $this->ativo = 0;

    }

}

?>
