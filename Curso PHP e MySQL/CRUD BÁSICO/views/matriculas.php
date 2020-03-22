<a href="?pagina=inserir_matricula">Inserir nova Matricula</a>
<table style="border:1px solid #ccc; width: 100%;">
    <tr>
        <th>Nome Aluno</th>
        <th>Nome Curso</th>
		<th>Editar</th>
		<th>Deletar</th>
    </tr>
    <?php
        while($linha = mysqli_fetch_array($consulta_matriculas)){
            echo '<tr><td>'.$linha['nome'].'</td>';
            echo '<td>'.$linha['nome_curso'].'</td>';
            ?>
            <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso'];?>">Deletar</a></td></tr>
            
        <?php
            }
        ?>
</table>