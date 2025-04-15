<?php
require_once __DIR__ . '/../classes/Usuario.php';
require_once __DIR__ . '/../classes/Autenticador.php';
require_once __DIR__ . '/../classes/Sessao.php';

Sessao::iniciar();

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if (!$nome || !$email || !$senha) {
    Sessao::set('register_error', 'Preencha todos os campos.');
    header('Location: ../visualizações/cadastro.php');
    exit();
}

$usuario = new Usuario($nome, $email, $senha);
Autenticador::registrar($usuario);

Sessao::set('nome', $usuario->getNome());
Sessao::set('email', $usuario->getEmail());

header('Location: ../views/dashboard.php');
exit();
