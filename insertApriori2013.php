<?php

include "koneksi.php";

$sql = "SELECT produktivitas FROM `produktivitas` WHERE tahun=2013 ORDER BY Prov_Id";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)){
	$produktivitas[] = $row['produktivitas'];
	}

$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2013 ORDER BY Prov_Id";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)){
	$nilaiTT[] = $row['Nilai_TT'];
	}

$sql = "SELECT sum(produktivitas) FROM `produktivitas` WHERE tahun=2013";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$ratarataP = $row[0];
	$ratarataPr = $ratarataP/34;

$sql = "SELECT sum(Nilai_TT) FROM `nilai_tt` WHERE tahun=2013";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$ratarataNT = $row[0];
	$ratarataNTH = $ratarataNT/34;


$prov = 1;
$prov2 = 1;
$a = 0;
$b = 0;
while($prov<35){
	$hasilPR = $produktivitas[$a];
	if($hasilPR<$ratarataPr-2){
		$sql = "INSERT INTO apriori2013 VALUES ('$prov', 'Rendah', 'Kosong')";
		mysql_query($sql);
	}else if($hasilPR>$ratarataPr+2){
		$sql = "INSERT INTO apriori2013 VALUES ('$prov', 'Cukup', 'Kosong')";
		mysql_query($sql);
	}else{
		$sql = "INSERT INTO apriori2013 VALUES ('$prov', 'Tinggi', 'Kosong')";
		mysql_query($sql);
	}
	$a++;
	$prov++;
}

while($prov2<35){
	$hasilNT = $nilaiTT[$b];
	if($hasilNT<$ratarataNTH-75){
		$sql = "UPDATE apriori2013 SET Nilai_TT='Rendah' WHERE Prov_Id='$prov2'";
		mysql_query($sql);
	}else if($hasilNT>$ratarataNTH+75){
		$sql = "UPDATE apriori2013 SET Nilai_TT='Cukup' WHERE Prov_Id='$prov2'";
		mysql_query($sql);
	}else{
		$sql = "UPDATE apriori2013 SET Nilai_TT='Tinggi' WHERE Prov_Id='$prov2'";
		mysql_query($sql);
	}

	
	$b++;
	$prov2++;
}

?>