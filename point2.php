<?

	$plik2 = fopen('point2.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2=$shoot2+1;
fclose($plik2);

$plik2 = fopen('point2.txt','w');
fputs($plik2, $shoot2);
fclose($plik2);


?>