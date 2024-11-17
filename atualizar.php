<?php
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

if ($id && $nome && $email && $telefone) {
    $query = "UPDATE usuarios SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = $id";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn)) {
        echo "<script>alert('Usuário atualizado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao atualizar usuário.');</script>";
    }
}

header("Location: index.php");
exit;
?>
