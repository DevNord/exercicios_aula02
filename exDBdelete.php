<?php

include('./conexao.php');


function delete(int $usuario_id): bool
{
    $conexao = getConnection();
    try {
        $stmt = $conexao->prepare("DELETE FROM telefone WHERE id=:id");
        $stmt->bindValue(':id', $usuario_id);
        echo "Dados deletados com sucesso".'<br>';
        return $stmt->execute();
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        $conexao = null;
    }
}
delete();
?>