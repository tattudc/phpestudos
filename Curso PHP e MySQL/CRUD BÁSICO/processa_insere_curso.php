<?php
include 'db.php';

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

echo $nome_curso;
echo $carga_horaria;

$query = "INSERT INTO cursos(id_curso, nome_curso, carga_horaria)
        VALUES(DEFAULT, '$nome_curso', $carga_horaria)";
mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');
?>