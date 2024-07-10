<?php 

	//include_once("bd.class.php");

	$conexao = mysqli_connect("localhost", "root", "", "sgmr");

	if(!$conexao){
		echo "Erro ao conectar com  banco de dados";
	}

	$nome = $_POST['nome'];
	$senha = md5(md5($_POST['senha']));
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$telefone = $_POST['telefone'];
	$nascimento = $_POST['nascimento'];


	$sql_cadastro = " INSERT INTO uniao(nome, senha, email, sexo, telefone, nascimento) VALUES('$nome', '$senha', '$email', '$sexo', '$telefone', '$nascimento') ";

	mysqli_query($conexao, $sql_cadastro);

	mysqli_close($conexao);

?>

