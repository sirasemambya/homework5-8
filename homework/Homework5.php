<?php
	
	//IF STATEMENTS

	$var;
	
	//if statement for isset()

	if(isset($var)==TRUE){
		
		echo "This variable is not NULL \n";
		}
	
	else{
		
		echo "This variable is NULL";
		}
	//if statement for empty()

	if(empty($var)==TRUE){
		
		echo "This variable is empty  \n";
		}

	else{
		
		echo "This variable is not empty";
		}
	
	//if staement for is_null()

	if(is_null($var)==TRUE){
		
		echo "This variable is equal to null";
		}

	else{
		
		echo "This variable has a value other than null";
		}

	//assigning a value to $var

	$var = "Touche Chapeau";

	if(is_null($var)==TRUE){
		
		echo "The variable is equal to null";
		}

	else if(empty($var)==TRUE){
		
		echo "The variable is empty";
		}
	
	else if(isset($var)==TRUE){
		
		echo "The variable has the value: ";
		echo $var;
		}

	//SWITCH STATEMENTS

	$var2;

	//switch for checking is_null()
	
	switch(TRUE){
		
		case is_null($var2):
			echo "The variable is equal to null";
			break;

		default:
			echo "The variable is not equal to null";
		}

	$var3 = "Hello";

	//switch for checking for isset()

	switch(TRUE){
		
		case isset($var3):
			echo "The variable has a value";
			break;
		
		default:
			echo "The varaible has not yet been set";
		}

	//switch for checking for empty()

	switch(TRUE){
		
		case empty($var3):
			echo "The variable is empty";
			break;

		default:
			echo "The variable is not empty";
		}
	
	//switch for checking all 3 cases

	switch(TRUE){
		
		case empty($var3):
			echo "The variable is empty";
			break;

		case is_null($var3):
			echo "The variable is equal to null";
			break;

		case isset($var3):
			echo "The variable has the value: ";
			echo $var3;
			break;

		default:
			echo "We know nothing";
		}

?>


	



