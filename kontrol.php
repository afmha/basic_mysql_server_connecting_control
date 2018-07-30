<?php

function veritabanikontrol($sistem="")
	{
		if(empty($sistem)){
			return "Veri yok.";
		}
		if(!isset($sistem)){
			return "Veri yok.";
		}
		if(!is_array($sistem){
			return "Veri yok.";
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
				return "Bağlantı başarılı.";
			}
		}catch( PDOException $a ){
			return "Bağlantı Sağlanamadı.";
		}

	}
  
  ?>
