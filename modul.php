<?php
include "koneksi.php";
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	
	//Manggil Data Aceh
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
	
	
$halaman=$_GET['page'];
switch($halaman) 
	{
	case 'aceh' : 
?>
		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;
 	case 'sumut': 
	
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
					
<?php
 		break;
 		
 	case 'sumbar':
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
					
<?php
 		break;		
 	case 'riau': 
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
					
<?php
 		break;		
 	case 'jambi': 
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
					
<?php
 		break;		
 	case 'sumsel':
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});	

<?php
 		break;		
 	case 'bengkulu': 
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});	

<?php
 	break;
	case 'lampung';
 	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});	


<?php
 		break;		
 	case 'bangka':
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=9 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'kepriau':
	$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=10 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'jakarta': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=11 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'jabar': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=12 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'jateng': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=13 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'jogja': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=14 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'jatim': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=15 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'banten': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=16 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'bali': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=17 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
<?php
 		break;		
 	case 'ntb': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=18 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'ntt': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=19 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
<?php
 		break;		
 	case 'kalbar': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=20 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'kalteng': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=21 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});	
					
<?php
 		break;		
 	case 'kalsel': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=22 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'kaltim': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=23 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'kalut': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=24 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'sulut': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=25 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'sulteng': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=26 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'sulsel': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=27 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});			
					
					
					
					
<?php
 		break;
  	case 'asdasd' : echo("<h1>Selamat Datang Sysadmin</h1>");
 		break;
 	default :
?>
 		Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});
					
<?php
 		break;		
 	case 'sultenggara': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=28 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});	

<?php
 		break;		
 	case 'gorontalo': 
$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=29 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
<?php
 		break;		
 	case 'sulbar': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=30 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
					
<?php
 		break;		
 	case 'maluku': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=31 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});
					
<?php
 		break;		
 	case 'malut': 
$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=32 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'papbar': 
$a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=33 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;		
 	case 'papua': 
 $a=array(); 
	$b=array();
	$alfa=array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$sum=array();
	$mse=100000000000000000000000000000000;
	$asd=array();
	$TahunAceh = 2008;
	$HasilAceh = array();
	//Manggil Data Sumut
	while($TahunAceh<2015){
	$sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=34 && Tahun=$TahunAceh";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		array_push($a, $row[0]);
		$TahunAceh++;
	}
	include 'ModulForcast.php';
 ?>
 		Morris.Line({
					  element: 'bar-example',
					  data: [
					  	{ y: '2008', a: <?php echo $a[0];?>, b:<?php echo $asd[0]; ?>},
					  	{ y: '2009', a: <?php echo $a[1];?>, b:<?php echo $asd[1]; ?>},
						{ y: '2010', a: <?php echo $a[2];?>, b:<?php echo $asd[2]; ?>},
						{ y: '2011', a: <?php echo $a[3];?>, b:<?php echo $asd[3]; ?>},
						{ y: '2012', a: <?php echo $a[4];?>, b:<?php echo $asd[4]; ?>},
						{ y: '2013', a: <?php echo $a[5];?>, b:<?php echo $asd[5]; ?>},
						{ y: '2014', a: <?php echo $a[6];?>, b:<?php echo $asd[6]; ?>},
						{ y: '2015', b: <?php echo $asd[$arrlength2-1]; ?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a', 'b'],	
					  labels: ['Produktivitas(Ton)', 'Produktivitas(Ton)Forcast']
					});

<?php
 		break;
  	case '2008' : 
	?>
	Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2008";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					<?php
 		break;
		case '2009' : 
	?>
	Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2009";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					<?php
 		break;
		case '2010' : 
	?>
	Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					<?php
 		break;
		case '2011' : 
	?>
	Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					<?php
 		break;
		case '2012' : 
	?>
	Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					<?php
 		break;
		case '2013' : 
	?>
	Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					<?php
 		break;
		case '2014' : 
	?>
	Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					<?php
 		break;
 	default :
?>
 		Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Utara', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=2 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Barat', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=3 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Riau', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=4 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Jambi', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=5 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Sumatera Selatan', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=6 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Bengkulu', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=7 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Lampung', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=8 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});					
					
<?php
 		break;
}
?>


