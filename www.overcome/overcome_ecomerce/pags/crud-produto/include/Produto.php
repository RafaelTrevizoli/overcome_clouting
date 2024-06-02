<?php
// include/Produto.php

class Produto
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function insereProduto($nome, $preco, $precofic, $categoria_id, $imagem)
    {
        $query = "INSERT INTO produtos (nome, preco, precofic, categoria_id, imagem) VALUES ('{$nome}', '{$preco}', '{$precofic}', {$categoria_id}, '{$imagem}')";
        $resultadoDaInsercao = mysqli_query($this->conexao, $query);
        return $resultadoDaInsercao;
    }

    public function listaProdutos($categoria_id)
    {
        $produtos = array();
        $resultado = mysqli_query($this->conexao, "SELECT p.*, c.nome as categoria_nome FROM produtos as p JOIN categorias as c ON p.categoria_id = c.id WHERE p.categoria_id = $categoria_id");

        while ($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    public function buscaProduto($id)
    {
        $query = "select * from produtos where id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    public function alteraProduto($id, $nome, $preco, $precofic, $categoria_id)
    {
        $query = "update produtos set nome = '{$nome}', preco = {$preco}, precofic = {$precofic}, categoria_id = {$categoria_id} where id = {$id}";
        return mysqli_query($this->conexao, $query);
    }

    public function removeProduto($id)
    {
        // Busca o produto para obter o nome da imagem
        $produto = $this->buscaProduto($id);
        $imagem = $produto['imagem'];
    
        // Remove o produto do banco de dados
        $query = "delete from produtos where id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
    
        // Remove a imagem do servidor
        $uploadsDir = "../uploads/"; // Caminho para a pasta uploads
        $imagemPath = $uploadsDir . $imagem;
        
        if ($resultado && $imagem && file_exists($imagemPath)) {
            if(unlink($imagemPath)) {
                echo "Arquivo removido: " . $imagemPath;
            } else {
                echo "Erro ao remover arquivo: " . $imagemPath;
            }
        } else {
            echo "Arquivo não encontrado: " . $imagemPath;
        }
    
        return $resultado;
    }
}

?>