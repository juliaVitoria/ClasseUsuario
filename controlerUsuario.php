<?php


$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];

/*$nome = "julia" ;
$email = "julia.correia.rocha@escola.pr.gov.br" ;
$login = "julia" ;
$senha = "85";*/

include("classeUsuario.php");

$usuario = new Usuario();

$usuario->addusuario($nome, $email, $login, $senha);

print_r($usuario);
?>
