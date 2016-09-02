<?php  
 // Standard inclusions     
 include 'koneksi.php';
 $query1="select nama_bulan from bulan";
		$result=mysql_query($query1);
		while ($row1 = mysql_fetch_array($result))
		{
			$a = $row1[];
		}
		echo ($a);