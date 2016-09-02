<?php  
 // Standard inclusions     
 include("pChart/pData.class");  
 include("pChart/pChart.class");  
 include 'koneksi.php';
 
 // Dataset definition
$query1="SELECT jumlah FROM kumulatif_bulan_lalu WHERE no = 1";
		$result=mysql_query($query1);
		while ($row1 = mysql_fetch_row($result))
		{
			$a = $row1[0];
		}
		
		$query2="SELECT dirawat FROM kumulatif_bulan_lalu WHERE no = 1";
		$result=mysql_query($query2);
		while ($row1 = mysql_fetch_row($result))
		{
			$b = $row1[0];
		}
		
		$query3="SELECT sembuh FROM kumulatif_bulan_lalu WHERE no = 1";
		$result=mysql_query($query3	);
		while ($row1 = mysql_fetch_row($result))
		{
			$c = $row1[0];
		}
		
		
 $DataSet = new pData;  
 $DataSet->AddPoint(array($a),"Serie1");  
 $DataSet->AddPoint(array($b),"Serie2"); 
 $DataSet->AddPoint(array($c),"Serie3"); 



 
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie(); 
 $DataSet->SetSerieName("Jumlah Bulan Lalu","Serie1");  
 $DataSet->SetSerieName("Dirawat Bulan Lalu","Serie2");  
 $DataSet->SetSerieName("Sembuh Bulan Lalu","Serie3");
 


 
  
 // Initialise the graph  
 $Test = new pChart(700,230);  
 $Test->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test->setGraphArea(50,30,480,200);  
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
 $Test->drawLegend(496,50,$DataSet->GetDataDescription(),255,255,255);  
 $Test->setFontProperties("Fonts/tahoma.ttf",10);  
 $Test->drawTitle(50,22,"Provinsi Aceh",50,50,50,585);  
 $Test->Stroke("example12.png");  
?>  