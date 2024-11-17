<?php
session_start();
include_once("conexao.php");

// Consultar as informações dentro do banco de dados
$result_usuarios = "SELECT id, nome, email, telefone FROM usuarios";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
?>

<html>
<head>
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="modal">
        <?php
        // Verificação dos resultados, através da função mysqli_num_rows
        if (mysqli_num_rows($resultado_usuarios) > 0) {
            echo "<h3>Listagem de usuários cadastrados</h3>";
            
            echo "<table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Excluir</th>
                <th>Alterar</th>
            </tr>";

            // Interação com um laço de repetição
            while ($usuario = mysqli_fetch_assoc($resultado_usuarios)) {
                echo '<tr>';
                echo '<td>' . $usuario['nome'] . '</td>';
                echo '<td>' . $usuario['email'] . '</td>';
                echo '<td>' . $usuario['telefone'] . '</td>';
                echo '<td><a href="excluir.php?id=' . $usuario['id'] . '">Excluir</a></td>';
                echo '<td><a href="editar.php?id=' . $usuario['id'] . '">Editar</a></td>';
                echo '</tr>';
            }

            echo "</table>";
        } else {
            echo "<p>Nenhum usuário cadastrado</p>";
        }

        // Fechar a conexão com o banco de dados
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
