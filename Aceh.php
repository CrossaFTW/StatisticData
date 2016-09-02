	<!DOCTYPE html>
<html lang="en">

<head>

	<script src="js/raphael-min.js"></script>
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/morris-0.4.1.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Statistik Produktivitas dan Nilai Tukar Tani</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Project Padi</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Grafik</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >About</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Statistik Produktivitas dan Nilai Tukar Tani</h1>
            <h3>2010-2015</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Selanjutnya</a>
        </div>
    </header>


    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Produktivitas dan Nilai Tukar Tani Padi Seluruh Provinsi</h2>
                    <hr class="small">              
					<div id="bar-example"></div>
					<?php include 'koneksi.php'; ?>
					<script id="jsbin-javascript">
					/*
					 * Play with this code and it'll update in the panel opposite.
					 *
					 * Why not try some of the options above?
					 */	 
					Morris.Bar({
					  element: 'bar-example',
					  data: [
						{ y: 'Aceh 2010', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2010";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Aceh 2011', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2011";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Aceh 2012', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2012";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Aceh 2013', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2013";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
						{ y: 'Aceh 2014', a: <?php $sql = "SELECT produktivitas FROM produktivitas WHERE Prov_Id=1 && Tahun=2014";
												$result = mysql_query($sql);
													$row = mysql_fetch_array($result);
														echo $row[0];?>},
					  ],
					  xkey: 'y',
					  ykeys: ['a'],
					  labels: ['Produktivitas(Ton)']
					});
					</script>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
			
        </div>
        <!-- /.container -->
    </section>
	
	<section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
             <form>
				<div class="well carousel-search hidden-sm">
					<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Nama Provinsi <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="$">Aceh</a></li>
							<li><a href="#">Sumatera Utara</a></li>
							<li><a href="#">Sumatera Barat</a></li>
							<li><a href="#">Riau</a></li>
							<li><a href="#">Jambi</a></li>
							<li><a href="#">Sumatera Selatan</a></li>
							<li><a href="#">Bengkulu</a></li>
							<li><a href="#">Lampung</a></li>
							<li><a href="#">Kepulauan Bangka Belitung</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-star"></span> Other</a></li>
						</ul>
					</div>
				<div class="btn-group">
					<button type="button" id="btnSearch" class="btn btn-primary">Search</button>
					<button type="button" id="btnMining" class="btn btn-primary">Mining Apriori</button>
				</div>
			</div>
			</form>
            </div>
            <!-- /.row -->
			
        </div>
        <!-- /.container -->
    </section>
	

	


	
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
	
	

</body>

</html>
