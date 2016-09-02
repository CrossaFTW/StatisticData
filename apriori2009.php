<H1> Mining Apriori 2009 <H1>

<?php
include "koneksi.php";

//Rata Rata Produksi
$sql = "SELECT sum(produktivitas) FROM `produktivitas` WHERE tahun=2009";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$ratarataP = $row[0];
	$ratarataPr = $ratarataP/34;


//Rata Rata Nilai Tani
$sql = "SELECT sum(Nilai_TT) FROM `nilai_tt` WHERE tahun=2009";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$ratarataNT = $row[0];


//Produktivitas
$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Produktivitas='Tinggi'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$PTinggi = $row[0];


$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Produktivitas='Cukup'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$PCukup = $row[0];


$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Produktivitas='Rendah'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$PRendah = $row[0];


//Nilai_TT
$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT= 'Tinggi'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$TTinggi = $row[0];

$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT = 'Cukup'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$TCukup = $row[0];

$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT='Rendah'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$TRendah = $row[0];



if($PRendah>14){
	if($TRendah>14){
		$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT ='Rendah' && Produktivitas='Rendah'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$PTRendahRendah = $row[0];
	}else{
		$TRendah = 0;
	}

	if($TCukup>14){
		$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT ='Cukup' && Produktivitas='Rendah'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$PTRendahCukup = $row[0];
	}else{
		$TCukup = 0;
	}

	if($TTinggi>14){
		$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT ='Tinggi' && Produktivitas='Rendah'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$PTRendahTinggi = $row[0];
	}else{
		$TTinggi = 0;
	}

	$max = max($PTRendahRendah, $PTRendahCukup, $PTRendahTinggi);
	if($max == $PTRendahRendah){
		$PRHasil = "Rendah";
		?>
		<H3> Produktivitas Rendah Ketika Nilai Tukar Tani <H3> <input type="text" id="Rendah" value=" <?php echo $PRHasil; ?>" disabled> <br>
		<?php
	}else if($max == $PTRendahCukup){
		$PRHasil = "Cukup";
		?>
		<H3> Produktivitas Rendah Ketika Nilai Tukar Tani <H3> <input type="text" id="Rendah" value=" <?php echo $PRHasil; ?>" disabled> <br>
		<?php
	}else if($max == $PTRendahTinggi){
		$PRHasil = "Tinggi";
		?>
		<H3> Produktivitas Rendah Ketika Nilai Tukar Tani <H3> <input type="text" id="Rendah" value=" <?php echo $PRHasil; ?>" disabled> <br>
		<?php
	}

}else{
	$PRendah = 0;
	$PRHasil = "-";
}

if($PCukup>14){
	if($TRendah>14){
		$PTCukupRendah = $PCukup + $TRendah;
	}else{
		$TRendah = 0;
	}

	if($TCukup>14){
		$PTCukupCukup = $PCukup + $TCukup;
	}else{
		$TCukup = 0;
	}

	if($TTinggi>14){
		$PTCukupTinggi = $PCukup + $TTinggi;
	}else{
		$TTinggi = 0;
	}

	$max2 = max($PTCukupRendah, $PTCukupCukup, $PTCukupTinggi);
	if($max2 == $PTCukupRendah){
		$PCHasil = "Rendah";
		?>
		<H3> Produktivitas Cukup Ketika Nilai Tukar Tani <H3> <input type="text" id="Cukup" value="<?php echo $PCHasil; ?>" disabled> <br>
		<?php
	}else if($max2 ==$PTCukupCukup){
		$PCHasil = "Cukup";
		?>
		<H3> Produktivitas Cukup Ketika Nilai Tukar Tani <H3> <input type="text" id="Cukup" value="<?php echo $PCHasil; ?>" disabled> <br>
		<?php
	}else if($max2 == $PTCukupTinggi){
		$PCHasil = "Tinggi";
		?>
		<H3> Produktivitas Cukup Ketika Nilai Tukar Tani <H3> <input type="text" id="Cukup" value="<?php echo $PCHasil; ?>" disabled> <br>
		<?php
	}
}else{
	$PCukup = 0;
	$PCHasil = "-";
}

if($PTinggi>14){
	if($TRendah>14){
		$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT ='Rendah' && Produktivitas='Tinggi' ";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$PTTinggiRendah = $row[0];
	}else{
		$TRendah = 0;
		$PTTinggiRendah = 0;
	}

	if($TCukup>14){
		$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT ='Cukup' && Produktivitas='Tinggi' ";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$PTTinggiCukup = $row[0];
	}else{
		$TCukup = 0;
	}

	if($TTinggi>14){
		$sql = "SELECT COUNT( * ) FROM apriori2009 WHERE Nilai_TT ='Tinggi' && Produktivitas='Tinggi' ";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$PTTinggiTinggi = $row[0];
	}else{
		$TTinggi = 0;
	}

	$max3 = max($PTTinggiRendah, $PTTinggiCukup, $PTTinggiTinggi);
	if($max3 == $PTTinggiRendah){
		$PTHasil = "Rendah";
		?>
		<H3> Produktivitas Tinggi Ketika Nilai Tukar Tani <H3> <input type="text" id="Tinggi" value="<?php echo $PTHasil; ?>" disabled> <br>
		<?php
	}else if($max3 == $PTTinggiCukup){
		$PTHasil = "Cukup";
		?>
		<H3> Produktivitas Tinggi Ketika Nilai Tukar Tani <H3> <input type="text" id="Tinggi" value="<?php echo $PTHasil; ?>" disabled> <br>
		<?php
	}else if($max3 == $PTTinggiTinggi){
		$PTHasil = "Tinggi";
		?>
		<H3> Produktivitas Tinggi Ketika Nilai Tukar Tani <H3> <input type="text" id="Tinggi" value="<?php echo $PTHasil; ?>" disabled> <br>
		<?php
	}




}else{
	$PTinggi = 0;
	$PTHasil = "-";
}

?>



