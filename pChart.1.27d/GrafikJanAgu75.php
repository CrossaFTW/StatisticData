<?php  
 // Standard inclusions     
 include("pChart/pData.class");  
 include("pChart/pChart.class");  
 include 'koneksi.php';
 
 // Dataset definition
$query1="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=1 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query1);
		while ($row1 = mysql_fetch_row($result))
		{
			$a = $row1[0];
		}
		
		$query2="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=2 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query2);
		while ($row2 = mysql_fetch_row($result))
		{
			$b = $row2[0];
		}
		
		$query3="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=3 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query3);
		while ($row3 = mysql_fetch_row($result))
		{
			$c = $row3[0];
		}
		
		$query4="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=4 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query4);
		while ($row4 = mysql_fetch_row($result))
		{
			$d = $row4[0];
		}
		
		$query5="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=5 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query5);
		while ($row5 = mysql_fetch_row($result))
		{
			$e = $row5[0];
		} 
		
		$query6="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=6 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query6);
		while ($row6 = mysql_fetch_row($result))
		{
			$f = $row6[0];
		} 
		
		$query7="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=7 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query7);
		while ($row7 = mysql_fetch_row($result))
		{
			$g = $row7[0];
		} 
		$query8="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=8 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query8);
		while ($row8 = mysql_fetch_row($result))
		{
			$h = $row8[0];
		} 
		$query9="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=9 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query9);
		while ($row9 = mysql_fetch_row($result))
		{
			$i = $row9[0];
		} 
		$query10="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=10 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query10);
		while ($row10 = mysql_fetch_row($result))
		{
			$j = $row10[0];
		} 
		$query11="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=11 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query11);
		while ($row11 = mysql_fetch_row($result))
		{
			$k = $row11[0];
		} 
		$query12="SELECT COUNT(TglKunjung) AS Kunjung FROM PENGUNJUNG where MONTH(TglKunjung)=12 and SUBSTRING(NIM,3,2)=75";
		$result=mysql_query($query12);
		while ($row12 = mysql_fetch_row($result))
		{
			$l = $row12[0];
		} 
		
 $DataSet = new pData;  
 $DataSet->AddPoint(array($a),"Serie1");  
 $DataSet->AddPoint(array($b),"Serie2");  
 $DataSet->AddPoint(array($c),"Serie3");
 $DataSet->AddPoint(array($d),"Serie4");
 $DataSet->AddPoint(array($e),"Serie5"); 
 $DataSet->AddPoint(array($f),"Serie6"); 
 $DataSet->AddPoint(array($g),"Serie7"); 
 $DataSet->AddPoint(array($h),"Serie8");
 



 
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie();  
 $DataSet->SetSerieName("Januari","Serie1");  
 $DataSet->SetSerieName("Februari","Serie2");  
 $DataSet->SetSerieName("Maret","Serie3");
 $DataSet->SetSerieName("April","Serie4");
 $DataSet->SetSerieName("Mei","Serie5");  
 $DataSet->SetSerieName("Juni","Serie6");  
 $DataSet->SetSerieName("Juli","Serie7");
 $DataSet->SetSerieName("Agustus","Serie8");
 


 
  
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
 $Test->drawTitle(50,22,"Pengunjung Perpustakaan Keseluruhan Januari-Agustus",50,50,50,585);  
 $Test->Stroke("example12.png");  
?>  