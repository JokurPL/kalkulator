<?php include('head.php'); include('db.php'); ?>
<?php  

	session_start();


	if( isSet( $_POST['login'] ) ) {
			$login = $_POST['login'];
			$pass = md5( $_POST['pass'] );
	 
			$sth = $pdo->prepare( 'SELECT * FROM users WHERE login = :login AND pass = :pass' );
			$sth->bindParam( ':login', $login, PDO::PARAM_STR );
			$sth->bindParam( ':pass', $pass, PDO::PARAM_STR );
			$sth->execute();
			$result = $sth->fetch();
			if( $result && isSet( $result['id'] ) ) {
				$_SESSION['logged'] = true;
				$_SESSION['userLogin'] = $result['login'];
				header('location:index.php');
			} 
		}
?>
<?php if( !isSet( $_SESSION['logged'] ) || $_SESSION['logged'] == false ): ?>
 <div class="container">
 		<h1>Zaloguj się <hr></h1>
 	    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <form method="post" class="form-login">
            <h4>Witaj ponownie!</h4>
            <input name="login" type="text" id="userName" class="form-control input-sm chat-input" required placeholder="Login">
            </br>
            <input name="pass" type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="Hasło" required>
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <button class="btn btn-primary btn-md">Zaloguj się <i class="fa fa-sign-in"></i></button>
            </span>
            </div>
            </div>	
        
        </form>
    </div><hr>
<?php die; endif;?>
