<?php 

$path = "txt/";
$diret = dir($path);

while ($arquivo = $diret -> read()) {

	if ($arquivo == '.' || $arquivo == '..') {
		continue;
	}
	//echo $path . $arquivo . "<br>";
	$rows = file($path . $arquivo, FILE_TEXT || FILE_SKIP_EMPTY_LINES);
	echo "<br>\r\n" . 'arquivo: ' . $arquivo . "\r\n<br>";
	foreach ($rows as $lineNum => $row) {
		$row = utf8_encode($row);
		//echo $row . "<br><br>";
		$row = preg_replace('/( )+/', ' ', $row);   
		$row = explode(" ", $row);
		
		foreach ($row as $wordnum => $item) {
			$day = date("d");
			$month = date("m");
			$year = date("Y");
			$date = $day . "/" . $month . "/" . $year;

			if ($item >= $date == '##/##/####') {
				echo  "item:" . $item . "<br>";
			}
			
		}
		//echo $rows . "<br>";
		

		/*if ($lineNum > 14) {
			//echo $row . "<br>";
			$date = substr($row, 0, 11);
			echo $date . "data <br>";
			$time = substr($row, 11, 5);
			echo $time . "<br>";
		}*/
		
		
	}	
}

?>