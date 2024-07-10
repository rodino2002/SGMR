<?php
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['id'])){
            die("voocê não pode entrar nesta página, porque não está logado. <p><a href=\"index.php\">Entrar</a></p>");
        }
?>