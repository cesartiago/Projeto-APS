<?php
include_once('conexao.php'); //Fazendo a conexão com o banco de dados. Entrando nele

  $sql = "SELECT * FROM organizador ORDER BY BlindKey DESC";
  $resultado = mysqli_query($conexao, $sql) //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
  
  #$RESULT = $conexao->query($sql); //O certo
?>

<html>

<head>
  <title>PHP PURO</title>
</head>

<body>

  <?php
  #echo '<p> Echo de elemento HTML entre aspas simples </p>';
  ?>


<p>
  Lista de Organizadores  (Só PHP Q MENOS SABEMOS)
</p>


  <div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Nome</th> <!-- Table Headers -->
          <th scope="col">Telefone</th>
          <th scope="col">Instituicao</th>
          <th scope="col">CurriculoLattes</th>
          <th scope="col">DatadeNascimento</th>
          <th scope="col">Sexo</th>
          <th scope="col">CPF</th>
        </tr>
      </thead>
      <tbody>
        <!-- Laço para mostrar tudo -->
          <?php
            while( $Aux = mysqli_fetch_assoc ($resultado)){      //mysqli_fetch_assoc () RETORNA UMA MATRIZ ASSOCIATIVA
                echo "<tr>";
                echo "<td>".$Aux['Nome']."</td>"; //o "." é pra concatenar
                echo "</td>";
              }
          ?>

          <!-- HTML PURO -->
        <tr>
          <th scope="row">1^</th>
          <td> Acima </td>
          <td> está </td>
          <td> algo vindo </td>
          <td>  do </td>
          <td> Banco </td>
          <td> de </td>
          <td> Dados </td>
        </tr>
     
      </tbody>
    </table>
  </div>
</body>

</html>