# Sistema de Login e Registro com PHP

Projeto simples de autenticação de usuários usando PHP puro com PostgreSQL.  
Inclui funcionalidades de registro, login, dashboard protegida por sessão e logout.

## Funcionalidades

- Registro de usuários com senha criptografada
- Login com verificação segura
- Sessão para controle de acesso
- Área protegida (dashboard)
- Logout

## Tecnologias Usadas

- ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
- PostgreSQL (via Docker)
- pgAdmin (via Docker)
- HTML/CSS simples
- PDO (PHP Data Objects)

## Como usar

1. Clone o repositório e execute o docker:
   
```bash
git clone https://github.com/seu-usuario/login-php-puro.git
cd login-php-puro
docker-compose up -d
```

2. Acesse o pgAdmin no navegador (normalmente em http://localhost:8080):]

Crie o banco de dados login_system_db e execute:

```sql
CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

3. Inicie o servidor local:

```bash
php -S localhost:8000
```

Acesse no navegador:

- http://localhost:8000/register.html para registrar

- http://localhost:8000/login.html para fazer login

---

Projeto é de uso livre para fins de estudo e prática.
