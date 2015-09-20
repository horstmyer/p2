<?php
/* define var and get form data */

if (isset($_POST['length']) > 0){
	$length = $_POST['length'];
	}else{
		$length = 4;
	}
	
if (isset($_POST['numbers']) &&
    $_POST['numbers'] == 'Yes') 
	{
    $numbers = true;
	}else{
    $numbers = false;
	}
	
	
if (isset($_POST['symbols']) &&
    $_POST['symbols'] == 'Yes') 
	{
	$symbols = true;	
	}else{
	$symbols = false;	
	}
	
$newPw = array();
$words = array ("pizza", "lasagna", "pasta", "gelato");

/* generate new array with 4 random words */

$ranWords = array_rand($words, 4);
$pw = array();

var_dump($pw, $ranWords); /* this dump shows an empty pw() and "array(4) { [0]=> int(0) [1]=> int(1) [2]=> int(2) [3]=> int(3) }  " which is the correct number, just no actual words */

/* generate words for pw generation
   gather desired length of word
 */
 
 /*  The switch below is generating and error that says the "Function name must be a string in C:\xampp\htdocs\p2\logic.php on line 46" */

switch ($length) {
	case 2:
		array_push($pw[$ranWords(0,1)]);
		break;
	case 3:
		array_push($pw[$ranWords(0,1,2)]);
		break;
	case 4:
		array_push($pw[$ranWords(0,1,2,3)]);
		break;
	default:
		echo "Oops";
}

/* generate some random numbers and symbols */

$someSym = array("!", "@", "#", "%", "&");
$somenum = array ("1", "2", "3", "4");
$ranNum = array_rand($somenum, 1);
$ranSym = array_rand($someSym, 1);

If ($numbers = true || $symbols = true){
		array_push($pw, $ranNum, $ranSym);
	}elseif ($numbers != true || $symbols = true) {
		array_push($pw, $ranSym);
	}elseif ($numbers = true || $symbols != true) {
		array_push($pw, $ranNum);
	}else {
		$pw = $pw;	
	}


