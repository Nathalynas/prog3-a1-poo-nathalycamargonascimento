# Sistema de Autenticação com PHP - POO

**Nathaly Camargo do Nascimento**  
Ciência da Computação - UNOESC/São Miguel do Oeste

---

## 📌 Descrição do Projeto

Este é um sistema simples de autenticação desenvolvido em PHP que permite:

- Cadastro de usuários com nome, e-mail e senha  
- Login com validação de credenciais  
- Dashboard com saudação personalizada  
- Armazenamento do e-mail em cookie ("lembrar e-mail")  
- Logout com destruição de sessão  

Os dados dos usuários são armazenados em um **cookie serializado** (simulando um banco de dados). Sessões e cookies são utilizados para autenticação e lembrança de e-mail.  
Todo o sistema é estruturado com **orientação a objetos** e segue boas práticas de organização de arquivos.

---

## 🚀 Instruções para Executar Localmente

### ✅ Pré-requisitos
- PHP instalado na máquina (ou XAMPP/WAMP)
- Navegador web

### ▶️ Passos:

1. **Abrir o terminal** na pasta principal do projeto  
2. Rodar o servidor local com:

```bash
php -S localhost:8000
```

3. Acessar no navegador:

```
http://localhost:8000
```

---

## 🧭 Fluxo do Sistema

- **Login**: Tela inicial do sistema  
- **Cadastro**: Link para criar uma nova conta  
- **Dashboard**: Saudação ao usuário após login  
- **Lembrar e-mail**: Checkbox opcional no login  
- **Sair**: Encerra a sessão e limpa o cookie

---

## 🗂️ Estrutura de Diretórios

```
/classes/
├── Usuario.php
├── Sessao.php
└── Autenticador.php

/actions/
├── processa_cadastro.php
└── processa_login.php

/views/
├── login.php
├── register.php
├── dashboard.php
├── welcome.php
└── logout.php

/assets/
└── style.css

index.php
```

---

## 💡 Observações

Este projeto tem fins didáticos e foi desenvolvido para praticar autenticação com PHP, uso de sessões, cookies e orientação a objetos.  

