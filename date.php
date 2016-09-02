<?php
include("koneksi.php");
/*$begin = new DateTime( '2012-08-01' );
$end = new DateTime( '2012-09-31' );
//$end = $end->modify( '+1 year' );

$interval = new DateInterval('P1M');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
    echo $date->format("Ymd") . "<br>";
}*/
/*$start = $month = strtotime('2009-02-01');
$end = strtotime('2011-01-01');
while($month < $end)
{
     echo date('F Y', $month), PHP_EOL;
     $month = strtotime("+1 month", $month);
}*/
//$tanggal='2012-08-01';
/*$bulan='2012-08-01'; 
$begin = new DateTime( $bulan );
$end = new DateTime( '2012-09-31' );
$interval = $begin->diff($end);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
echo "difference " . $interval->m . " months ";*/
/*for ($i = 1; $i <= 12; $i++) {
	$mons = array(1 => "Januari", 2 => "Februari", 3 => "Maret", 4 => "April", 5 => "Mei", 6 => "Juni", 7 => "Juli", 8 => "Agustus", 9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember");
	$month_name = $mons[$i];
	echo $month_name;
	if ($i==12){
		for ($j = 1; $j<=12; $j++){
			$month_name=$mons[$j];
			echo $month_name;
			if($j==2){
				break;
			}
		}
	}
}
/*for ($i = 0; $i < 100000; $i++)
{
        array_push($ta,$i);
}*/
/*$i=1;
if($i>=1){
	echo 'a';
}elseif($i==0){
		echo 'b';
}*/
	$prov=11;
	$bulan=1;
	$tahun=2014;
	$tahun2=2014;
	$tgl=01;
	$ft=0;
	$cari="jumlah";
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$alf=0;
	$mse=1000000;
	$sq1=0;
	$sq2=0;
	$sq3=0;
	$temp=0;
	$sum=array();
	$month=$tahun.'-'.$bulan.'-'.$tgl;
	$mons = array(1 => "Januari", 2 => "Februari", 3 => "Maret", 4 => "April", 5 => "Mei", 6 => "Juni", 7 => "Juli", 8 => "Agustus", 9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember");
	//$month='2012-08-01'; 
	$begin = new DateTime( $month );
	$end = new DateTime( '2014-10-31' );
	$interval = $begin->diff($end);
	echo "difference " . $interval->y . " years, " . $interval->m . " months ";
	$akhir = $interval->m+$bulan;
	for ($j = $bulan; $j <= $akhir; $j++) {
		$month_name = $mons[$j];
		$query= "SELECT $cari FROM ditemukan_bulan_ini WHERE bulan='$month_name' AND tahun='$tahun' AND kode_prov = '$prov'";
		$hasil = mysql_query($query) or trigger_error(mysql_error().$hasil);
				//$row = mysql_num_rows($hasil);
			if(mysql_num_rows($hasil) > 0){
				while($result = mysql_fetch_object($hasil)){
				//adding data to the array
				$a[] = $result->$cari;
				}
			}
				/*for($count == 0;$row = mysql_fetch_assoc($hasil);$count++){
					foreach($row as $key => $value){ 
						$a[$count]{$key} = $row[$key];
					}
				}*/
				/*for($x = 0; $x < $arrlength; $x++) {
					echo $a[$x].'<br>';
					/*if($x=1){
						$ft=$a[$x]+(0.5*($a[$x]-$a[$x]));
						echo $ft;*/
					//}
			if ($j==12){
				$tahun2++;
				for($y=1; $y<=$akhir; $y++){
					$month_name = $mons[$y];
					$query= "SELECT $cari FROM ditemukan_bulan_ini WHERE bulan='$month_name' AND tahun='$tahun2' AND kode_prov = '$prov'";
					$hasil = mysql_query($query) or trigger_error(mysql_error().$hasil);
						//$row = mysql_num_rows($hasil);
					if(mysql_num_rows($hasil) > 0){
						while($result = mysql_fetch_object($hasil)){
							//adding data to the array
							//echo '<br>'.$month_name.' '.$data['jumlah'];
						$a[] = $result->$cari;
						}
					}
						/*for($count == 0;$row = mysql_fetch_assoc($hasil);$count++){
							foreach($row as $key => $value){ 
								$a[$count]{$key} = $row[$key];
							}
						}*/
					if($j==$akhir){
						break;
					}
				}
			}
		}
				$arrlength3 = count($alfa); // ngitung jumlah alfa
				for($arr=0; $arr<$arrlength3; $arr++){ // loop
				//echo $alfa[$arr].'<br>';
				$arrlength = count($a); //ngitung jumlah data asli
				//echo $a[$x].'<br>';
				$rs1=$a[0]-$a[0]; // iki sing pasti 0
				$rs2=$rs1*$alfa[$arr]; //
				$rs3=$rs2+$a[0]; // iki wis oleh forcast
				array_push($b,$rs3); // iki hasil e mlebu nang $b
				
				
				//echo $rs3;
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
					}
					
					$temp=0;
					$sum=array();
					$b=array();
				}

				echo '<br>'.$mse;
				echo '<br>'.$alf;
				/*$arrlength = count($a);
				//echo $a[$x].'<br>';
				$rs1=$a[0]-$a[0];
				$rs2=$rs1*0.5;
				$rs3=$rs2+$a[0];
				//echo $rs3;
				for($x=1; $x<$arrlength; $x++){
					$rs1=$a[$x-1]-$rs3;
					$rs2=$rs1*0.5;
					$rs3=$rs2+$rs3;
					array_push($b,$rs3); 
				}*/
				$arrlength99 = count($a);
				for ($f=0; $f<$arrlength99; $f++){
					echo '<br> data '.$a[$f];
				}
?>