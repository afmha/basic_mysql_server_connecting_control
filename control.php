<?php

function databasecheck($sistem="")
	{
		if(empty($sistem)){
			return "No data";
		}
		if(!isset($sistem)){
			return "No data";
		}
		if(!is_array($sistem){
			return "No data";
		}
		if(!isset($sistem[0])){$sistem[0]="";}
		if(!isset($sistem[1])){$sistem[1]="";}
		if(!isset($sistem[2])){$sistem[2]="";}
		if(!isset($sistem[3])){$sistem[3]="";}
		$sunucu = $sistem[0];
		$kullanici = $sistem[1];
		$sifre = $sistem[2];
		$veritabani = $sistem[3];
		try{
			$baglanti = new PDO("mysql:host=".$sunucu.";dbname=".$veritabani, $kullanici, $sifre);
			if($baglanti){
				return "The connection is successful.";
			}
		}catch( PDOException $a ){
			return "Connection failed.";
		}

	}
  
  ?>
