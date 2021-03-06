<?php require_once("duombaze.php");?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Internetas namuose</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body id="straipsniai">
        <?php 

        $id = $_GET['id'];
        $uzklausa = "SELECT straipsniai.id AS sID, straipsniai.nuotrauka AS nuotrauka, straipsniai.pavadinimas AS pavadinimas, straipsniai.data AS data, straipsniai.tekstas AS tekstas, kategorijos.pavadinimas AS kategorija, autoriai.vardas AS vardas, autoriai.pavarde AS pavarde, (SELECT COUNT(komentarai.id) FROM komentarai WHERE komentarai.straipsnioID= siD) AS visiKomentarai, komentarai.vardas AS komentarai_vardas, komentarai.data AS komdata, komentarai.tekstas AS komentaraiTekstas 
        
        FROM (straipsniai LEFT JOIN komentarai ON komentarai.straipsnioID = straipsniai.id), autoriai, kategorijos
        
        WHERE straipsniai.id = $id AND straipsniai.autorius = autoriai.id AND straipsniai.kategorija = kategorijos.id 
        
        ORDER BY straipsniai.data DESC , komdata DESC";
        $komanda = mysqli_query($prisijungimas, $uzklausa);
        $straipsniai = mysqli_fetch_all($komanda, MYSQLI_ASSOC);
        foreach($straipsniai as $eilute) {}
        
        
        ?>


        <nav id="startchange" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                                                                                   
                    </button>
                    <a class="navbar-brand zodis" href="index.php">Internetas namuose</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a class="zodis" href="index.php">Titulinis</a></li>
                        <li class="active"><a class="zodis" href="straipsniai.php">Straipsniai</a></li>
                        <li><a class="zodis" href="apie_mane.php">Apie mane</a></li>
                        <li><a class="zodis" href="kontaktai.php">Kontaktai</a></li>
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

        <div class="container-fluid">
            <div id="kaire" class="row">
                <div id="straipsnis_pilnas" class="col-sm-9">
                    <h4>
                        <?php echo $eilute['pavadinimas'] ?>
                    </h4>
                    <div class="bruksnys"> </div>

                    <article>

                        <img src="Foto/<?php echo $eilute['nuotrauka']?>" alt="Nuotrauka">

                        <div class="author-info">
                            <ul class="list-inline">
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i><br>
                                    <div class="info">
                                        <p>Parašė: <br><strong> <?php echo $eilute['vardas']." ".$eilute['pavarde']; ?></strong></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <div class="info">
                                        <p>Data: <br><strong><?php echo $eilute["data"]?></strong></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-comments-o"></i>
                                    <div class="info">
                                        <p>Komentarai: <br>
                                            <strong><?php 
    echo $eilute['visiKomentarai'];
                                                ?></strong></p>
                                    </div>
                                </li>
                                    
                                <li>
                                    <i class="fa fa-tag" aria-hidden="true"></i>
                                    <div class="info">
                                        <p>Kategorija: <br>
                                            <strong><?php echo $eilute['kategorija']?></strong></p>
                                    </div>
                                </li>


                                <li>
                                    <i class="fa fa-eye"></i>
                                    <div class="info">
                                        <p>Viso peržiūrų: <br>
                                            <strong>4289</strong></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tekstas">
                            <h3>
                                <?php echo $eilute['pavadinimas'] ?>
                            </h3>

                            <p> <?php echo $eilute['tekstas'] ?></p>

                            <div class="bruksnys"> </div>

                            <h4>Komentaras:</h4>


                            <form action="naujas_komentaras_vykdyti.php?id=<?php echo $eilute['sID']; ?>" method="POST">

                                <input style="width:300px" class="form-control" type="text" placeholder="Jūsų vardas" name="vardasLaukelis" required>
                                <textarea class="form-control" rows="3" placeholder="Parašykite savo komentarą" name="tekstasLaukelis" required></textarea>

                                <button type="submit" class="btn btn-info">Siųsti</button>
                            </form><br><br>


                            <p><span class="badge"><?php echo $eilute['visiKomentarai']; ?></span> Komentarai:</p><br>
                            
                            <?php
                            if ($eilute['visiKomentarai'] != 0) {
                            foreach($straipsniai as $eilute){
                                echo      "<div class='row'>";
                                echo       "<div class='col-sm-10'>";
                                echo          "<h4> $eilute[komentarai_vardas]<small>
                            $eilute[komdata]</small></h4>";
                                echo          "<p> $eilute[komentaraiTekstas]</p>";
                                echo         "</div>"        ;
                                echo       "</div>";
                            }                         
                            } else {
                                echo "<h4> komentarų nėra </h4>";
                            }?>

                        </div>
                        <div class="bruksnys"> </div>
                    </article>

                </div>
                
                <div class="col-sm-3">
                    <div class="kategorijos">
                        <div class="panel-default">
                            <div class="panel-heading">Kategorijos</div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item pirmas">Aktualijos<span class="badge badge-default badge-pill">2</span></a>
                                    <a href="#" class="list-group-item">Technologijos<span class="badge badge-default badge-pill">1</span></a>
                                    <a href="#" class="list-group-item">Interneto gedimai<span class="badge badge-default badge-pill">0</span></a>
                                    <a href="#" class="list-group-item">Saugus internetas<span class="badge badge-default badge-pill">5</span></a>
                                    <a href="#" class="list-group-item">Istorija<span class="badge badge-default badge-pill">4</span></a>
                                </div>
                            </div>
                        </div>
                    </div><br>


                    <div class="kategorijos">
                        <div class="panel-default">
                            <div class="panel-heading">Archyvas</div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item pirmas">2017 birželis<span class="badge badge-default badge-pill">6</span></a>
                                    <a href="#" class="list-group-item">2017 gegužė<span class="badge badge-default badge-pill">9</span></a>
                                    <a href="#" class="list-group-item">2017 balandis<span class="badge badge-default badge-pill">10</span></a>
                                    <a href="#" class="list-group-item">2017 kovas<span class="badge badge-default badge-pill">15</span></a>
                                    <a href="#" class="list-group-item">2017 vasaris<span class="badge badge-default badge-pill">7</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-distributed">
            <div class="footer-left">
                <img src="Foto/logo.jpg" alt="logo">
                <p class="footer-links">
                    <a href="index.php">Titulinis</a> ·
                    <a href="straipsniai.php">Straipsniai</a> ·
                    <a href="apie_mane.php">Apie mane</a> ·
                    <a href="kontaktai.php">Kontaktai</a> ·
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
                    <span>Svetainė paprastiems vartotojams!</span> Čia rasite informaciją apie internetą namuose. Aktualios temos, gedimų priežastys, interneto sauga, technologijos bei istorija.
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
