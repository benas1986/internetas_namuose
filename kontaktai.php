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

    <body id="kontaktai">

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
                        <li><a href="index.php">Titulinis</a></li>
                        <li><a href="straipsniai.php">Straipsniai</a></li>
                        <li><a href="apie_mane.php">Apie mane</a></li>
                        <li class="active"><a href="kontaktai.php">Kontaktai</a></li>
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

        <div id="content" class="container-fluid">
            <div class="row">
                <div class="col-md-8" >
                    <div class="panel panel-default x-panel">
                        <div class="panel-heading">Parašykite klausimą ar pageidavimą!</div>
                        <div class="panel-body">
                            <div class="reg-form box">
                                <div id="message"></div>
                                <form method="post" action="#" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="vardas" id="vardas" placeholder="Vardas" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="tema" name="tema" placeholder="Tema" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="youremail" placeholder="El. paštas" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" name="message" placeholder="Jūsų žinutė" required></textarea>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-info">Siųsti</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div id="susisiekite" class="col-md-4">

                    <h2>Susisiekite!</h2> <br> <br>
                    <p><strong>Jei turite klausimų ar pageidavimų, prašau užpildyti kairiau esančią formą šiame puslapyje. Stengsiuosi atsakyti kuo greičiau!</strong></p>
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

    </body>
</html>
