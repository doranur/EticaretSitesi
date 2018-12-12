<?php 
try{

$db=new PDO("mysql:host=localhost;dbname=giyal; charset=utf8",'root','12345678');
//echo "hfekjfheflhel";
} 
catch(PDOException $e){
	echo $e-> getMessage();
}


?>