<?php
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conn, $query);
$usuario = mysqli_fetch_assoc($resultado);
?>

<html>
<head>
    <title>Editar Usuário</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Editar Usuário</h1>
        <form method="POST" action="atualizar.php">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            
            <label>Nome:</label>
            <input type="text" class="form-contact-input" name="nome" value="<?php echo $usuario['nome']; ?>" required>
            
            <label>Email:</label>
            <input type="email" class="form-contact-input" name="email" value="<?php echo $usuario['email']; ?>" required>
            
            <label>Telefone:</label>
            <input type="text" class="form-contact-input" name="telefone" value="<?php echo $usuario['telefone']; ?>" required>
            
            <button type="submit" class="form-contact-button">Atualizar</button>
        </form>
    </div>
</body>
</html>
