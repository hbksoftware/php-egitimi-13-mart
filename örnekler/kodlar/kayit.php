<?php

if($_POST || $_GET){
	var_dump($_REQUEST['FullName']);
	var_dump($_GET['merhaba']);
	var_dump($_POST['Password']);
}
	

else
	echo "kaydınız geçersiz ";
?>
