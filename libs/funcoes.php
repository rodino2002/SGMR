<?php 

//funções

function verifica_sessao() {
	return isset($_SESSION['usuario']);
}
