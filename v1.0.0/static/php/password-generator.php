<?php

class random
{
	public static function passsword($length, $characters)
	{

	    $pass = "";
	    $max_length = strlen($characters);

	    for($i = 0; $i < $length; $i++){
	        $pass .= substr($characters, mt_rand(0,$max_length), 1);
	    }
	    
	    return utf8_decode($pass);

	    /*
	    *	REFERENCES
	    *
	    *	https://www.php.net/manual/es/function.strlen.php
	    *	https://www.php.net/manual/es/function.substr
	    *	https://www.php.net/manual/es/function.mt-rand.php
	    *	https://www.php.net/manual/es/function.utf8-decode
	    */
	}	
}
