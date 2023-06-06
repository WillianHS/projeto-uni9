<?php
$servidor="site-projeto-uni9-1semestre:southamerica-east1:db-7even";
$usuario="root";
$senha="QSl180!@#Qsl180!@#";
$db="cadastropg";

$conexao=mysqli_connect($servidor, $usuario, $senha, $db);
if(!$conexao)
{
    die("Houve um erro: ".mysqli_connect_error());
}
?>