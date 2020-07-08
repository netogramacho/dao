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
// $usuario = new Usuario();
// $usuario->login("neto", "4564");
// echo $usuario;


//INSERIR USUARIO
// $aluno = new Usuario();
// $aluno->setDeslogin("Magnos");
// $aluno->setSenha("1999");
// $aluno->insert();
// echo $aluno; 

//ATUALIZANDO USUÁRIO

// $usuario = new Usuario();
// $usuario->loadById(6);
// $usuario->update("ntg", "n3t1n");
// echo $usuario;

//DELETANDO USUÁRIO
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->deletar();

echo $usuario;

?>