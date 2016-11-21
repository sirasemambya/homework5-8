<?php	

	//start timer for register shutdown function

	$start_time = microtime(true);
	 
	register_shutdown_function('my_shutdown');
	 

	//Function that prints 2 optional arguments
	
	function foo($arg1 = '', $arg2 = '') {
	 
	     echo "arg1: $arg1\n";
	     echo "arg2: $arg2\n";
	     }
		   
        foo('Hey','There');

	//same function with any number of arguments
	//utilizes func_get_args to creat an array of arguments

	function betterFoo() {
	 
		$args = func_get_args();
		  
		foreach ($args as $k => $v) {
			echo "arg".($k+1).": $v\n";
			}
		}

	betterFoo('Ya\'ll','close','that','frontdoor!');
	
	
	//glob function returns all php files in directory

	$files = glob('*.php');
	 
	print_r($files);

	$files = glob('*.php');
	 
	//same function reutrns file with file path

	$files = array_map('realpath',$files);
	  
	print_r($files);

	
	//function that returns memory being used

	echo "Initial: ".memory_get_usage()." bytes \n";

	//using some memory and getting result

	for ($i = 0; $i < 100000; $i++) {
	    $array []= md5($i);
	    }
	
	echo "Final: ".memory_get_usage()." bytes \n";

	
	//checking CPU Usage

	print_r(getrusage());
		

	///Generating Unique IDs

	echo uniqid();

	echo uniqid('Jan_');

	
	//serializing an array into a string

	$myvar = array(
	    	'hello',
	    	42,
		array(1,'two'),'apple');
			 
	$string = serialize($myvar);
			  
	echo $string;
	
	//reproduce original variable

	$newvar = unserialize($string);
	 
	print_r($newvar);


	//String comression

	$string =
	"Lorem ipsum dolor sit amet, consectetur
	adipiscing elit. Nunc ut elit id mi ultricies
	adipiscing. Nulla facilisi. Praesent pulvinar,
	sapien vel feugiat vestibulum, nulla dui pretium orci,
	non ultricies elit lacus quis ante. Lorem ipsum dolor
	sit amet, consectetur adipiscing elit. Aliquam
	pretium ullamcorper urna quis iaculis. Etiam ac massa
	sed turpis tempor luctus. Curabitur sed nibh eu elit
	mollis congue. Praesent ipsum diam, consectetur vitae
	ornare a, aliquam a nunc. In id magna pellentesque
	tellus posuere adipiscing. Sed non mi metus, at lacinia
	augue. Sed magna nisi, ornare in mollis in, mollis
	sed nunc. Etiam at justo in leo congue mollis.
	Nullam in neque eget metus hendrerit scelerisque
	eu non enim. Ut malesuada lacus eu nulla bibendum
	id euismod urna sodales. ";
	 
	$compressed = gzcompress($string);
	  
	echo "Original size: ". strlen($string)."\n";
	
	echo "Compressed size: ". strlen($compressed)."\n";
	   
	// reproduce original string

	$original = gzuncompress($compressed);

	
	//Register Shutdown Function calculates a script's runtime

	function my_shutdown() {
	global $start_time;
		 
	echo "execution took: ".
	(microtime(true) - $start_time)." seconds.";
	
	}
		
?>

