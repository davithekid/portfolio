<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];

$arquivo = "meuarquivo.txt";
$handle = fopen($arquivo, "a+");

fwrite($handle,  "Nome: ". $nome . "\n" . "E-mail: " . $email . "\n" . "Assunto: " . $assunto . "\n");

fclose($handle);


header ('location: ../contato.php');

?>