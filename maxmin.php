<?php 

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
		
		$row = preg_replace('/( )+/', ' ', $row);   
		$row = explode(" ", $row);
		//echo $row[0] . "<br><br>";
		
		//foreach ($row as $wordnum => $item) {
			$day = date("d");
			$month = date("m");
			$year = date("Y");
			$dat = $day . $month . $year;
			//$date = explode("/", strtotime($row[0]));
			

			if ($row[0] >= $dat){
				echo "item:" . $row[0] . "<br>";
				//echo $date . "<br>";
			}
			
		//}
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
