<?php
// session_start();
require_once("conexao.php");
// require_once('read.php');
use App\Controllers\Read;

$excluir_user = new Read();
$excluir_user->Delete($_GET['id']);

header('location: ../../index.php');