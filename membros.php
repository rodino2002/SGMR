<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include('protect.php');
    include('conexao.php');
    //include('head.php');
    
    $consulta = "SELECT * FROM membros";
    $con = $mysqli->query($consulta) or die($mysqli -> error);

?> 


<!DOCTYPE html><!--Identifica o tipo de documento em que estamos a trabalhar e a versão do html, neste caso HTML5-->
  <html>
      <head>
    <title>Sistema de Gestão de Membros Reformistas</title>
     <meta charset="utf-8"><!-- charset, conjunto de caractere e utf-8 (c.c latino),para corrigir erros de formataçães-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--stylesheet indica a folha de estilo-->
     <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="estilo.css">
     <link rel="icon"  href="imagens/logomr.PNG">
    </head>
  <body style="">
<nav id="menuprincipal" class="navbar fixed-top navbar-expand-lg navbar-light bg-info" style="box-shadow: #csc 5px 5px 5px;">
             <div class="container">
                <!-- Logotipo -->
                  <a class="navbar-brand" href="#" > <!--navbar-brand, esta propriedade identifica a marca da página-->
                    <img id="logo" class="mt-n2 article bg-default" src="imagens/logomr.PNG"  alt="logotipo da igreja"  width="60px" height="60px" data-toggle="modal" data-target="#logomr">
                  </a>
                  <!-- botao escondido -->
                    <button class="navbar-toggler m-1  bg-light" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button><!--O botão tem a função de recolher os menus quando são apresentadas em telas menores.-->
                    
                    <!-- MENUS -->
                  <div class="collapse navbar-collapse nav nav-tabs" role="tablist" id="navbar">
                  
                        <ul class="navbar-nav">

                        <li class="nav-item">
                                <a href="painel.php" class="nav-link btn btn btn-default text-light" style="margin-left: 20px;">Início</a>  
                            </li>
                            <li class="nav-item">
                                <a href="regis_membros.php" class="nav-link btn btn btn-default text-light" style="margin-left: 20px;">Registar Membros</a>  
                            </li>
                             <li class="nav-item">
                                <a href="membros.php" class="nav-link btn active btn btn-default text-default" style="margin-left: 20px;">Membros</a>  
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link btn btn btn-default text-light" style="margin-left: 20px;">Sair</a>  
                            </li>
                         </ul>
                </div>
                </nav>
<br><br><br><br>

<div class="container">
    <div class="row">
        
         <div class="container " style="margin-top: 7%;" >

            <h3 align="center">Lista dos Membros</h3><br>

            <table  class="table col-sm-6 table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr> 
                        // universidade ufrj
                        <th>Código</th>
                        <th>Nome</th> 
                        <th>igreja</th>
                        <th>pastor</th>
                        <th>local_batismo</th>
                        <th>sexo</th>
                        <th>data_nascimento</th>
                        <th>data_batismo</th>
                        <th>telefone</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                    <?php while($dado = $con ->fetch_array()){  ?>
                        <tr >
                            <td><?php echo $dado['id']; ?></td>
                            <td><?php echo $dado['nome']; ?></td>
                            <td><?php echo $dado['igreja']; ?></td>
                            <td><?php echo $dado['pastor']; ?></td>
                            <td><?php echo $dado['local_batismo']; ?></td>
                            <td><?php echo $dado['sexo']; ?></td>
                            <td><?php echo $dado['data_nascimento']; ?></td>
                            <td><?php echo $dado['data_batismo']; ?></td>
                            <td><?php echo $dado['telefone']; ?></td>

                            <td><a href="editar.php?id=<?php echo $dado['id']; ?> ">Editar</a></td>
                            <td><a href="excluir.php?id=<?php echo $dado['id']; ?> ">Excluir</a></td>
                        </tr>
                        <?php } ?>
            </table>
          <!--<p class="text">Total de Membros: <strong><?= count($membros) ?></strong> </p>-->
        </div>
    </div>
</div>
</body> 
</html>







<!--SCRIPTS js-->
<script src="bootstrap-4/js/jquery.js"></script>
            <script>
				$(document).on('click', 'ul#menu li', function(){
					$(this).addClass('active').siblings().removeClass('active')
				})
			</script>
           
            <script src="bootstrap-4/js/all.js"></script>
            <script src="bootstrap-4/js/owl.carousel.min.js"></script>
        </body>
   </html>

