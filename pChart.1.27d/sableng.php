<?php

$arrQuery = array('Januari' => 123, 'Februari'=>523,'Maret'=>24123);
$cnt = count($arrQuery);
$keys = array_keys($arrQuery);
print_r($keys);

//for($i=1; $i<=$cnt; $i++){
foreach($keys as $key){
	echo $key . " " .$arrQuery[$key] . "<br />";
}




?>