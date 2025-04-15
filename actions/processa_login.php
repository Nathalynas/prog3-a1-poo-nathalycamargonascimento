<?php
require_once __DIR__ . '/../classes/Autenticador.php';
require_once __DIR__ . '/../classes/Sessao.php';

Sessao::iniciar();

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$lembrar = $_POST['lembrar'] ?? false;

if (!$email || !$senha) {
    Sessao::set('login_error', 'Preencha e-mail e senha.');
    header('Location: ../views/login.php');
    exit();
}

$usuario = Autenticador::autenticar($email, $senha);

if (!$usuario) {
    Sessao::set('login_error', 'Credenciais inválidas.');
    header('Location: ../views/login.php');
    exit();
}

Sessao::set('nome', $usuario->getNome());
Sessao::set('email', $usuario->getEmail());

if ($lembrar) {
    setcookie('remembered_email', $email, time() + (86400 * 30));
} else {
    setcookie('remembered_email', '', time() - 3600);
}

header('Location: ../views/dashboard.php');
exit();

