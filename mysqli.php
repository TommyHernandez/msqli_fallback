<?php
/**
	Fichero que nos va a traducir las funciones MSQLI_ a MYSQL para dar retrocompatibilidad
	@author PedroTHDC
*/

function mysqli_connect($server, $usuario, $password){
	return mysql_connect($server ,$usuario, $password);
}
function mysqli_select_db($link, $bd ){
	return mysql_select_db($bd, $link);
}
function mysqli_errno($cxn){
	return mysql_errno($cxn);
}
function mysqli_error($cxn){
	return mysql_error($cxn);
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
function mysqli_insert_id($cxn){	
	return mysql_insert_id($cxn);
}
function mysqli_num_rows($result){	
	return mysql_num_rows($result);
}
function mysqli_query($cxn,$sql){ 
	return mysql_query($sql,$cxn);
}
function mysqli_real_escape_string($cxn,$data){
	return mysql_real_escape_string($data);
}
function mysqli_close() {
	return mysql_close();
}
?>