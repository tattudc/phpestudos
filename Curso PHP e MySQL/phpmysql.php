<?php
    #Conexao com MySQL
    #mysqli
    $servidor = "localhost";
    $usuario = "root";
    $senha = "Asdqwe1@";
    $database = "aulaphp";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
    if($conexao){
        echo "Conectado com sucesso!";
    }
	else{
		echo "Erro ao conectar";
    }
    echo "<br>";
	/*
    #Criando tabelas usando PHP
    #Tabela alunos(nome do aluno, data de nascimento)
    $query = "CREATE TABLE alunos(
        id_aluno int not null auto_increment,
        nome varchar(255) not null,
        data_nascimento varchar(255) not null,
        primary key(id_aluno)
        )";
    $executar = mysqli_query($conexao, $query);
    if($executar){
        echo "Executado com sucesso!(Alunos)";
    }
	else{
		echo "Erro ao Executar(Alunos)";
    }
	echo "<br>";
	
    #Tabela cursos(nome do curso, carga horaria)
    $query = "CREATE TABLE cursos(
        id_curso int not null auto_increment,
        nome varchar(255) not null,
        carga_horaria int not null,
        primary key(id_curso)
        )";
    $executar = mysqli_query($conexao, $query);
    if($executar){
        echo "Executado com sucesso!(Cursos)";
    }
	else{
		echo "Erro ao Executar(Cursos)";
    }
	echo "<br>";
	
    #Tabela alunos_cursos(aluno, curso)
    $query = "CREATE TABLE alunos_cursos(
        id_aluno_curso int not null auto_increment,
        id_aluno int not null,
        id_curso int not null,
        primary key(id_aluno_curso)
    )";
    $executar = mysqli_query($conexao, $query);
    if($executar){
        echo "Executado com sucesso!(Alunos_Cursos)";
    }
	else{
		echo "Erro ao Executar(Alunos_Cursos)";
    }
	echo "<br>";
	
	#Inserir dados nas tabelas
	$query = "INSERT INTO alunos(id_aluno, nome, data_nascimento) 
				VALUES(DEFAULT, 'Carlos', '02-03-2000')";
	$executar = mysqli_query($conexao, $query);
    if($executar){
        echo "Executado com sucesso!(INSERT - Alunos)";
    }
	else{
		echo "Erro ao Executar(INSERT - Alunos)";
    }
	echo "<br>";
	
	$query = "INSERT INTO cursos(id_curso, nome, carga_horaria) 
				VALUES(DEFAULT, 'PHP', '30')";
	$executar = mysqli_query($conexao, $query);
    if($executar){
        echo "Executado com sucesso!(INSERT - Cursos)";
    }
	else{
		echo "Erro ao Executar(INSERT - Cursos)";
    }
	echo "<br>";
	
	$query = "INSERT INTO alunos_cursos(id_aluno_curso, id_aluno, id_curso) 
				VALUES(DEFAULT, 1, 1)";
	$executar = mysqli_query($conexao, $query);
    if($executar){
        echo "Executado com sucesso!(INSERT - Alunos_Cursos)";
    }
	else{
		echo "Erro ao Executar(INSERT - Alunos_Cursos)";
    }
	echo "<br>";
	
	
	#Deletando dados da tabela
	if(mysqli_query($conexao, "DELETE FROM alunos WHERE id_aluno = 3")){
		echo 'Apagado com sucesso!';
	}
	else{
		echo 'Falha ao apagar dados';
	}
	
	#Atualizando dados
	if(mysqli_query($conexao, "UPDATE alunos SET nome = 'Maria Joaquina' WHERE id_aluno = 2")){
		echo 'UPDATE com sucesso!';
	}
	else{
		echo 'Falha ao update de dados';
	}
	
	echo '<table border=1>
			<tr>
				<th>id</th>
				<th>Nome</th>
				<th>Data de Nascimento</th>
			</tr>';
			
	$consulta = mysqli_query($conexao, "SELECT * FROM alunos");
	#print_r($consulta);
	while($linha = mysqli_fetch_array($consulta)){
		echo '<tr><td>'.$linha['id_aluno'].'</td>';
		echo '<td>'.$linha['nome'].'</td>';
		echo '<td>'.$linha['data_nascimento'].'</td></tr>';
		
	}
	echo '</table>';
	
	#Alterando nome da coluna na tabela
	mysqli_query($conexao, "ALTER TABLE cursos CHANGE nome nome_curso varchar(255) NOT NULL");
	*/
	
	$consulta = mysqli_query($conexao, "SELECT alunos.nome, cursos.nome_curso
				FROM alunos, cursos, alunos_cursos
				WHERE alunos_cursos.id_aluno = alunos.id_aluno AND
				alunos_cursos.id_curso = cursos.id_curso");
	echo '<table border=1>
			<tr>
				<th>Nome do aluno</th>
				<th>Nome do curso</th>
			</tr>';
	while($linha = mysqli_fetch_array($consulta)){
		echo '<tr><td>'.$linha['nome'].'</td>';
		echo '<td>'.$linha['nome_curso'].'</td></tr>';
	}
	echo '</table>';
	
?>