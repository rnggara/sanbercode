<?php
echo "<h1>Soal besar kecil</h1>";
function tukar_besar_kecil($string){
//kode di sini A=65 Z=90 a=97 z=122
	$split = str_split($string);
	$new_string = "";
	for ($i=0; $i < count($split); $i++) { 
		$ascii = ord($split[$i]);
		if ($ascii >= 65 && $ascii <= 90) {
			$new_string .= strtolower(chr($ascii));
		} else {
			$new_string .= strtoupper(chr($ascii));
		}
	}

	echo "$new_string";
	echo "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>