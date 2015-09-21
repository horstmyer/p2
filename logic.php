<?php
/* define    var and get form data */

if (isset($_POST['length']) && $_POST['length'] > 0) {
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

//var_dump($length)."<br>";
//var_dump($numbers)."<br>";
//var_dump($symbols)."<br>";

//var_dump($words);
$pw = array();

$words = array("pizza", "lasagna", "pasta", "pecorino", "gelato");
$ranWords = array_rand($words, 4);
foreach ($ranWords as $key => $value) {
    //echo "$key - <strong>" . $words[$value] . "</strong><br />";
	}

//echo $words[$ranWords];


//var_dump($ranWords)."<br>";

switch ($length) {
	case 2:
		array_push($pw, $words[rand(0,1)]);
		break;
	case 3:
		array_push($pw, $words[rand(0,2)]);
		break;
	case 4:
		array_push($pw, $words[rand(0,3)]);
		break;
	default:
		print($pw);
}
//var_dump($pw)."<br>";


/* generate some random numbers and symbols */
$ranNum = mt_rand(1,9);

$someSym = array("!", "@", "#", "%", "&");
$ranSym = array_rand($someSym);
//echo $someSym[$ranSym];


//var_dump($ranNum)."<br>";
//var_dump($ranSym)."<br>";
//print_r($ranSym)."<br>";

If ($numbers = true && $symbols = true){
	
		array_push($pw, $ranNum, $ranSym);
		
	}elseif ($numbers != true && $symbols = true) {
		
		array_push($pw, $ranSym);
		
	}elseif ($numbers = true && $symbols != true) {
		
		array_push($pw, $ranNum);
		
	}else {
		
		$pw = implode('|', $pw);
	}
var_dump($pw)."<br>";
?>
