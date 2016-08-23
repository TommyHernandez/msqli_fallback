<?php
/**
	Fichero que nos va a traducir las funciones MSQLI_ a MYSQL para dar retrocompatibilidad
	@author PedroTHDC
*/

function mysqli_connect($server, $usuario, $password){
	return mysql_connect($server ,$usuario, $password);
}
function mysqli_select_db($con, $bd ){
	return mysql_select_db($bd, $con);
}
function mysqli_errno($con){
	return mysql_errno($con);
}
function mysqli_error($con){
	return mysql_error($con);
	}
function mysqli_fetch_array($result){
	return mysql_fetch_array($result);
	}
function mysqli_fetch_assoc($result){	
	return mysql_fetch_assoc($result);
}
function mysqli_fetch_row($result){	
	return mysql_fetch_row($result);
}
function mysqli_insert_id($con){	
	return mysql_insert_id($con);
}
function mysqli_num_rows($result){	
	return mysql_num_rows($result);
}
function mysqli_query($con,$sql){ 
	return mysql_query($sql,$con);
}
function mysqli_real_escape_string($con,$data){
	return mysql_real_escape_string($data);
}
function mysqli_affected_rows(){
	return mysql_affected_rows();
}
function mysqli_close($con) {
	return mysql_close($con);
}
?>