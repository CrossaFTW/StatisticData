<?php

$halaman=$_GET['page'];
switch($halaman){
	case '2008' : include "apriori2008.php";
	break;
	case '2009' : include "apriori2009.php";
	break;
	case '2010' : include "apriori2010.php";
	break;
	case '2011' : include "apriori2011.php";
	break;
	case '2012' : include "apriori2012.php";
	break;
	case '2013' : include "apriori2013.php";
	break;
	default : include "apriori2012.php";

}