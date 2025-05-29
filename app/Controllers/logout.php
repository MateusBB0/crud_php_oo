<?php
session_start();
require_once("../Model/usuarioDao.php");
use App\Model\UserDAO;

$logout = new UserDAO();
$logout->Logout($_GET['id']);

?>
