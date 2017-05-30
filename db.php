<?php 
   try {
	
        $pdo = new PDO('mysql:host=mysql.cba.pl;dbname=mateuszek123321;encoding=utf8', 'laravelmateusz', 'Mateuszek123321');
        $pdo -> query ('SET NAMES utf8');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
    } catch( PDOException $e ) {
        echo 'ERROR: ' . $e->getMessage();        
    }