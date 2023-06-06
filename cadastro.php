<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "INSERT INTO cadastro(nome, email, senha) 
VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro efetuado!</title>
</head>

<body>
    <div class="login-button">
        <button><a href="login.html">Entrar</a></button>
    </div>


    <div class="form-header">
        


    </div>


    </div>


</body>

</html>