
<?php

$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$telefone = $_POST['campoTelefone'];
$especialidade = $_POST['campoEspecialidade'];


include '../includes/conexao.php';

$sql = "insert into receitas (nome, email, telefone, especialidade) 
        values ('$nome', '$email', '$telefone', '$especialidade')";

$conexao->query($sql);

header("location: index.php"); 