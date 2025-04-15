<?php
require_once '../classes/Sessao.php';
Sessao::iniciar();

$error = Sessao::get('login_error') ?? '';
Sessao::set('login_error', null);
$rememberedEmail = $_COOKIE['remembered_email'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
  <div class="container">
    <h2>Login</h2>

    <?php if ($error): ?>
      <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="../actions/processa_login.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" name="email" value="<?php echo htmlspecialchars($rememberedEmail); ?>" required>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" required>

      <label>
        <input type="checkbox" name="lembrar" value="1"
        <?php if (!empty($_COOKIE['remembered_email']) && !isset($_POST['email'])) echo 'checked'; ?>>
        Lembrar e-mail
      </label><br><br>

      <input type="submit" value="Entrar">
    </form>

    <p style="margin-top: 15px;">
      Ainda não tem conta? <a href="register.php">Cadastre-se</a>
    </p>
  </div>
</body>

</html>