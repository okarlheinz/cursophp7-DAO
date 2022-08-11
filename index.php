<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de ususarios
//$lista = Usuario::getlist();

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ka");

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","dificil!@#");
//echo $usuario;

/*
Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

/*
Alterar um usuario

$usuario = new Usuario();

$usuario->loadById(2);

$usuario->update("professor", "852456");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(2);

$usuario->delete();

echo $usuario;

?>