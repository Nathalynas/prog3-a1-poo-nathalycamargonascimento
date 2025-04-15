<?php
require_once '../classes/Sessao.php';
Sessao::iniciar();
$error = Sessao::get('register_error') ?? '';
Sessao::set('register_error', null);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Cadastrar Novo Usuário</h2>

    <?php if ($error): ?>
      <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="../actions/processa_cadastro.php" method="POST">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" required>

      <label for="email">Email:</label>
      <input type="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" required>

      <input type="submit" value="Cadastrar">
    </form>

    <p style="margin-top: 15px;">
      Já tem uma conta? <a href="login.php">Fazer login</a>
    </p>
  </div>
</body>
</html>
