<?php

require_once("config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getlist();
//echo json_encode($lista);

//Carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("u");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("user", "!@#$");

echo $usuario;

?>