<?php
include "koneksi.php";

//Rata Rata Produksi
$sql = "SELECT sum(produktivitas) FROM `produktivitas` WHERE tahun=2012";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$ratarataP = $row[0];
	$ratarataPr = $ratarataP/34;

//Rata Rata Nilai Tani
$sql = "SELECT sum(Nilai_TT) FROM `nilai_tt` WHERE tahun=2012";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
	$ratarataNT = $row[0];


//Tingkat Produksi Tiap Provinsi
$PRendah = 0;
$Pcukup = 0;
$PTinggi = 0;

		//Aceh
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P1 = $row[0];
		if($P1<$ratarataNT-2){
			$PRendah++;
		}else if($P1>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}

		//Sumatera Utara
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 2";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P2 = $row[0];
		if($P2<$ratarataNT-2){
			$PRendah++;
		}else if($P2>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}

		//Sumatera Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 3";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P3 = $row[0];
		if($P3<$ratarataNT-2){
			$PRendah++;
		}else if($P3>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Riau

$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 4";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P4 = $row[0];
		if($P4<$ratarataNT-2){
			$PRendah++;
		}else if($P4>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}

		//Jambi
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 5";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P5 = $row[0];
		if($P5<$ratarataNT-2){
			$PRendah++;
		}else if($P5>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Sumatera Selatan
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 6";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P6 = $row[0];
		if($P6<$ratarataNT-2){
			$PRendah++;
		}else if($P6>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Bengkulu
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 7";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P7 = $row[0];
		if($P7<$ratarataNT-2){
			$PRendah++;
		}else if($P7>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Lampung
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 8";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P8 = $row[0];
		if($P8<$ratarataNT-2){
			$PRendah++;
		}else if($P8>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Kepulauan Bangka Belitung
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 9";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P9 = $row[0];
		if($P9<$ratarataNT-2){
			$PRendah++;
		}else if($P9>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Kepulauan Riau
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 10";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P10 = $row[0];
		if($P10<$ratarataNT-2){
			$PRendah++;
		}else if($P10>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//DKI Jakarta
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 11";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P11 = $row[0];
		if($P11<$ratarataNT-2){
			$PRendah++;
		}else if($P11>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Jawa Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 12";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P12 = $row[0];
		if($P12<$ratarataNT-2){
			$PRendah++;
		}else if($P12>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Jawa Tengah
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 13";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P13 = $row[0];
		if($P13<$ratarataNT-2){
			$PRendah++;
		}else if($P13>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Jawa TImur
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 14";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P14 = $row[0];
		if($P14<$ratarataNT-2){
			$PRendah++;
		}else if($P14>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Banten
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 15";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P15 = $row[0];
		if($P15<$ratarataNT-2){
			$PRendah++;
		}else if($P15>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Bali
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 16";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P16 = $row[0];
		if($P16<$ratarataNT-2){
			$PRendah++;
		}else if($P16>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Nusa Tenggara Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 17";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P17 = $row[0];
		if($P17<$ratarataNT-2){
			$PRendah++;
		}else if($P17>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}


		//Nusa Tenggara Timur
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 18";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P18 = $row[0];
		if($P18<$ratarataNT-2){
			$PRendah++;
		}else if($P18>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Kalbar
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 19";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P19 = $row[0];
		if($P19<$ratarataNT-2){
			$PRendah++;
		}else if($P19>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Kalteng
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 20";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P20 = $row[0];
		if($P20<$ratarataNT-2){
			$PRendah++;
		}else if($P20>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Kalsel
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 21";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P21 = $row[0];
		if($P21<$ratarataNT-2){
			$PRendah++;
		}else if($P21>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Kaltim
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 22";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P22 = $row[0];
		if($P22<$ratarataNT-2){
			$PRendah++;
		}else if($P22>$ratarataNT+2){
			$Pcukup++;
		}else{
			$PTinggi++;
		}
		//Kalut
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 23";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P23 = $row[0];
		if($P23<$ratarataNT-2){
$PRendah++;		}else if($P23>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Sulut
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 24";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P24 = $row[0];
		if($P24<$ratarataNT-2){
$PRendah++;		}else if($P24>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Sultengah
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 25";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P25 = $row[0];
		if($P25<$ratarataNT-2){
$PRendah++;		}else if($P25>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Sulsel
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 26";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P26 = $row[0];
		if($P26<$ratarataNT-2){
$PRendah++;		}else if($P26>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Sultenggara
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 27";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P27 = $row[0];
		if($P27<$ratarataNT-2){
$PRendah++;		}else if($P27>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Gorontalo
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 28";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P28 = $row[0];
		if($P28<$ratarataNT-2){
$PRendah++;		}else if($P28>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Sulbar
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 29";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P29 = $row[0];
		if($P29<$ratarataNT-2){
$PRendah++;		}else if($P29>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Maluku
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 30";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P30 = $row[0];
		if($P30<$ratarataNT-2){
$PRendah++;		}else if($P30>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Maluku Utara
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 31";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P31 = $row[0];
		if($P31<$ratarataNT-2){
$PRendah++;		}else if($P31>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Papua Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 32";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P32 = $row[0];
		if($P32<$ratarataNT-2){
$PRendah++;		}else if($P32>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}
		//Papua
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 33";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P33 = $row[0];
		if($P33<$ratarataNT-2){
$PRendah++;		}else if($P33>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}

$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 34";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P34 = $row[0];
		if($P34<$ratarataNT-2){
$PRendah++;		}else if($P34>$ratarataNT+2){
$Pcukup++;		}else{
$PTinggi++;		}

echo $PRendah;

//Nilai Tukar Tani Tiap Provinsi

				//Aceh
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P1 = $row[0];
		if($P1<$ratarataNT-2){
			$P1 = "Rendah";
		}else if($P1>$ratarataNT+2){
			$P1 = "Tinggi";
		}else{
			$P1 = "Cukup";
		}

		//Sumatera Utara
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 2";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P2 = $row[0];
		if($P2<$ratarataNT-2){
			$P2 = "Rendah";
		}else if($P2>$ratarataNT+2){
			$P2 = "Tinggi";
		}else{
			$P2 = "Cukup";
		}

		//Sumatera Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 3";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P3 = $row[0];
		if($P3<$ratarataNT-2){
			$P3 = "Rendah";
		}else if($P3>$ratarataNT+2){
			$P3 = "Tinggi";
		}else{
			$P3 = "Cukup";
		}
		//Riau

$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 4";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P4 = $row[0];
		if($P4<$ratarataNT-2){
			$P4 = "Rendah";
		}else if($P4>$ratarataNT+2){
			$P4 = "Tinggi";
		}else{
			$P4 = "Cukup";
		}

		//Jambi
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 5";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P5 = $row[0];
		if($P5<$ratarataNT-2){
			$P5 = "Rendah";
		}else if($P5>$ratarataNT+2){
			$P5 = "Tinggi";
		}else{
			$P5 = "Cukup";
		}
		//Sumatera Selatan
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 6";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P6 = $row[0];
		if($P6<$ratarataNT-2){
			$P6 = "Rendah";
		}else if($P6>$ratarataNT+2){
			$P6 = "Tinggi";
		}else{
			$P6 = "Cukup";
		}
		//Bengkulu
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 7";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P7 = $row[0];
		if($P7<$ratarataNT-2){
			$P7 = "Rendah";
		}else if($P7>$ratarataNT+2){
			$P7 = "Tinggi";
		}else{
			$P7 = "Cukup";
		}
		//Lampung
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 8";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P8 = $row[0];
		if($P8<$ratarataNT-2){
			$P8 = "Rendah";
		}else if($P8>$ratarataNT+2){
			$P8 = "Tinggi";
		}else{
			$P8 = "Cukup";
		}
		//Kepulauan Bangka Belitung
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 9";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P9 = $row[0];
		if($P9<$ratarataNT-2){
			$P9 = "Rendah";
		}else if($P9>$ratarataNT+2){
			$P9 = "Tinggi";
		}else{
			$P9 = "Cukup";
		}
		//Kepulauan Riau
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 10";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P10 = $row[0];
		if($P10<$ratarataNT-2){
			$P10 = "Rendah";
		}else if($P10>$ratarataNT+2){
			$P10 = "Tinggi";
		}else{
			$P10 = "Cukup";
		}
		//DKI Jakarta
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 11";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P11 = $row[0];
		if($P11<$ratarataNT-2){
			$P11 = "Rendah";
		}else if($P11>$ratarataNT+2){
			$P11 = "Tinggi";
		}else{
			$P11 = "Cukup";
		}
		//Jawa Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 12";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P12 = $row[0];
		if($P12<$ratarataNT-2){
			$P12 = "Rendah";
		}else if($P12>$ratarataNT+2){
			$P12 = "Tinggi";
		}else{
			$P12 = "Cukup";
		}
		//Jawa Tengah
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 13";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P13 = $row[0];
		if($P13<$ratarataNT-2){
			$P13 = "Rendah";
		}else if($P13>$ratarataNT+2){
			$P13 = "Tinggi";
		}else{
			$P13 = "Cukup";
		}
		//Jawa TImur
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 14";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P14 = $row[0];
		if($P14<$ratarataNT-2){
			$P14 = "Rendah";
		}else if($P14>$ratarataNT+2){
			$P14 = "Tinggi";
		}else{
			$P14 = "Cukup";
		}
		//Banten
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 15";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P15 = $row[0];
		if($P15<$ratarataNT-2){
			$P15 = "Rendah";
		}else if($P15>$ratarataNT+2){
			$P15 = "Tinggi";
		}else{
			$P15 = "Cukup";
		}
		//Bali
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 16";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P16 = $row[0];
		if($P16<$ratarataNT-2){
			$P16 = "Rendah";
		}else if($P16>$ratarataNT+2){
			$P16 = "Tinggi";
		}else{
			$P16 = "Cukup";
		}
		//Nusa Tenggara Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 17";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P17 = $row[0];
		if($P17<$ratarataNT-2){
			$P17 = "Rendah";
		}else if($P17>$ratarataNT+2){
			$P17 = "Tinggi";
		}else{
			$P17 = "Cukup";
		}
		//Nusa Tenggara Timur
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 18";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P18 = $row[0];
		if($P18<$ratarataNT-2){
			$P18 = "Rendah";
		}else if($P18>$ratarataNT+2){
			$P18 = "Tinggi";
		}else{
			$P18 = "Cukup";
		}
		//Kalbar
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 19";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P19 = $row[0];
		if($P19<$ratarataNT-2){
			$P19 = "Rendah";
		}else if($P19>$ratarataNT+2){
			$P19 = "Tinggi";
		}else{
			$P19 = "Cukup";
		}
		//Kalteng
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 20";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P20 = $row[0];
		if($P20<$ratarataNT-2){
			$P20 = "Rendah";
		}else if($P20>$ratarataNT+2){
			$P20 = "Tinggi";
		}else{
			$P20 = "Cukup";
		}
		//Kalsel
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 21";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P21 = $row[0];
		if($P21<$ratarataNT-2){
			$P21 = "Rendah";
		}else if($P21>$ratarataNT+2){
			$P21 = "Tinggi";
		}else{
			$P21 = "Cukup";
		}
		//Kaltim
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 22";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P22 = $row[0];
		if($P22<$ratarataNT-2){
			$P22 = "Rendah";
		}else if($P22>$ratarataNT+2){
			$P22 = "Tinggi";
		}else{
			$P22 = "Cukup";
		}
		//Kalut
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 23";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P23 = $row[0];
		if($P23<$ratarataNT-2){
			$P23 = "Rendah";
		}else if($P23>$ratarataNT+2){
			$P23 = "Tinggi";
		}else{
			$P23 = "Cukup";
		}
		//Sulut
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 24";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P24 = $row[0];
		if($P24<$ratarataNT-2){
			$P24 = "Rendah";
		}else if($P24>$ratarataNT+2){
			$P24 = "Tinggi";
		}else{
			$P24 = "Cukup";
		}
		//Sultengah
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 25";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P25 = $row[0];
		if($P25<$ratarataNT-2){
			$P25 = "Rendah";
		}else if($P25>$ratarataNT+2){
			$P25 = "Tinggi";
		}else{
			$P25 = "Cukup";
		}
		//Sulsel
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 26";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P26 = $row[0];
		if($P26<$ratarataNT-2){
			$P26 = "Rendah";
		}else if($P26>$ratarataNT+2){
			$P26 = "Tinggi";
		}else{
			$P26 = "Cukup";
		}
		//Sultenggara
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 27";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P27 = $row[0];
		if($P27<$ratarataNT-2){
			$P27 = "Rendah";
		}else if($P27>$ratarataNT+2){
			$P27 = "Tinggi";
		}else{
			$P27 = "Cukup";
		}
		//Gorontalo
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 28";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P28 = $row[0];
		if($P28<$ratarataNT-2){
			$P28 = "Rendah";
		}else if($P28>$ratarataNT+2){
			$P28 = "Tinggi";
		}else{
			$P28 = "Cukup";
		}
		//Sulbar
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 29";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P29 = $row[0];
		if($P29<$ratarataNT-2){
			$P29 = "Rendah";
		}else if($P29>$ratarataNT+2){
			$P29 = "Tinggi";
		}else{
			$P29 = "Cukup";
		}
		//Maluku
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 30";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P30 = $row[0];
		if($P30<$ratarataNT-2){
			$P30 = "Rendah";
		}else if($P30>$ratarataNT+2){
			$P30 = "Tinggi";
		}else{
			$P30 = "Cukup";
		}
		//Maluku Utara
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 31";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P31 = $row[0];
		if($P31<$ratarataNT-2){
			$P31 = "Rendah";
		}else if($P31>$ratarataNT+2){
			$P31 = "Tinggi";
		}else{
			$P31 = "Cukup";
		}
		//Papua Barat
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 32";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P32 = $row[0];
		if($P32<$ratarataNT-2){
			$P32 = "Rendah";
		}else if($P32>$ratarataNT+2){
			$P32 = "Tinggi";
		}else{
			$P32 = "Cukup";
		}
		//Papua
$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 33";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P33 = $row[0];
		if($P33<$ratarataNT-2){
			$P33 = "Rendah";
		}else if($P33>$ratarataNT+2){
			$P33 = "Tinggi";
		}else{
			$P33 = "Cukup";
		}

$sql = "SELECT Nilai_TT FROM `Nilai_TT` WHERE tahun=2012 && Prov_id = 34";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$P34 = $row[0];
		if($P34<$ratarataNT-2){
			$P34 = "Rendah";
		}else if($P34>$ratarataNT+2){
			$P34 = "Tinggi";
		}else{
			$P34 = "Cukup";
		}







?>