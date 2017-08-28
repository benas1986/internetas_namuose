<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Internetas namuose</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body id="pagrindinis">

        <nav id="startchange" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Internetas namuose</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Titulinis</a></li>
                        <li><a href="straipsniai.php">Straipsniai</a></li>
                        <li><a href="apie_mane.php">Apie mane</a></li>
                        <li><a href="kontaktai.php">Kontaktai</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div class="bg">
            <p>Sveiki atvykę!<br>Paprasti interneto vartotojai!</p>
            <a href="#zemiau" class="btn btn-info" role="button">Naujausi straipsniai</a>
        </div>


        <div id="zemiau" class="container">
            <div class="row">
                <h2>Naujausi straipsniai</h2>
                <div class="col-sm-8 col-md-8 elementas">
                    <article>
                        <a href="straipsniai.php">
                            <img src="Foto/KokiInternetoPlanaPasirinkti.jpeg" alt="Plano pasirinkimas">
                        </a>
                        <div class="tekstas">
                            <h3><a href="straipsniai.php" title="Kokį interneto planą išsirinkti?">Kokį interneto planą išsirinkti?</a></h3>
                            <p>Aktualijos</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-4 col-md-4 elementas">
                    <article>
                        <a href="straipsniai.php">
                            <img src="Foto/BevielioRy%C5%A1ioTechnologijaWifi.jpeg" alt="Wifi technologija">
                        </a>
                        <div class="tekstas">
                            <h3><a href="straipsniai.php" title="Bevielio ryšio technologija - WIFI">Bevielio ryšio technologija - WIFI</a></h3>
                            <p>Technologijos</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-4 col-md-4 elementas">
                    <article>
                        <a href="straipsniai.html">
                            <img src="Foto/GedimoPaieska.jpg" alt="Gedimo paieska">
                        </a>
                        <div class="tekstas">
                            <h3><a href="straipsniai.php" title="Kaip ieškoti interneto gedimo?">Kaip ieškoti interneto gedimo?</a></h3>
                            <p>Interneto gedimai</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-4 col-md-4 elementas">
                    <article>
                        <a href="straipsniai.html">
                            <img src="Foto/KokiSlaptazodiNaudotiInternetuiApsaugoti.jpeg" alt="Slaptažodis internetui">
                        </a>
                        <div class="tekstas">
                            <h3><a href="straipsniai.php" title="Technologijos">Kokį slaptažodį naudoti?</a></h3>
                            <p>Saugus internetas</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-4 col-md-4 elementas">
                    <article>
                        <a href="straipsniai.php">
                            <img src="Foto/Istorija.jpeg" alt="Istorija">
                        </a>
                        <div class="tekstas">
                            <h3><a href="straipsniai.php" title="Kaip atsirado internetas?">Kaip atsirado internetas?</a></h3>
                            <p>Istorija</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <footer class="footer-distributed">
			<div class="footer-left">
				<img src="Foto/logo.jpg" alt="logo">
				<p class="footer-links">
					<a href="index.php">Titulinis</a>
					·
					<a href="straipsniai.php">Straipsniai</a>
					·
					<a href="apie_mane.php">Apie mane</a>
					·
					<a href="kontaktai.php">Kontaktai</a>
					·
				</p>
				<p class="footer-company-name">Visos teisės saugomos &copy; 2017</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Kuršių 7</span> Kaunas, Lietuva</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>869031354</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">benas.rimsa@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Svetainė paprastiems vartotojams!</span>
					Čia rasite informaciją apie internetą namuose. Aktualios temos, gedimų priežastys, interneto sauga, technologijos bei istorija. 
				</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</footer>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="JavaScript/javaScript.js"></script>

    </body>

</html>
