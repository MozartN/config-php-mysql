<?php
   

    
    if(isset($_POST['submit']))
    {
        
      include_once("config.php");

    $NomeC = $_POST["nomeC"];
    $EnderecoC = $_POST["enderecoC"];
    $TelefoneC = $_POST["telefoneC"];
    $Email = $_POST["email"];
    $conexao = mysqli_query($conexao, "INSERT INTO cliente(nomeC, enderecoC, telefoneC,email)
    VALUES('$NomeC','$EnderecoC', '$TelefoneC','$Email') ");      
    }

?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cliente</title>
</head>
<body>
    <div class="formulario">        
        <form action="form1.php" method="post" >
            <h1>Cliente</h1>
          <p><label for="cliente">Nome do Cliente</Label><br></p>
          <input type="text" name="nomeC" id="nomeC"><br>
          <p><label for="cliente">Endereço do Cliente</label><br></p>
          <input type="text" name="enderecoC" id="enderecoC"><br>
          <p><label for="cliente">Telefone do Cliente</label><br></p>
          <input type="text" name="telefoneC" id="telefoneC"><br>
          <p><label for="cliente">E-mail do Cliente</label><br> </p>
          <input type="text" name="email" id="email"><br><br>
          <input type="submit" name="submit" id="submit">
        </form>
        </div>

</body>
</html>