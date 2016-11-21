<?php
	
	//$GLOBALS -> refernces all variables available in global scope

	echo '$GLOBALS____________________<br>';
	function test() {
  		$foo = "local variable";
    		echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
      		echo '<br>';
        	echo '$foo in current scope: ' . $foo . "\n";
		}	 
	$foo = "Example content";
	test();
	echo '<br>';
	
	// $_SERVER -> array that stores server and excution environment information
	
	echo '<br>$_SERVER____________________ <br>variable: <br>';
	echo $_SERVER['SERVER_NAME'];
	echo '<br>';
	echo 'Timestamp: ' . $_SERVER['REQUEST_TIME'];
	echo '<br>';
	echo $_SERVER['REMOTE_ADDR'];
	
	// $_GET -> array of variables passed into the script via URL parameters
	
	
	echo '<br><br>$_GET:____________________<br> For this example to work click this <a href="' .
	$_SERVER['PHP_SELF'] . '?name=Micky">link</a>';
	echo '<br>Your name seems to be ' . htmlspecialchars($_GET["name"]) . '!';
	
	
	//$_POST -> array of variables passed into script using HHTP Post method

	
	echo '<br><br>$_POST____________________<br>Hello ' . htmlspecialchars($_POST["name"]) . '!';
	echo '<br>This will not work because no POST variables are being sent.';
	echo '<br><br>';
	
	
	// $_FILES -> all files uploaded via HTTP Post method
	
	
	echo '<br>$_FILES____________________<br>';
	echo '<br>' . print_r($_FILES);
	echo '<br>This is empty because there are no files being passed into the php
	file.';
	
	
	// $_COOKIE -> array of all variables passed into the script via HTTP cookies

	
	$cookie_name = 'name';
	$cookie_value = 'Cookiemonster';
	setcookie($cookie_name, $cookie_value, time() + (3600), "/");
	
	echo '<br><br>';
	echo '<br>$_COOKIE_____________________<br>';
	echo '<br>Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
	
	// $_SESSION -> array containing all session varaibles
	
	
	session_start();
	$_SESSION['greetings'] = 'Hey there!';
	$_SESSION['farewell'] = 'Goodbye.';
	echo '<br><br>';
	echo '<br>$_SESSION____________________<br>';
	echo $_SESSION['greetings'] . ' aaaand ' . $_SESSION['farewell'];
	echo '<br>';
	
	
	// S_REQUEST -> array containing all of get, cookie and post varaibles
	echo '<br><br>$_RESQUEST____________________<br>';
	var_dump($_REQUEST);
	echo '<br>So far only contains name from $_GET.';
	
	
	// $_ENV -> array of all varaibles from environment method
	echo '<br><br>$_ENV_____________________<br>';
	echo 'My username is ' . $_ENV["USER"] . '!';
	echo '<br>Empty varaible username, since none is entered so far.';
	?>
