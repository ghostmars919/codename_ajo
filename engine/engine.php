<?php
	include '../config/engine-config.php';
	
	/*Funzione che, prende il parametro passatogli e lo confronta con gli elementi di un database
	trovato l elemento cercato restituisce la traduzione in sardo o viceversa.*/
	function translate ($word)
	{
		$query = mysql_query("SELECT sardo FROM parole WHERE '$word' = italiano");
		//$row = mysql_fetch_array($query);

		while($row = mysql_fetch_array($query))
		{
			echo $row['sardo']."\n";
		}
	}

	translate($_GET['input-parola']);
?>