<?

	
	$plik2 = fopen('point2.txt','r');
$shoot2=fgets($plik2, 10000);
//$shoot2=$shoot2."b".$zapis;

echo $shoot2;


fclose($plik2);



?>