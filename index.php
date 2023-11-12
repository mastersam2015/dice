<meta name="viewport" content="width=device-width">
<script type="text/javascript" src="jquery.js"></script>
<style>

img {width:70px;margin-left:0;margin-right:0;}

body{font-family:Arial;}
body{
color:ffffff;
background: url(tlo.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

span{background-color:000000;}
</style>


<center><b><span>player1</span><br>
<?


	$plik2 = fopen('k2.txt','r');
$t1=fgets($plik2, 10000);

fclose($plik2);


$tab=explode("*",$t1);

if ($tab[0]=="a"){echo "<img src='k1.png'> ";}
if ($tab[0]=="b"){echo "<img src='k2.png'> ";}
if ($tab[0]=="c"){echo "<img src='k3.png'> ";}
if ($tab[0]=="d"){echo "<img src='k4.png'> ";}
if ($tab[0]=="e"){echo "<img src='k5.png'> ";}


if ($tab[1]=="a"){echo "<img src='k1.png'> ";}
if ($tab[1]=="b"){echo "<img src='k2.png'> ";}
if ($tab[1]=="c"){echo "<img src='k3.png'> ";}
if ($tab[1]=="d"){echo "<img src='k4.png'> ";}
if ($tab[1]=="e"){echo "<img src='k5.png'> ";}


if ($tab[2]=="a"){echo "<img src='k1.png'> ";}
if ($tab[2]=="b"){echo "<img src='k2.png'> ";}
if ($tab[2]=="c"){echo "<img src='k3.png'> ";}
if ($tab[2]=="d"){echo "<img src='k4.png'> ";}
if ($tab[2]=="e"){echo "<img src='k5.png'> ";}


if ($tab[3]=="a"){echo "<img src='k1.png'> ";}
if ($tab[3]=="b"){echo "<img src='k2.png'> ";}
if ($tab[3]=="c"){echo "<img src='k3.png'> ";}
if ($tab[3]=="d"){echo "<img src='k4.png'> ";}
if ($tab[3]=="e"){echo "<img src='k5.png'> ";}



if ($tab[4]=="a"){echo "<img src='k1.png'> ";}
if ($tab[4]=="b"){echo "<img src='k2.png'> ";}
if ($tab[4]=="c"){echo "<img src='k3.png'> ";}
if ($tab[4]=="d"){echo "<img src='k4.png'> ";}
if ($tab[4]=="e"){echo "<img src='k5.png'> ";}
?>
<script>
var p2;
var pom2;

var point1;
var point2;
var petla=0;

//-------------------------------tury


function ready(){

$('#yready').val('ready');
$.get("ready1.php", { 'key' : '1' },  function(data) {

});



}


function odswierzanie(){

$.get("ready2.php", {  },  function(data) {
if(data=="666"){
$('#licz').val('1');
$('#eready').val('ready');
}
});



}


function liczz(){
if($('#yready').val()=='ready'){
if ($('#licz').val()==1){
petla++;

}
if(petla==3){
location.href ='index.php';
}
}
}
window.setInterval('liczz();',1000);
window.setInterval('odswierzanie();',1000);



function licz(){
	
	
		
$.get("los.php", {   },  function(data) {

});

	
	
	ready();
	//szoty=x;
	
}


//--------------------------------
function points(){
	
	$.get("ppoint1.php", {   },  function(data) {
$('#pl1').html(data);
});


	$.get("ppoint2.php", {   },  function(data) {
		
		$('#pl2').html(data);

});
	
	
}

window.setInterval('points();',1000);

<?
	$plik2 = fopen('k2.txt','r');
$t1=fgets($plik2, 10000);

fclose($plik2);



$tab=explode("*",$t1);

//var_dump($tab);
echo "var o1='".$tab[0]."';";
echo "var o2='".$tab[1]."';";
echo "var o3='".$tab[2]."';";
echo "var o4='".$tab[3]."';";
echo "var o5='".$tab[4]."';";


?>

pom2=o1+" "+o2+" "+o3+" "+o4+" "+o5;

function player2(){
var sets;
var jeden=0;
var dwa=0;
var trzy=0;
var cztery=0;
var piec=0;
var set=0;
var nazwa2;



sets=o1+o2+o3+o4+o5;
			for(i=0;i<5;i++){
			if(sets[i]=="a"){
			jeden=jeden+1;
			}
			if(sets[i]=="b"){
			dwa=dwa+1;
			}
			if(sets[i]=="c"){
			trzy=trzy+1;
			}
			if(sets[i]=="d"){
			cztery=cztery+1;
			}
			if(sets[i]=="e"){
			piec=piec+1;
			}
		
			}
			
			
			
			//alert(sets);
			
			
			
			//parka
			if(jeden==2){set="1";nazwa2="parka";}
			if(dwa==2){set="2";nazwa2="parka";}
			if(trzy==2){set="3";nazwa2="parka";}
			if(cztery==2){set="4";nazwa2="parka";}
			if(piec==2){set="5";nazwa2="parka";}
			
			
			
			//dwie parki
if(jeden==2&&dwa==2){set="7";nazwa2="dwie parki";}
			if(cztery==2&&jeden==2){set="9";nazwa2="dwie parki";}
			if(piec==2&&jeden==2){set="10";nazwa2="dwie parki";}
			if(trzy==2&&jeden==2){set="8";nazwa2="dwie parki";}
			//if(as==2&&dziewiec==2){set="11";nazwa2="dwie parki";}
			if(dwa==2&&trzy==2){set="12";nazwa2="dwie parki";}
			if(dwa==2&&cztery==2){set="13";nazwa2="dwie parki";}
			if(dwa==2&&piec==2){set="14";nazwa2="dwie parki";}
			//if(dziesiec==2&&as==2){set="15";nazwa2="dwie parki";}
			if(trzy==2&&cztery==2){set="16";nazwa2="dwie parki";}
			if(trzy==2&&piec==2){set="17";nazwa2="dwie parki";}
			//if(trz==2&&as==2){set="18";nazwa2="dwie parki";}
			if(cztery==2&&piec==2){set="19";nazwa2="dwie parki";}
			//if(cztery==2&&as==2){set="20";nazwa2="dwie parki";}
			//if(krol==2&&as==2){set="21";nazwa2="dwie parki";}
			
			
			//strit 
			
				if(jeden==1&&dwa==1&&trzy==1&&cztery==1&&piec==1){set="22";nazwa2="strit";}
			
			
			
			//trojka
			
			if(jeden==3){set="24";nazwa2="trojka";}
			if(dwa==3){set="25";nazwa2="trojka";}
			if(trzy==3){set="26";nazwa2="trojka";}
			if(cztery==3){set="27";nazwa2="trojka";}
			if(piec==3){set="28";nazwa2="trojka";}
			//if(as==3){set="29";nazwa2="trojka";}
			
			
			
			//full
			if((piec==3)&&(cztery==2)){set="47";nazwa2="full";}
			if((piec==2)&&(cztery==3)){set="52";nazwa2="full";}
			//if((as==3)&&(krol==2)){set="60";nazwa2="full";}
			//if((as==2)&&(krol==3)){set="58";nazwa2="full";}
			//if((as==3)&&(dama==2)){set="48";nazwa2="full";}
			//if((cztery==3)&&(as==2)){set="57";nazwa2="full";}
			//if((jopek==3)&&(as==2)){set="56";nazwa2="full";}
			//if((jopek==2)&&(as==3)){set="6";nazwa2="full";}
			if((trzy==3)&&(piec==2)){set="51";nazwa2="full";}
			if((piec==3)&&(trzy==2)){set="43";nazwa2="full";}
			//if((as==3)&&(jopek==2)){set="44";nazwa2="full";}
			if((trzy==3)&&(cztery==2)){set="47";nazwa2="full";}
			if((cztery==3)&&(trzy==2)){set="42";nazwa2="full";}
			//if((dwa==3)&&(as==2)){set="55";nazwa2="full";}
			//if((as==3)&&(dziesiec==2)){set="39";nazwa2="full";}
			//if((dziewiec==3)&&(as==2)){set="54";nazwa2="full";}
			if((piec==3)&&(dwa==2)){set="38";nazwa2="full";}
			if((dwa==3)&&(cztery==2)){set="46";nazwa2="full";}
			if((cztery==3)&&(dwa==2)){set="37";nazwa2="full";}
			if((dwa==3)&&(trzy==2)){set="41";nazwa2="full";}
			if((trzy==3)&&(dwa==2)){set="36";nazwa2="full";}
			if((piec==3)&&(jeden==2)){set="33";nazwa2="full";}
			if((jeden==3)&&(piec==2)){set="49";nazwa2="full";}
			if((dwa==3)&&(piec==2)){set="50";nazwa2="full";}
			if((jeden==3)&&(cztery==2)){set="45";nazwa2="full";}
			if((cztery==3)&&(jeden==2)){set="32";nazwa2="full";}
			if((jeden==3)&&(trzy==2)){set="40";nazwa2="full";}
			if((trzy==3)&&(jeden==2)){set="31";nazwa2="full";}
			if((jeden==3)&&(dwa==2)){set="35";nazwa2="full";}
			if((dwa==3)&&(jeden==2)){set="30";nazwa2="full";}
			//if((as==3)&&(dziewiec==2)){set="34";nazwa2="full";}
			
			
		//kareta
				if(jeden==4){set="61";nazwa2="kareta";}
			if(dwa==4){set="62";nazwa2="kareta";}
			if(trzy==4){set="63";nazwa2="kareta";}
			if(cztery==4){set="64";nazwa2="kareta";}
			if(piec==4){set="65";nazwa2="kareta";}
			
			
			//general
				if(jeden==5){set="66";nazwa2="general";}
			if(dwa==5){set="67";nazwa2="general";}
			if(trzy==5){set="68";nazwa2="general";}
			if(cztery==5){set="69";nazwa2="general";}
			if(piec==5){set="70";nazwa2="general";}
			
			
				
p2=nazwa2;
point2=parseInt(set);
}
player2();
</script>


<div id="pom" style="display:none;"></div>
<div id="pom6" style="display:none;"></div><br><br>
<span id="wynik"></span> <span>vs</span> <span id="wynik2"></span><br><br><br>

<span id="szala"></span>


<br><br><br>





<span>player1</span> <span id="pl1"></span> : <span id="pl2"></span> <span>player2</span>

<br><br><br>
<span>you ready</span><input type="text" id="yready" value=""><br>
<span>enemy ready</span><input type="text" id="eready" value=""><br>
<input type="button" value="ready" onclick="licz()">
<input type="hidden" id="licz">
<br><br><br>

<script>
<?


	$plik2 = fopen('k1.txt','r');
$t1=fgets($plik2, 10000);

fclose($plik2);


$tab=explode("*",$t1);

//var_dump($tab);
echo "var k1='".$tab[0]."';";
echo "var k2='".$tab[1]."';";
echo "var k3='".$tab[2]."';";
echo "var k4='".$tab[3]."';";
echo "var k5='".$tab[4]."';";


?>

$('#pom').html(k1+' '+k2+' '+k3+' '+k4+' '+k5);

function player1(){
var sets;
var jeden=0;
var dwa=0;
var trzy=0;
var cztery=0;
var piec=0;
var set=0;
var nazwa2;



sets=k1+k2+k3+k4+k5;
			for(i=0;i<5;i++){
			if(sets[i]=="a"){
			jeden=jeden+1;
			}
			if(sets[i]=="b"){
			dwa=dwa+1;
			}
			if(sets[i]=="c"){
			trzy=trzy+1;
			}
			if(sets[i]=="d"){
			cztery=cztery+1;
			}
			if(sets[i]=="e"){
			piec=piec+1;
			}
		
			}
			
			
			
			//alert(sets);
			
			
			
			//parka
			if(jeden==2){set="1";nazwa2="parka";}
			if(dwa==2){set="2";nazwa2="parka";}
			if(trzy==2){set="3";nazwa2="parka";}
			if(cztery==2){set="4";nazwa2="parka";}
			if(piec==2){set="5";nazwa2="parka";}
			
			
			
			//dwie parki
if(jeden==2&&dwa==2){set="7";nazwa2="dwie parki";}
			if(cztery==2&&jeden==2){set="9";nazwa2="dwie parki";}
			if(piec==2&&jeden==2){set="10";nazwa2="dwie parki";}
			if(trzy==2&&jeden==2){set="8";nazwa2="dwie parki";}
			//if(as==2&&dziewiec==2){set="11";nazwa2="dwie parki";}
			if(dwa==2&&trzy==2){set="12";nazwa2="dwie parki";}
			if(dwa==2&&cztery==2){set="13";nazwa2="dwie parki";}
			if(dwa==2&&piec==2){set="14";nazwa2="dwie parki";}
			//if(dziesiec==2&&as==2){set="15";nazwa2="dwie parki";}
			if(trzy==2&&cztery==2){set="16";nazwa2="dwie parki";}
			if(trzy==2&&piec==2){set="17";nazwa2="dwie parki";}
			//if(trz==2&&as==2){set="18";nazwa2="dwie parki";}
			if(cztery==2&&piec==2){set="19";nazwa2="dwie parki";}
			//if(cztery==2&&as==2){set="20";nazwa2="dwie parki";}
			//if(krol==2&&as==2){set="21";nazwa2="dwie parki";}
			
			
			//strit 
			
				if(jeden==1&&dwa==1&&trzy==1&&cztery==1&&piec==1){set="22";nazwa2="strit";}
			
			
			
			//trojka
			
			if(jeden==3){set="24";nazwa2="trojka";}
			if(dwa==3){set="25";nazwa2="trojka";}
			if(trzy==3){set="26";nazwa2="trojka";}
			if(cztery==3){set="27";nazwa2="trojka";}
			if(piec==3){set="28";nazwa2="trojka";}
			//if(as==3){set="29";nazwa2="trojka";}
			
			
			
			//full
			if((piec==3)&&(cztery==2)){set="47";nazwa2="full";}
			if((piec==2)&&(cztery==3)){set="52";nazwa2="full";}
			//if((as==3)&&(krol==2)){set="60";nazwa2="full";}
			//if((as==2)&&(krol==3)){set="58";nazwa2="full";}
			//if((as==3)&&(dama==2)){set="48";nazwa2="full";}
			//if((cztery==3)&&(as==2)){set="57";nazwa2="full";}
			//if((jopek==3)&&(as==2)){set="56";nazwa2="full";}
			//if((jopek==2)&&(as==3)){set="6";nazwa2="full";}
			if((trzy==3)&&(piec==2)){set="51";nazwa2="full";}
			if((piec==3)&&(trzy==2)){set="43";nazwa2="full";}
			//if((as==3)&&(jopek==2)){set="44";nazwa2="full";}
			if((trzy==3)&&(cztery==2)){set="47";nazwa2="full";}
			if((cztery==3)&&(trzy==2)){set="42";nazwa2="full";}
			//if((dwa==3)&&(as==2)){set="55";nazwa2="full";}
			//if((as==3)&&(dziesiec==2)){set="39";nazwa2="full";}
			//if((dziewiec==3)&&(as==2)){set="54";nazwa2="full";}
			if((piec==3)&&(dwa==2)){set="38";nazwa2="full";}
			if((dwa==3)&&(cztery==2)){set="46";nazwa2="full";}
			if((cztery==3)&&(dwa==2)){set="37";nazwa2="full";}
			if((dwa==3)&&(trzy==2)){set="41";nazwa2="full";}
			if((trzy==3)&&(dwa==2)){set="36";nazwa2="full";}
			if((piec==3)&&(jeden==2)){set="33";nazwa2="full";}
			if((jeden==3)&&(piec==2)){set="49";nazwa2="full";}
			if((dwa==3)&&(piec==2)){set="50";nazwa2="full";}
			if((jeden==3)&&(cztery==2)){set="45";nazwa2="full";}
			if((cztery==3)&&(jeden==2)){set="32";nazwa2="full";}
			if((jeden==3)&&(trzy==2)){set="40";nazwa2="full";}
			if((trzy==3)&&(jeden==2)){set="31";nazwa2="full";}
			if((jeden==3)&&(dwa==2)){set="35";nazwa2="full";}
			if((dwa==3)&&(jeden==2)){set="30";nazwa2="full";}
			//if((as==3)&&(dziewiec==2)){set="34";nazwa2="full";}
			
			
			//kareta
				if(jeden==4){set="61";nazwa2="kareta";}
			if(dwa==4){set="62";nazwa2="kareta";}
			if(trzy==4){set="63";nazwa2="kareta";}
			if(cztery==4){set="64";nazwa2="kareta";}
			if(piec==4){set="65";nazwa2="kareta";}
			
			
			//general
				if(jeden==5){set="66";nazwa2="general";}
			if(dwa==5){set="67";nazwa2="general";}
			if(trzy==5){set="68";nazwa2="general";}
			if(cztery==5){set="69";nazwa2="general";}
			if(piec==5){set="70";nazwa2="general";}
			
	point1=parseInt(set);		
				
$("#wynik").html(nazwa2);
}

player1();

$("#wynik2").html(p2);

$("#pom6").html(pom2);


if(point1>point2){
	
	$("#szala").html("wygrana");
	
	$.get("point1.php", { },  function(data) {

});
	
	
}

if(point1<point2){
	
	$("#szala").html("przegrana");
	
	
}


if(point1==point2){
	
	$("#szala").html("remis");
	
	
}










</script>

<?

//------------------------------------------------rysowanie

	$plik2 = fopen('k1.txt','r');
$t1=fgets($plik2, 10000);

fclose($plik2);


$tab=explode("*",$t1);

if ($tab[0]=="a"){echo "<img src='k1.png'> ";}
if ($tab[0]=="b"){echo "<img src='k2.png'> ";}
if ($tab[0]=="c"){echo "<img src='k3.png'> ";}
if ($tab[0]=="d"){echo "<img src='k4.png'> ";}
if ($tab[0]=="e"){echo "<img src='k5.png'> ";}


if ($tab[1]=="a"){echo "<img src='k1.png'> ";}
if ($tab[1]=="b"){echo "<img src='k2.png'> ";}
if ($tab[1]=="c"){echo "<img src='k3.png'> ";}
if ($tab[1]=="d"){echo "<img src='k4.png'> ";}
if ($tab[1]=="e"){echo "<img src='k5.png'> ";}


if ($tab[2]=="a"){echo "<img src='k1.png'> ";}
if ($tab[2]=="b"){echo "<img src='k2.png'> ";}
if ($tab[2]=="c"){echo "<img src='k3.png'> ";}
if ($tab[2]=="d"){echo "<img src='k4.png'> ";}
if ($tab[2]=="e"){echo "<img src='k5.png'> ";}


if ($tab[3]=="a"){echo "<img src='k1.png'> ";}
if ($tab[3]=="b"){echo "<img src='k2.png'> ";}
if ($tab[3]=="c"){echo "<img src='k3.png'> ";}
if ($tab[3]=="d"){echo "<img src='k4.png'> ";}
if ($tab[3]=="e"){echo "<img src='k5.png'> ";}



if ($tab[4]=="a"){echo "<img src='k1.png'> ";}
if ($tab[4]=="b"){echo "<img src='k2.png'> ";}
if ($tab[4]=="c"){echo "<img src='k3.png'> ";}
if ($tab[4]=="d"){echo "<img src='k4.png'> ";}
if ($tab[4]=="e"){echo "<img src='k5.png'> ";}

//--------------------------------------------------------losowanie






?>
<script>

$.get("ready1.php", { 'key' : '777' },  function(data) {
});
$.get("ready2.php", { 'key' : '777' },  function(data) {
});

</script>
