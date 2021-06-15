<?php

	$db_host='localhost';
	$db_user='id16977371_irfana';
	$db_pass='Irfana@12345';
	$db_name='id16977371_credit';

	try {
		$pdo= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>