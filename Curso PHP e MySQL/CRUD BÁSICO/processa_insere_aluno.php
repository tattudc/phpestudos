<?php
include 'db.php';

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];

echo $nome;
echo $data_nascimento;

$query = "INSERT INTO alunos(id_aluno, nome, data_nascimento)
        VALUES(DEFAULT, '$nome', '$data_nascimento')";
mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
?>