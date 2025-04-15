<?php
require_once '../classes/Sessao.php';

Sessao::iniciar();
Sessao::destruir();
setcookie('remembered_email', '', time() - 3600);

header('Location: login.php');
exit();
