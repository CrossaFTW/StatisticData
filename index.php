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
            <h3>2008-2015</h3>
        </div>
    </header>


    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Produktivitas Padi Seluruh Provinsi</h2>
	                    <hr class="small">              
						<div id="bar-example"></div>				
						<script id="jsbin-javascript">
						    <?php include 'modul.php'; ?>
					</script>
                </div>
            </div>
        </div>

	        <div class="container">
	            <div class="row">
				<div class="col-lg-10 col-lg-offset-1 text-center">
	             <form>
					<div class="well carousel-search hidden-sm">
					<h1> Pilih Provinsi </h1>
						<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Nama Provinsi <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="?page=aceh">Aceh</a></li>
								<li><a href="?page=sumut">Sumatera Utara</a></li>
								<li><a href="?page=sumbar">Sumatera Barat</a></li>
								<li><a href="?page=riau">Riau</a></li>
								<li><a href="?page=jambi">Jambi</a></li>
								<li><a href="?page=sumsel">Sumatera Selatan</a></li>
								<li><a href="?page=bengkulu">Bengkulu</a></li>
								<li><a href="?page=lampung">Lampung</a></li>
								<li><a href="?page=bangka">Kepulauan Bangka Belitung</a></li>							
								<li><a href="?page=kepriau">Kepulauan Riau</a></li>
								<li><a href="?page=jabar">Jawa Barat</a></li>
								<li><a href="?page=jogja">DI Yogyakarta</a></li>							
								<li><a href="?page=jatim">Jawa Timur</a></li>
								<li><a href="?page=banten">Banten</a></li>
								<li><a href="?page=bali">Bali</a></li>
								<li><a href="?page=ntb">Nusa Tenggara Barat</a></li>
								<li><a href="?page=ntt">Nusa Tenggara Timur</a></li>
								<li><a href="?page=kalbar">Kalimantan Barat</a></li>
								<li><a href="?page=kalteng">Kalimantan Tengah</a></li>
								<li><a href="?page=kalsel">Kalimantan Selatan</a></li>
								<li><a href="?page=kaltim">Kalimantan Timur</a></li>
								<li><a href="?page=kalut">Kalimantan Utara</a></li>
								<li><a href="?page=sulut">Sulawesi Utara</a></li>
								<li><a href="?page=sultenggara">Sulawesi Tengah</a></li>
								<li><a href="?page=sulsel">Sulawesi Selatan</a></li>
								<li><a href="?page=sultenggara">Sulawesi Tenggara</a></li>
								<li><a href="?page=gorontalo">Gorontalo</a></li>
								<li><a href="?page=sulbar">Sulawesi Barat</a></li>
								<li><a href="?page=maluku">Maluku</a></li>
								<li><a href="?page=malut">Maluku Utara</a></li>
								<li><a href="?page=papbar">Papua Barat</a></li>
								<li><a href="?page=papua">Papua</a></li>
								
							
								<li class="divider"></li>
								<li><a href="#"><span class="glyphicon glyphicon-star"></span> Other</a></li>
							</ul>
						</div>
					</div>
	    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Nilai Tukar Tani Padi Seluruh Provinsi</h2>
                    <hr class="small">              
					<div id="bar-example2"></div>				
					<script id="jsbin-javascript">
					    <?php include 'modul2.php'; ?>
					</script>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
             <form>
				<div class="well carousel-search hidden-sm">
				<h1> Pilih Provinsi </h1>
					<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Nama Provinsi <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?page=aceh">Aceh</a></li>
							<li><a href="?page=sumut">Sumatera Utara</a></li>
							<li><a href="?page=sumbar">Sumatera Barat</a></li>
							<li><a href="?page=riau">Riau</a></li>
							<li><a href="?page=jambi">Jambi</a></li>
							<li><a href="?page=sumsel">Sumatera Selatan</a></li>
							<li><a href="?page=bengkulu">Bengkulu</a></li>
							<li><a href="?page=lampung">Lampung</a></li>
							<li><a href="?page=bangka">Kepulauan Bangka Belitung</a></li>							
							<li><a href="?page=kepriau">Kepulauan Riau</a></li>
							<li><a href="?page=jabar">Jawa Barat</a></li>
							<li><a href="?page=jogja">DI Yogyakarta</a></li>							
							<li><a href="?page=jatim">Jawa Timur</a></li>
							<li><a href="?page=banten">Banten</a></li>
							<li><a href="?page=bali">Bali</a></li>
							<li><a href="?page=ntb">Nusa Tenggara Barat</a></li>
							<li><a href="?page=ntt">Nusa Tenggara Timur</a></li>
							<li><a href="?page=kalbar">Kalimantan Barat</a></li>
							<li><a href="?page=kalteng">Kalimantan Tengah</a></li>
							<li><a href="?page=kalsel">Kalimantan Selatan</a></li>
							<li><a href="?page=kaltim">Kalimantan Timur</a></li>
							<li><a href="?page=kalut">Kalimantan Utara</a></li>
							<li><a href="?page=sulut">Sulawesi Utara</a></li>
							<li><a href="?page=sultenggara">Sulawesi Tengah</a></li>
							<li><a href="?page=sulsel">Sulawesi Selatan</a></li>
							<li><a href="?page=sultenggara">Sulawesi Tenggara</a></li>
							<li><a href="?page=gorontalo">Gorontalo</a></li>
							<li><a href="?page=sulbar">Sulawesi Barat</a></li>
							<li><a href="?page=maluku">Maluku</a></li>
							<li><a href="?page=malut">Maluku Utara</a></li>
							<li><a href="?page=papbar">Papua Barat</a></li>
							<li><a href="?page=papua">Papua</a></li>
									
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-star"></span> Other</a></li>
						</ul>
					</div>
				</div>
    </section>



     <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
            	<div class="col-lg-10 col-lg-offset-1 text-center">
            		<?php include "modul3.php"; ?>

            	</div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
		<div class="well carousel-search hidden-sm text-center">
			<h1> Mining Apriori </h1>
				<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#" >Pilih Tahun <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?page=2008">Tahun 2008</a></li>
							<li><a href="?page=2009">Tahun 2009</a></li>
							<li><a href="?page=2010">Tahun 2010</a></li>
							<li><a href="?page=2011">Tahun 2011</a></li>
							<li><a href="?page=2012">Tahun 2012</a></li>
							<li><a href="?page=2013">Tahun 2013</a></li>
							<li><a href="?page=2013">Tahun 2014</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-star"></span> Other</a></li>
						</ul>
				</div>
		</div>
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
