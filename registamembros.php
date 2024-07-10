<?php 

	//include_once("bd.class.php");

	$conexao = mysqli_connect("localhost", "root", "", "sgmr");

	if(!$conexao){
		echo "Erro ao conectar com  banco de dados";
	}

	$nome = $_POST['nome'];
	$igreja = $_POST['igreja'];
	$pastor = $_POST['pastor'];
	$local_batismo = $_POST['local_batismo'];
	$sexo = $_POST['sexo'];
	$nascimento = $_POST['data_nascimento'];
	$batismo = $_POST['data_batismo'];
	$telefone = $_POST['telefone'];


	$sql_cadastro = " INSERT INTO membros(nome, igreja, pastor, local_batismo, sexo, data_nascimento, data_batismo, telefone) VALUES('$nome','$igreja', '$pastor', '$local_batismo', '$sexo', '$nascimento',  '$batismo',  '$telefone' ) ";

	mysqli_query($conexao, $sql_cadastro);

	echo "registado com sucesso";
	mysqli_close($conexao);

?>