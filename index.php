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
$usuario = new Usuario();
$usuario->login("root","dificil!@#");

echo $usuario;

?>