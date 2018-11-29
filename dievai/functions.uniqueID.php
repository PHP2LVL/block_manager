
<?php
//Funkcija sukuria unikalu bloku id
	function unikalusId(){
		return  md5(uniqid(rand(0, 1000000), true));
		
	}

?>

