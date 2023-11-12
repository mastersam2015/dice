<?
$al="abcde";
for($i=0;$i<=5;$i++){
$stul=$stul."".$al[rand(0, 4)]."*";
}


//echo $stul;




$plik2 = fopen('k2.txt','w');
fputs($plik2, $stul);
fclose($plik2);
//header('Location: server1.php');

$al="abcde";
for($i=0;$i<=5;$i++){
$stul2=$stul2."".$al[rand(0, 4)]."*";
}


//echo $stul;




$plik2 = fopen('k1.txt','w');
fputs($plik2, $stul2);
fclose($plik2);


?>
