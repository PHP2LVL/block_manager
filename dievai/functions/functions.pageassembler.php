<?php

//Funkcija sukuria unikalu bloku id
	function unikalusId(){
		return  md5(uniqid(rand(0, 1000000), true));
		
	}

	function pageAssemblerDBexist($dbName){
		global $mysql_num, $prisijungimas_prie_mysql, $conf;

		$request = "SELECT * FROM `" . LENTELES_PRIESAGA . $dbName . "` GROUP BY `id` ORDER BY `id` DESC";
		$sql = mysqli_query($prisijungimas_prie_mysql, $request ); 

		$result = false;
		if ($sql){
			$result = true;
		} else {
			switch ($dbName) {
				case 'pa_data':
					$sql1 = "CREATE TABLE `" . LENTELES_PRIESAGA . "pa_data` (
						id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
						parent_id INT(9),
						order_id INT(9),
						type TEXT,
						lang TEXT,
						content TEXT,
						page_id INT(9),
						style text
						) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;";
					break;
				case 'pa_page_settings':
					$sql1 = "CREATE TABLE `" . LENTELES_PRIESAGA . "pa_page_settings` (
						id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
						page_id INT(9),
						title TEXT,
						lang TEXT,
						meta_title TEXT,
						meta_desc TEXT,
						meta_keywords TEXT,
						friendly_url TEXT,
						status_id INT(2)
						) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;";
					break;
			}
			$result = mysqli_query( $prisijungimas_prie_mysql, $sql1 ); 
			$result = (1 == $result) ? true : false;
		}
		return $result;
	}



?>

