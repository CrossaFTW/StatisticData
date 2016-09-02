<?php
include("pChart/pData.class");  
include("pChart/pChart.class");  
include 'koneksi.php';


$a = $_POST['Bulan'];
$aa = $_POST['Bulan2'];
$b = $_POST['Prodi'];

$bulanarr = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

$DataSet = new pData;  


if($b == "Seluruh"){
$qry = "SELECT COUNT(*) FROM PENGUNJUNG Group By Month(TglKunjung)"; 
$result=mysql_query($qry);
$y=0;
while ($row1 = mysql_fetch_row($result))
{
	$bulan3[$y] = $row1[0];
	$y=$y+1;
}	
for($i=0; $i<=5; $i++){
	$DataSet->AddPoint(array($bulan3[$i]),"Serie$i");
}
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie();  
 
 for($i=0; $i<=5; $i++){
 $DataSet->SetSerieName("$bulanarr[$i]","Serie$i");
 }
}else{


$qry = "SELECT COUNT(*) FROM PENGUNJUNG Where Substring(NIM,3,2)='$b' Group By Month(TglKunjung)"; 
$result=mysql_query($qry);
$y=0;
while ($row1 = mysql_fetch_row($result))
{
	$bulan3[$y] = $row1[0];
	$y=$y+1;
}
for($i=0; $i<=5; $i++){
	$DataSet->AddPoint(array($bulan3[$i]),"Serie$i");
}
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie();  
 
 for($i=0; $i<=5; $i++){
 $DataSet->SetSerieName("$bulanarr[$i]","Serie$i");
 }	

 }
  
 // Initialise the graph  
 $Test = new pChart(700,230);  
 $Test->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test->setGraphArea(50,30,680,200);  
 $Test->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);  
 $Test->drawRoundedRectangle(5,5,695,225,5,230,230,230);  
 $Test->drawGraphArea(255,255,255,TRUE);  
 $Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2,TRUE);     
 $Test->drawGrid(4,TRUE,230,230,230,50);  
  
 // Draw the 0 line  
 $Test->setFontProperties("Fonts/tahoma.ttf",6);  
 $Test->drawTreshold(0,143,55,72,TRUE,TRUE);  
  
 // Draw the bar graph  
 $Test->drawBarGraph($DataSet->GetData(),$DataSet->GetDataDescription(),TRUE);  
  
 // Finish the graph  
 $Test->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test->drawLegend(596,50,$DataSet->GetDataDescription(),255,255,255);  
 $Test->setFontProperties("Fonts/tahoma.ttf",10);  
 $Test->drawTitle(50,22,"Pengunjung Perpustakaan",50,50,50,585);  
 $Test->Stroke("example12.png");  
 
 ?>  