<?php

include('./exDBconexao.php');
function insertTable()
{
    $conexao = getConnection();
    $dados = array(
        'cep' => "44002-304",
        'rua' => "Rua 10 de junho",
        'bairro' => "Centro",
        'numero' => "150",
        'complemento' => "Próximo a igreja.",
        'cidade' => "Feira de Santana",
        'estado' => "BA",
        'id_usuario' => 3
        /*'senha' => "585792" -Tabela usuario */
        /* 'telefone' => "77 99951-6852", -tabela telefone */
    );
    try {
        $stmt = $conexao->prepare("INSERT INTO endereco (id, cep, rua, bairro, numero, complemento, cidade, estado, id_usuario) VALUES (default, :cep, :rua, :bairro, :numero, :complemento, :cidade, :estado, :id_usuario)");
        $stmt->bindValue(':cep', $dados["cep"]);
        $stmt->bindValue(':rua', $dados["rua"]);
        $stmt->bindValue(':bairro', $dados["bairro"]);
        $stmt->bindValue(':numero', $dados["numero"]);
        $stmt->bindValue(':complemento', $dados["complemento"]);
        $stmt->bindValue(':cidade', $dados["cidade"]);
        $stmt->bindValue(':estado', $dados["estado"]);
        $stmt->bindValue(':id_usuario', $dados["id_usuario"]);
        //$stmt->bindValue(':senha', $dados["senha"]);
        $status = $stmt->execute();
        echo "Dados inseridos com sucesso:";
        return $status;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        $conexao = null;
    }
}
insertTable();
?>
