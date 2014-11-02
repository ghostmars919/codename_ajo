<?php
	//Variabili e costanti
	$nome_db = "trad_sardo";
	$host= "localhost";
	$user = "root";
	$passwd="";


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