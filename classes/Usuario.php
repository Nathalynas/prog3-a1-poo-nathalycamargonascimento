<?php

class Usuario {
    private string $nome;
    private string $email;
    private string $senha;

    public function __construct(string $nome, string $email, string $senhaHasheadoOuPlano) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = self::isHashed($senhaHasheadoOuPlano) ? $senhaHasheadoOuPlano : password_hash($senhaHasheadoOuPlano, PASSWORD_DEFAULT);
    }

    private static function isHashed(string $senha): bool {
        return preg_match('/^\$2[ayb]\$/', $senha) === 1;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getSenha(): string {
        return $this->senha;
    }

    public function autenticar(string $senhaInformada): bool {
        return password_verify($senhaInformada, $this->senha);
    }
}
