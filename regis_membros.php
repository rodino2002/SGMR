<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include('protect.php');
    include('conexao.php');
    //include('head.php');
    

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
                                <a href="regis_membros.php" class="nav-link active btn btn btn-default text-default" style="margin-left: 20px;">Registar Membros</a>  
                            </li>
                             <li class="nav-item">
                                <a href="membros.php" class="nav-link btn btn-default text-light" style="margin-left: 20px;">Membros</a>  
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link btn btn btn-default text-light" style="margin-left: 20px;">Sair</a>  
                            </li>
                         </ul>
                </div>
                </nav>
<br><br><br><br><br><br>
<div class="container col-sm-12" >
    <div class="row">
         <div class="col-sm-7  container" style="" >

                 <form method="post" action="registamembros.php">
                    <div class="card">
                        <div class="card-header bg-secondary text-light">
                            <h3 align="center">Dados Pessoais</h3>
                        </div>
                         <div class="card-body">
                           <div class="row">
                             <div class="form-group col-md-6 ">
                                                 Nome Completo<input type="text" style="" class="form-control" id="nome" name="nome" >
                                                </div>
                                            
                                                <div class="form-group col-md-6">
                                                Data de Nascimento<input type="date" name="data_nascimento" class="form-control" style=""  id="data_nascimento">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                Nome da Igreja <input type="text" name="igreja" class="form-control" id="igreja" >
                                                </div> 
                                                <div class="form-group col-md-6">Data de Batismo
                                                <input type="date" name="data_batismo" class="form-control" style="" id="data_batismo">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                Batisado(a) pelo Pastor <input type="text" name="pastor" class="form-control"  id="pastor" >
                                                </div> 
                                                <div class="form-group col-md-6">
                                                Local do Batismo <input type="text" name="local_batismo" class="form-control"  id="local_batismo" >
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    Telefone<input type="number" name="telefone" class="form-control" style="" placeholder="xxx-xxx-xxx" id="telefone">
                                                </div>
                                                <div class="form-group" style="margin-top: 25px; margin-left: 15px;">
                                                    <select class="form-group" name="sexo">
                                                        <option selected>Sexo</option>
                                                        <option>Masculino</option>
                                                        <option>Feminino</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                    </div>
                                        <div class="card-footer bg-secondary">
                                            <button type="submit" class="btn btn-success">Enviar</button>
                                            <input type="reset" value="Limpar" class="btn btn-light" style="margin-left: 5px;">
                                        </div>
                    </div>
                 </form>

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

