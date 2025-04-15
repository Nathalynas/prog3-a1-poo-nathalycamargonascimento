<?php
require_once '../classes/Sessao.php';
Sessao::iniciar();

$nome = Sessao::get('nome');
$email = Sessao::get('email');
$cookieEmail = $_COOKIE['remembered_email'] ?? 'não definido';

if (!$nome || !$email) {
  header('Location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Bem-vindo</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Bem-vindo(a), <?php echo htmlspecialchars($nome); ?>!</h2>
    <p><strong>Email informado:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Email no cookie:</strong> <?php echo htmlspecialchars($cookieEmail); ?></p>

    <a href="logout.php" class="button" style="display: inline-block; margin-top: 20px;">Sair</a>
  </div>
</body>
</html>
