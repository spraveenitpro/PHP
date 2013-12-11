<?php 




$file_handle = fopen("Mistral_tobe_Decoded.csv", "r");
$file_write = fopen("wordpress_export.csv", "w");

while (!feof($file_handle) ) {

	$line_of_text = fgetcsv($file_handle, 1024,",");

	print $line_of_text[0] .str_repeat("&nbsp;", 10) .base64_decode($line_of_text[1]) ."<BR>";

	fwrite($file_write, $line_of_text[0] .",".base64_decode($line_of_text[1]) .PHP_EOL);

}

fclose($file_handle);
fclose($file_write);


?>