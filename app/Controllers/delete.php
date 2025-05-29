<?php
session_start();
require_once("conexao.php");
require_once("../Model/usuarioDao.php");
use App\Model\UserDAO;

$excluir_user = new UserDAO();
$excluir_user->Delete($_GET['id']);
