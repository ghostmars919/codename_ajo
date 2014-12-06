<?php
	include '../config/engine-config.php';
	$sentence;
	
	/*Funzione che, prende il parametro passatogli e lo confronta con gli elementi di un database
	trovato l elemento cercato restituisce la traduzione in sardo o viceversa.*/
	function translate ($word)
	{
		$query = mysql_query("SELECT sardo FROM parole WHERE '$word' = italiano") or die();
		//$row = mysql_fetch_array($query);

		while($row = mysql_fetch_array($query))
		{
			echo $row['sardo']."\n";
		}
	}

	/*Funzione per la divisione delle frasi*/
	function splitSentence($s){
		global $sentence;

		$split = explode(" ", $s);

		foreach($split as $Split){

			translate($Split);
		}

	}

	//translate($_GET['input-parola']);
	splitSentence($_GET['input-parola']);
?>
