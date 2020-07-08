<?php
require_once("config.php");

//RETORNA USUARIO POR ID
// $sql = new Sql();
// $neto = new Usuario();
// $neto->loadById(3);
// echo $neto;


//RETORNA TODOS USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//PROCURA USUARIO POR LOGIN
// $busca = Usuario::search("jo");
// echo json_encode($busca);

//CARREGA USUARIO COM LOGIN E SENHA
$usuario = new Usuario();
$usuario->login("neto", "4564");

echo $usuario;
?>