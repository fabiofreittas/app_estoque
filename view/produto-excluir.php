<?php
include "../vendor/autoload.php";

$p = new \App\Model\Produto();
$p->setId($_GET['id']);

$pDAO = new \App\DAO\ProdutoDAO();
if ($pDAO->excluir($p));
    header("location: produto-pesquisar.php? msg=1");