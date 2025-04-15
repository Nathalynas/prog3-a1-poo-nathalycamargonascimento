<?php
require_once __DIR__ . '/Usuario.php';
require_once __DIR__ . '/Sessao.php';

class Autenticador {
    private static array $usuarios = [];

    public static function registrar(Usuario $usuario): void {
        self::carregarUsuarios();
        self::$usuarios[] = $usuario;
        setcookie('usuarios', serialize(self::$usuarios), time() + 3600, '/');
    }

    public static function carregarUsuarios(): void {
        if (isset($_COOKIE['usuarios'])) {
            self::$usuarios = unserialize($_COOKIE['usuarios']);
        }
    }

    public static function autenticar(string $email, string $senha): ?Usuario {
        self::carregarUsuarios();
        foreach (self::$usuarios as $usuario) {
            if ($usuario->getEmail() === $email && $usuario->autenticar($senha)) {
                return $usuario;
            }
        }
        return null;
    }
}
