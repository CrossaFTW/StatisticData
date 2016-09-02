<?php
include("pChart/pData.class");  
include("pChart/pChart.class");  
include 'koneksi.php';

$a = $_POST['Bulan'];
$b = $_POST['Prodi'];

if($a == 1){$c = "Januari";}
if($a == 2){ $c = "Februari"; }
if($a == 3){ $c = "Maret"; }
if($a == 4){ $c = "April"; }
if($a == 5){ $c = "Mei"; }
if($a == 6){ $c = "Juni"; }
if($a == 7){ $c = "Juli"; }
if($a == 8){ $c = "Agustus"; }
if($a == 9){ $c = "September"; }
if($a == 10){ $c = "Oktober"; }
if($a == 11){ $c = "November"; }
if($a == 12){ $c = "Desember"; }
$qry = "SELECT COUNT(*) FROM PENGUNJUNG WHERE MONTH(TglKunjung)='$a' and SUBSTRING(NIM,3,2)='$b'"; 
$result=mysql_query($qry);
while ($row1 = mysql_fetch_row($result))
{
	$r = $row1[0];
}

$DataSet = new pData;  
 $DataSet->AddPoint(array(0),"");  
 $DataSet->AddPoint(array(0),"");  
 $DataSet->AddPoint(array($r),"Serie1");  
 $DataSet->AddPoint(array(0),"");  
 $DataSet->AddPoint(array(0),"");  

 



 
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie();  
 $DataSet->SetSerieName("$c","Serie1");  

 


 
  
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