<?php
$conexao = new mysqli("localhost", "root", "", "pet_monitor");

if ($conexao->connect_error) {
    die("Não foi possível estabelecer a conexão com o banco de dados da PetMonitor.");
}
else {
    echo 'Conexão estabelecida.';
}
?>

