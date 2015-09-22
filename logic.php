<?php
/* define var and get form data */

// here is the length giving us how many words the user wants in the pw
if(isset($_POST['length'])){ 
	$length = $_POST['length'];
	//echo $length;
	}
	
//here the user has checked the box or not to add a number to the pw
if(isset($_POST['number'])){ 
	$number = $_POST['number'];
	} else {
	$number = "no";
		}

//here the user has checked the box to add a symbol to the pw
if(isset($_POST['symbol'])){ 
	$symbol = $_POST['symbol'];
	}else {
	$symbol = "no";
		}
//var_dump ($length). "<br />";
//var_dump ($number). "<br />";
//var_dump ($symbol). "<br />";


//setting these variables to GLOBAL helped solve some in/out of scope issues
GLOBAL $length;
GLOBAL $number;
GLOBAL $symbol;


//here are 20+ words as Susan suggested in class 
$words = array("pizza", "lasagna", "pasta", "pecorino", "gelato", "antipasto", "provolone", "biscotti", "chianti", "barolo", "florence", "rome", "bravo", "carpaccio", "genoa", "mozzarella", "vino", "barratta", "amaretto", "caponata", "sicily");
// again solving scope issues
GLOBAl $words;

// here are a list of symbols to add to pw
$someSym = array("!", "@", "#", "%", "&", "*", "(", ")", "+");
//again solving scope issues
GLOBAL $someSym;

//init var
$pw = '';

//here we loop the list of words ($words) to extract random words.  the number of words extracted shall be the value designated in $length
//with only 1 parameter just 1 value is returned.

for ($i=0; $i < $length; $i++) {
    $pw .= $words[array_rand($words)];
}
	// if required, add a random number between 1 and 9
	if( $number == 'Yes' ) {
		$pw .= rand(0,9);
	}
	
	//if required, add a random symbol from the list of symbols
	if( $symbol == 'Yes' ) {
		$pw .= $someSym[array_rand($someSym)];
	}

//echo $myarray[0]['email'];
//print_r(array_values($a));

//var_dump ($pw);
	
