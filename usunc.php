<?php 
	include( 'session.php' ); 

	$id = $_GET['id'];

	if( $id > 0 ) {
	$sth = $pdo->prepare( 'DELETE FROM `com` WHERE `id` = :id' );
	$sth->bindParam( ':id', $id );
    $sth->execute();
    header('location: admin.php');
 }  else {
    header('location: admin.php');
    }