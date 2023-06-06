<?php
$servidor="34.95.140.108";
$usuario="root";
$senha=" ";
$db="cadastropg";

$conexao=mysqli_connect($servidor, $usuario, $senha, $db);
if(!$conexao)
{
    die("Houve um erro: ".mysqli_connect_error());
}
?>
