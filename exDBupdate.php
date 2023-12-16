<?php

include('./exDBconexao.php');



function updateTable()
{
    $conexao = getConnection();
    $dados = array(
        'senha' => "254893",
        'id' => 1
    );
    try {
        $stmt = $conexao->prepare("UPDATE usuario SET senha=:senha WHERE id=:id");
        $stmt->bindValue(':senha', $dados['senha']);
        // $stmt->bindValue(':cep', $dados['cep']);
        // $stmt->bindValue(':rua', $dados['rua']);
        // $stmt->bindValue(':numero', $dados['numero']);
        // $stmt->bindValue(':complemento', $dados['complemento']);
        // $stmt->bindValue(':bairro', $dados['bairro']);
        // $stmt->bindValue(':cidade', $dados['cidade']);
        // $stmt->bindValue(':estado', $dados['estado']);
        $stmt->bindValue(':id', $dados['id']);
        $status = $stmt->execute();
        echo ""
        return $status;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        $conexao = null;
    }
}
updateTable();
?>