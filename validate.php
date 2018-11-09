<?php 
//validación de datos
//Si uno de los campos no coincide, el acceso es denegado y retornado al inicio
if( $_POST['email'] == "test@gmail.com" && $_POST['password'] == "1234" ){
	echo json_encode([
		"success"=>1  //permitido
		,"message"=>"Acceso Correcto"
		,"link"=>"my_account.php"
	]);
}else{
	echo json_encode([
		"success"=>0  //permitido
		,"message"=>"Acceso Incorrecto"
	]);
}
?>