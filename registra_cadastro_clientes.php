<?php

require_once('registra_classes_misql.php');

$nome = $_POST ['nome'];

$email = $_POST['email'];

$celular = $_POST['celular'];

$objet = new registra_usuario();
$link = $objet-> conecta_mysql();

$sql = "insert into cadastro(nome,email,celular) values ('$nome', '$email','$celular')";

mysqli_query($link,$sql);




?>