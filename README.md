# Sistema de Cadastro de Clientes - PHP + MySQL

Este é um projeto simples de cadastro de clientes desenvolvido com PHP e MySQL, utilizando o XAMPP como ambiente de desenvolvimento local. O sistema permite **login de usuários**, **cadastro**, **edição** e **exclusão de clientes**.

---

## 📌 Funcionalidades

- Tela de login de usuário;
- Cadastro de clientes;
- Edição de dados dos clientes;
- Exclusão de clientes.

---

## 🧰 Tecnologias utilizadas

- PHP
- MySQL
- XAMPP (Apache + phpMyAdmin)

---

## 🚀 Como executar o projeto

### 1. Instale o XAMPP

Baixe e instale a versão 8.2.12.0 do XAMPP:  
👉 [https://www.apachefriends.org/pt_br/download.html](https://www.apachefriends.org/pt_br/download.html)

### 2. Inicie os servidores

Abra o painel do XAMPP e inicie o **Apache** e o **MySQL**.

### 3. Clone ou copie o projeto

Coloque a pasta do projeto chamada `empresa` dentro da pasta `htdocs` do XAMPP.

**Exemplo de caminho:**
C:\xampp\htdocs\empresa

### 4. Crie o banco de dados

Acesse o [phpMyAdmin](http://localhost/phpmyadmin) e execute os seguintes comandos SQL:

```sql
CREATE DATABASE empresa;
USE empresa;

CREATE TABLE login (
  usuario VARCHAR(50),
  senha VARCHAR(50));

CREATE TABLE cliente (
  codigo INT(8) AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50),
  ender VARCHAR(80),
  fone VARCHAR(30));
```

### 5. Insira um usuário para login
```sql
INSERT INTO login (usuario, senha) VALUES ('zezin', 'zezin1234');
```

### 6. Acesse o sistema
Abra o navegador e digite:
http://localhost/empresa/

Faça login com:
```
Usuário: zezin
Senha: zezin1234
```

### 📝 Observações
- Este projeto foi desenvolvido como atividade prática para fixar conhecimentos em conexão com banco de dados, manipulação de dados com PHP, e funcionamento básico de um servidor local com XAMPP;
- Há também um arquivo chamado `preview_site` no repositório que mostra visualmente a interface do sistema.
