<?php
include "../vendor/autoload.php";

$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();

$p = new \App\Model\Produto();
$p->setId($_GET['id']);

$pDAO = new \App\DAO\ProdutoDAO();
if ($pDAO->excluir($p));
    header("location: produto-pesquisar.php? msg=1");