<?php

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$telefone = $_POST['campoTelefone'];
$especialidade = $_POST['campoEspecialidade'];

include '../includes/conexao.php';

$sql = "update receitas set nome='$nome', email='$email', telefone='$telefone', especialidade='$especialidade' where id = '$id'; ";

$conexao->query($sql);

header("location: ../receitas");   