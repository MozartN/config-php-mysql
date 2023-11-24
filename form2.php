<?php
    if(isset($_POST['submit']))
    {
    include_once ("config.php");
    $NomeR = $_POST["nomeRestaurante"];
    $EnderecoR = $_POST["enderecoRestaurante"];
    $TelefoneR =$_POST["telefoneRestaurante"];
    $Especialidade = $_POST["especialidade"];
    $conexao = mysqli_query($conexao, "INSERT INTO restaurante(nomeRestaurante, enderecoRestaurante, telefoneRestaurante,especialidade)
    VALUES('$NomeR','$EnderecoR', '$TelefoneR','$Especialidade')");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restaurante</title>
</head>
<body>
    
    <div class="formulario">
        <form action="form2.php" method="POST">
        <h1>Restaurante</h1>
        <p><label for="nomeRestaurante">Nome do Restaurante</label></p>
        <input type="text" id="nomeRestaurante" name="nomeRestaurante"><br>
       <p> <label for="enderecoRestaurante">Endereço</label></p>
        <input type="text" id="enderecoRestaurante" name="enderecoRestaurante"><br>
       <p> <label for="telefone">Telefone</label></p>
        <input type="text" id="telefoneRestaurante" name="telefoneRestaurante"><br>
        <p><label for="especialidade">Especialidade</label></p>
        <input type="text" id="especialidade" name="especialidade"><br>
        <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>