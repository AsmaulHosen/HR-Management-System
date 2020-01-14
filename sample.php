<?php
    
	//echo uniqid();
	//$md5c = md5($c); echo $md5c;
	//$c = uniqid (rand (),true); echo $c; echo "<br>";
	//$b = uniqid (about, true); Echo $b; echo "<br>";
	//$a = uniqid(employee); echo $a; echo "<br>";
	
	
	function generateRandomString()  {
		$characters = '0123456789';
		$length = 4;
		$charactersLength = strlen($characters);
		$randomString = 'EMP';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
    //echo generateRandomString();
	
	
?>
