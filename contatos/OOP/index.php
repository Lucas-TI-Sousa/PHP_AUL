<?php
require_once 'usuarioDAO.php';
$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->gitContatos();

print_r($usuarios);

?>