
---

## 🔐 Login de Acesso

- **Usuário:** `admin`  
- **Senha:** `admin`

Essas credenciais estão fixas na classe `Login`, no arquivo `classes/login.php`.

---

## 🛠️ Como rodar o projeto

1. Clone ou baixe o repositório:
    ```bash
    git clone https://github.com/seu-usuario/lojinha-artesanal.git
    ```

2. Coloque os arquivos na pasta `htdocs` do XAMPP:
    ```
    C:\\xampp\\htdocs\\avaliacao2_des_web
    ```

3. Inicie o **Apache** e **MySQL** pelo XAMPP.

4. Crie o banco de dados MySQL:

    ```sql
    CREATE DATABASE artesanato_db;

    USE artesanato_db;

    CREATE TABLE produtos_artesanais (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        descricao TEXT NOT NULL,
        categoria VARCHAR(100) NOT NULL
    );
    ```

5. Acesse no navegador:

    ```
    http://localhost/avaliacao2_des_web/index.php
    ```

---

## ✅ Funcionalidades

- Login e controle de sessão
- Cadastro de novos produtos
- Listagem de todos os produtos
- Remoção de produtos
- Mensagens de feedback ao usuário

---

## 📌 Observações

- O banco de dados precisa estar corretamente configurado antes de testar o cadastro.
- Os erros são exibidos em caso de falha na conexão ou execução do SQL.

---

## 📄 Licença

Este projeto é apenas para fins didáticos e não possui licença aberta.
"""