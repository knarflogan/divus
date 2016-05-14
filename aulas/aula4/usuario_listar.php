<?php

include("conexao.php");

// Listar todos usuarios
$sql = "SELECT * FROM usuario";

$sth = $dbh->prepare($sql);

$sth->execute();

$usuarios = $sth->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Exemplo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Projeto</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="E-mail" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Senha" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-md-12">
          
          <h1>Usuário <small>admin</small></h1>

           <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-md-5">Nome</th>
                  <th class="col-md-6">E-mail</th>
                  <th class="col-md-1"></th>
                </tr>
              </thead>
              <tbody>


              <?php
                foreach($usuarios as $usuario):
              ?>

                <tr>
                  <td> <?= $usuario['nome'] ?> </td>
                  <td><?= $usuario['email'] ?></td>
                  <td class="text-center">
                    <div class="btn-group" role="group" aria-label="...">

                      <a href="usuario_alterar.php?codigo=<?= $usuario['codigo'] ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                      <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                    </div>
                  </td>
                </tr>

              <?php
                endforeach;
              ?>
                
                
              </tbody>
            </table>

        </div>

      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
