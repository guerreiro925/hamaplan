<?php
/* CONTROLADOR PHP */
include('conexao.php');
$acao = $_GET['acao'];

//acessar_usuario//
if($acao == 'acessar'){

$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);
$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);
$senha = explode('.', $senha);
$senha = $senha[0];



$query = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND deletar != 1");
while($rs = mysql_fetch_array($query)){

$senha_banco = $rs['senha'];
$senha_banco_hs = $rs['senha'];
$senha_banco = explode('.', $senha_banco);
$senha_banco = $senha_banco[0];
}




if($senha != $senha_banco OR $senha_banco == NULL){
echo "<script>window.location.href='login.php?msg=error';</script>";
session_destroy();
} else {



$query = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha_banco_hs' AND deletar != 1");
while($result = mysql_fetch_array($query)){
session_start();
$_SESSION['usuario'] = $result['usuario'];
echo "<script>window.location.href='index.php';</script>";

}

}
//sair//
} else if($acao == 'sair'){

session_start();
session_destroy();	
echo "<script>window.location.href='../index.php';</script>";
	
} 




// --------------------------------------------------------------- USUÁRIOS ---------------------------------------------------------------//

 else if($acao == 'add_usuarios'){
	
	$usuario = addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);
	$email = addslashes( $_POST['email']);



	$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);




$seleciona = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

if(mysql_num_rows($seleciona) == 0){

mysql_query("INSERT INTO usuarios ( usuario, senha, email ) VALUES ('$usuario', '$senha', '$email') ");	

}

echo "<script>window.location.href='usuarios_incluir.php?msg=ok';</script>";


} else if($acao == 'editar_usuarios'){
	
	$idusuario = $_POST['id'];
	$usuario = addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);
	$email = addslashes($_POST['email']);

$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);


	
mysql_query("UPDATE usuarios SET usuario='$usuario', senha='$senha', email='$email' WHERE idUsuario = '$idusuario'");

echo "<script>window.location.href='usuarios_editar.php?id=$idusuario&msg=ok';</script>";


} else if ($acao == 'excluir_usuarios'){
	
	$idusuario = $_GET['id'];
mysql_query("UPDATE usuarios SET deletar = '1' WHERE idUsuario = '$idusuario'");	

echo "<script>window.location.href='usuarios.php';</script>";


// --------------------------------------------------------------- CLIENTE ---------------------------------------------------------------//
} else if ($acao == 'add_clientes'){
	
	
	$nome = addslashes( $_POST['nome']);
	$cidade = addslashes( $_POST['cidade']);
	$estado = addslashes( $_POST['estado']);
	$cep = addslashes( $_POST['cep']);
	$cpf = addslashes( $_POST['cpf']);
	$tipo = addslashes ($_POST['tipo']);
	$endereco = addslashes ($_POST['endereco']);
	$agencia = addslashes ($_POST['agencia']);
	$numero = addslashes ($_POST['numero']);
	
	mysql_query("INSERT INTO clientes ( nome, cidade, estado, cep, cpf, tipo, endereco, agencia, numero) VALUES ('$nome','$cidade', '$estado', '$cep', '$cpf','$tipo','$endereco', '$agencia', '$numero') ");	

echo "<script>window.location.href='clientes_incluir.php?msg=ok';</script>";


} else if ($acao == 'editar_clientes'){
	
	$idcliente = $_POST['id'];
	$nome = addslashes( $_POST['nome']);
	$cidade = addslashes( $_POST['cidade']);
	$estado = addslashes( $_POST['estado']);
	$cep = addslashes( $_POST['cep']);
	$cpf = addslashes( $_POST['cpf']);
	$tipo = addslashes ($_POST['tipo']);
	$endereco = addslashes ($_POST['endereco']);
	$agencia = addslashes ($_POST['agencia']);
	$numero = addslashes ($_POST['numero']);

	mysql_query("UPDATE clientes SET nome='$nome', cidade='$cidade', estado='$estado', cep='$cep', cpf='$cpf', tipo='$tipo', endereco='$endereco', agencia='$agencia', numero='$numero'  WHERE idCliente = '$idcliente' ");
	
echo "<script>window.location.href='clientes_editar.php?id=$idcliente&msg=ok';</script>";
	
	
} else if ($acao == 'excluir_clientes'){
	
	$idcliente = $_GET['id'];
	
	mysql_query("UPDATE clientes SET deletar = '1' WHERE idCliente = '$idcliente'");
	
echo "<script>window.location.href='clientes.php';</script>";


}

?>