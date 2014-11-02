<?php
	//Variabili e costanti
	$nome_db = "trad_sardo";
	$host= "localhost";
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