<?php
	//Variabili e costanti
	$nome_db = "php";
	//$host = $OPENSHIFT_MYSQL_DB_HOST.":".$OPENSHIFT_MYSQL_DB_DB_PORT;
	echo $host;
	$host= "127.5.174.130:3306";
	$user = "adminD1VznrN";
	$passwd="hPj3P_BQVqPQ";


	//Connessione al DB

	if (mysql_connect($host,$user,$passwd) && mysql_select_db($nome_db)) 
	{
		echo "Connessione avvenuta!\n";
	}
	else
	{ 
		echo "Impossibile connettersi, riprovare!\n";
	}

	

?>
