<?php





function cuppon($amt='')
{
	


$c1 = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9");
$C1 = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$c2 = rand(9,26);
$c3 = rand(5,26);
$c4 = rand(1,35);
$c5 = rand(5,35);
$c6 = rand(1,35);
$c7 = rand(6,35);
$c8 = rand(2,35);
$c9 = rand(8,35);



echo $C1[$c2]."".$C1[$c3]."".$c1[$c4]."".$c1[$c5]."".$c1[$c6]."".$c1[$c7]."".$c1[$c8]."".$c1[$c9];



}



?>