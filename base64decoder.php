<?php 




$file_handle = fopen("tobe_Decoded.csv", "r");
$file_write = fopen("export.csv", "w");

while (!feof($file_handle) ) {

	$line_of_text = fgetcsv($file_handle, 1024,",");

	print $line_of_text[0] .",".base64_decode($line_of_text[1]).",".$line_of_text[2].",".$line_of_text[3].",".$line_of_text[4].",".$line_of_text[5].",".$line_of_text[6].",".$line_of_text[7].",".$line_of_text[8].",".$line_of_text[9].",".$line_of_text[10].",".$line_of_text[11].",".$line_of_text[12].",".$line_of_text[13].",".$line_of_text[14].",".$line_of_text[15].",".$line_of_text[16]."<BR>";

	fwrite($file_write, $line_of_text[0] .",".base64_decode($line_of_text[1]).",".$line_of_text[2].",".$line_of_text[3].",".$line_of_text[4].",".$line_of_text[5].",".$line_of_text[6].",".$line_of_text[7].",".$line_of_text[8].",".$line_of_text[9].",".$line_of_text[10].",".$line_of_text[11].",".$line_of_text[12].",".$line_of_text[13].",".$line_of_text[14].",".$line_of_text[15].",".$line_of_text[16] .PHP_EOL);

}

fclose($file_handle);
fclose($file_write);


?>
