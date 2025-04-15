<?php
require_once '../classes/Sessao.php';
Sessao::iniciar();

$nome = Sessao::get('nome');
$email = Sessao::get('email');
$lembrado = $_COOKIE['remembered_email'] ?? '';

if (!$nome || !$email) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Olá, <?php echo htmlspecialchars($nome); ?>!</h2>
    <p>Você está logado com o e-mail:</p>
    <p><strong><?php echo htmlspecialchars($email); ?></strong></p>

    <?php if ($lembrado): ?>
      <p style="font-size: 14px; color: #444;">(Lembrado em: <?php echo htmlspecialchars($lembrado); ?>)</p>
    <?php endif; ?>

    <a class="button" href="logout.php">Sair</a>
  </div>
</body>
</html>
