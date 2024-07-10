<?php
    include('conexao.php');

    if(isset($_POST['usuario']) || isset($_POST['senha'])){
     
      if(strlen($_POST['usuario']) == 0){
         
        
        echo "<br><br><br><br>Preencha seu nome";
        //<script> alert "Preencha seu email"; </script>
       // <script> alert " echo "Preencha seu email"; " </script>
         
      } else if(strlen($_POST['senha']) == 0){
        
         
        echo "<br><br><br><br>preencha sua senha";
        
      } else {

          $usuario = $mysqli -> real_escape_string($_POST['usuario']);
          $senha = $mysqli -> real_escape_string($_POST['senha']);

          $sql_code = "SELECT * FROM igreja WHERE nome = '$usuario' AND senha = '$senha'";
          $sql_query = $mysqli ->query($sql_code) or die("falha na execusao do codigo sql".$mysqli->error);

          $quantidade = $sql_query->num_rows;
          if($quantidade == 1){
              $usuario = $sql_query->fetch_assoc();
              
              if(!isset($_SESSION)){
                session_start();
              }
              $_SESSION['id'] = $usuario['id'];
              $_SESSION['usuario'] = $usuario['usuario'];

              header("Location: painel.php");
          }else{
              echo"<br><br><br><br>falha ao logar! nome ou senha incorretos";

          }
      }

    }
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
                    
                    </div>  
                </nav>
