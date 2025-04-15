<?php

class Sessao {
    public static function iniciar() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set(string $chave, mixed $valor) {
        $_SESSION[$chave] = $valor;
    }

    public static function get(string $chave): mixed {
        return $_SESSION[$chave] ?? null;
    }

    public static function destruir() {
        session_unset();
        session_destroy();
    }
}