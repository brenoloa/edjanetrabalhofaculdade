<?php
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if ($id) {
    $query = "DELETE FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn)) {
        echo "<script>alert('Usuário excluído com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao excluir usuário.');</script>";
    }
}

header("Location: index.php");
exit;
?>
