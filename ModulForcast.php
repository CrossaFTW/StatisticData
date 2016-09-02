<?php
//Forcasting
	$arrlength3 = count($alfa);
		for($arr=0; $arr<$arrlength3; $arr++){
			$arrlength = count($a);
			$rs1=$a[0]-$a[0];
			$rs2=$rs1*$alfa[$arr];
			$rs3=$rs2+$a[0];
			array_push($b,$rs3);
		for($x=1; $x<$arrlength; $x++){ //iki lanjutane pok
			$rs1=$a[$x-1]-$rs3;
			$rs2=$rs1*$alfa[$arr];
			$rs3=$rs2+$rs3;
			array_push($b,$rs3); 
			}
	$arrlength2 = count($b); //mulai ngitung MSE
		for ($c=1; $c<$arrlength2; $c++){
			$sq= $a[$c]-$b[$c];
			$sq2= $a[$c]-$b[$c];
			$sq3= $sq*$sq2; // iki sampek squared error bro
			array_push($sum,$sq3);
			//echo '<br>'.$b[$c];
			//echo '<br>'.$a[$c];
			//echo '<br>'.$sq3;
			}			
	$arrlength4= count($sum); // njumlahno kabeh MSE
		for($d=0; $d<$arrlength4; $d++){
			$sq=$sum[$d];
			$temp=$sq+$temp; //iki hasil
			/*echo '<br>'.$sum[$d];
			echo '<br>'.$temp;*/
			}		
		if($temp<$mse){ // nggolek sing paling cilik
			$mse=$temp;
			$alf=$alfa[$arr];
			$asd = $b;
		}										
			$temp=0;
			$sum=array();
			$b=array();
		}
?>