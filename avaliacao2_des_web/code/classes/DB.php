<?php

class DB
{
    private $conn;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'artesanato_db';
        $username = 'root';
        $password = '';

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }

    public function cadastrarProduto($nome_produto, $preco, $descricao, $categoria)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO produtos_artesanais (nome_produto, preco, descricao, categoria)
                                      VALUES (:nome_produto, :preco, :descricao, :categoria)");

            $preco = str_replace(',', '.', $preco);

            $stmt->bindParam(':nome_produto', $nome_produto);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':categoria', $categoria);

            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function removerProduto($id)
    {
        $sql = "DELETE FROM produtos_artesanais WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function listarProdutos()
    {
        $sql = "SELECT * FROM produtos_artesanais ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>