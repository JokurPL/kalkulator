<?php 
	include( 'session.php' ); 

	$id = $_GET['id'];

	if( $id > 0 ) {
	$sth = $pdo->prepare( 'DELETE FROM `news` WHERE `id` = :id' );
	$sth->bindParam( ':id', $id );
    $sth->execute();
    header('location: admin.php');
 }  else {

    header('location: admin.php');
    }