<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinema Marco Polo - Homepage</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> <!--serve per il menu a tendina..-->
        <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script> <!--serve per il menu a tendina..-->
        <link rel="icon" href="img/icona.ico"/> <!--Icona del sito-->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/dist/css/bootstrap-grid.css"/>
        <link rel="stylesheet" type="text/css" href="mobiriseicons/30px/mobirise/style.css">
        <link rel="stylesheet" type="text/css" href="stile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>

    <body style="background-color: #434547;">

        <nav name="top" class="navbar navbar-expand-md navbar-dark fixed-top" style="text-align: center; background-color: #2f3133; box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);">
        
             <!--crea il bottone del menu a tendina quando rimpicciolisco la pagina web-->
           <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggler-icon"></span>
           </button>
                                                
            <div class="collapse navbar-collapse" id="collapse_target"><!--id deve essere uguale a data-target-->
            
                <ul class="navbar-nav" >
                    <li align="left">   <!--Uso semplicemente il tag <li> con dentro un <img> per il logo del cinema-->
                        <img onclick="location.href='homepage.html'" class=" iconahome " src="img/cmp2.png" height="70px"/>
                    </li>

                    <li class="nav-item" style="padding-right: 15px;">
                        <a class="nav-link" href="acquista.html" style="color: white;">Acquista
                            <img class="navbar-brand icona" src="mobiriseicons/30px/svg/mbri-cash.svg"/>
                        </a>
                    </li>
                    <li class="nav-item" style="padding-right: 15px;">
                        <a class="nav-link" href="programmazione.html" style="color: white;">Programmazione
                            <img class="navbar-brand icona" src="mobiriseicons/30px/svg/mbri-calendar.svg"/>
                        </a>
                    </li>
                    <li class="nav-item" style="padding-right: 15px;">
                        <a class="nav-link" href="contatti.html" style="color: white;">Contatti
                            <img class="navbar-brand icona" src="mobiriseicons/30px/svg/mbri-edit.svg"/>
                        </a>
                    </li>
                </ul>
                <!--creo la seconda unordered list per gli elementi a destra-->
                <ul class="navbar-nav ml-auto"> <!--li allineo a destra grazie a ml-auto-->
                    <li class="nav-item "style="padding-right: 15px;">
                        <a class="nav-link" href="paginaLogin/login.html" style="color: white;">Login
                            <img class="navbar-brand icona" src="mobiriseicons/30px/svg/mbri-login.svg"/>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"  href="carrello.html">  
                            <img class="navbar-brand icona" src="mobiriseicons/30px/svg/mbri-shopping-cart.svg"/>
                        </a>
                    </li>
                </ul>
            
            </div>
        </nav>
        <!--############################# Fine navbar ################################-->

        <div class="sfondo img-fluid">
            <!--<img src="cinema-stelle.jpg" class="img-fluid"> con questa classe adatto la foto ai ridimensionamenti-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/cinema-stelle.jpg"  height="400vh;" style="opacity: 0.5; object-fit: cover;"alt="First slide">
                        <div class="carousel-caption" style="top: 25%;"><!--prima era 42%-->
                            <h1>Benvenuto al <strong>Cinema Marco Polo</strong></h1>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="w-100" src="https://source.unsplash.com/AtPWnYNDJnM/1348x590" style="opacity: 0.5; object-fit: cover;" height="400vh" alt="Second slide">
                        <div class="carousel-caption" style="top: 25%;">
                           <!--top attributo di carousel caption--> 
                            <h1>Vieni a scoprire le nostre <strong>3 sale</strong> da <strong>150 posti</strong></h1>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="w-100" src="img/cinema-rosso.jpg" style="opacity: 0.5; object-fit: cover;" height="400vh" alt="Second slide">
                        <div class="carousel-caption" style="top: 25%;">
                            <h1><strong>Il cinema dedicato ai giovani</strong> al <strong>centro di Roma</strong></h1>
                        </div>
                    </div>
                </div>
                <!--frecce-->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div style="padding-top: 85px;"></div> <!--serve a riprodurre lo stesso spazio che c'è sotto-->
        <div class="my_div w-100" style="font-size:xx-large; background-color: brown;
                    margin:auto; box-shadow: 5px 5px 5px rgba(0, 0, 0, .5);"> <!--auto centra orizzontalmente-->
            <a href="programmazione.html"><h1 style="color:white;"> I <strong>film</strong> in sala ></h1> </a>
        </div>
        <!--TEST
    
    
    
        -->
        <?php
            if(( !isset($_SESSION["utente"]) ) || ( $_SESSION["utente"]=="" )){
                echo "<div style='padding-top: 85px;'></div> <!--serve a riprodurre lo stesso spazio che c'è sotto-->
                <div class='my_div w-100' style='font-size:xx-large; background-color:#2676C0;
                            margin:auto; box-shadow: 5px 5px 5px rgba(0, 0, 0, .5);'> <!--auto centra orizzontalmente-->
                    <a href='paginaLogin/login.html'><h1 style='color:white;'><strong>Accedi </strong>o
                     <strong>registrati</strong> per ottenere offerte esclusive ></h1> </a>
                </div>";
            }
            else{
                $x=$_SESSION["utente"];
                echo "<div style='padding-top: 85px;'></div> <!--serve a riprodurre lo stesso spazio che c'è sotto-->
                <div class='my_div w-100' style='font-size:xx-large; background-color:#2676C0;
                            margin:auto; box-shadow: 5px 5px 5px rgba(0, 0, 0, .5);'> <!--auto centra orizzontalmente-->
                    <div> CIAO $x </div>
                </div>";
            }

        ?>
        

        <!--DA QUI PARE IL QUADRATO PREZZI-->
        <br>
        <div style="padding-top: 85px;"></div> <!--serve a riprodurre lo stesso spazio che c'è sotto-->
        <!--
        <div class="my_div" style="font-size:xx-large; background-color:chocolate; width: min-content;
                     max-width: 100%; margin:auto; box-shadow: 5px 5px 5px rgba(0, 0, 0, .5);"> <!-auto centra orizzontalmente--
            <b>I nostri prezzi </b> 
        </div>-->
        <!--
        <div style="width: 50%; max-width: 1200px; margin:auto; ">
            <div class="blocco my_div" style="width: 50%; font-size: xx-large; max-height: 250px;
                    text-overflow: clip; overflow: hidden; box-shadow: 5px 5px 5px rgba(0, 0, 0, .5);"> <!-questa riga serve a non far sforare il testo--><!--
                <u style="text-align: center; font-size: xx-large;">Settimanale</u>
                <p style="font-size: x-large;"> Adulti:&nbsp; 7.50€</p>
                <p style="font-size: x-large;"> Ridotto:&nbsp; 5.00€</p>
                <p style="font-size: x-large;"> Università:&nbsp; 3.00€</p>
            </div>
            <div class="blocco my_div" style="width: 50%; font-size: xx-large; max-height: 250px;
                    text-overflow: clip; overflow: hidden; box-shadow: 5px 5px 5px rgba(0, 0, 0, .5);">
                <u style="text-align: center; font-size: xx-large;">Weekend</u>
                <p style="font-size: x-large;"> Adulti:&nbsp; 9.50€</p>
                <p style="font-size: x-large;"> Ridotto:&nbsp; 6.50€</p>
                <p style="font-size: x-large;"> Università:&nbsp; 5.50€</p>
            </div>
        </div>
        -->
        <center>
        <div class="table-responsive blocco" style="width:min-content; max-width: 100%; min-width:40%; margin:auto;">
            <div style="width:100%; font-size:xx-large; background-color: chocolate;">
                <b>I nostri prezzi</b>                
            </div>
            <table>
                <thead>
                    <tr>
                        <th style="text-align: center; font-size: x-large;">Settimana</th>
                        <th style="text-align: center; font-size: x-large;">Weekend</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size: x-large;">Adulti:&nbsp;<br>7.50€</td>
                        <td style="font-size: x-large;">Adulti:&nbsp;<br>9.50€</td>
                       
                    </tr>
                    <tr>
                        <td style="font-size: x-large;">Ridotto:&nbsp;<br>5.00€</td>
                        <td style="font-size: x-large;">Ridotto:&nbsp;<br>6.50€</td>
                        
                    </tr>
                    <tr>
                        <td style="font-size: x-large;">Università:&nbsp;<br>3.00€</td>
                        <td style="font-size: x-large;">Università:&nbsp;<br>5.50€</td>
                    </tr>
                </tbody>
            </table>
            </center>
        </div>
        

        <br><br><br><br><br><br><br><br>

        <!--FINE QUADRATO PREZZI-->
        
        <!--############################# Inizio footer ################################-->
        <footer name="bottomdiv" style="background-color:chocolate; bottom: 0;">
            <a href="#top" id="navBackToTop">
                <div class="my_div" style="background-color:#2f3133;">Torna su</div>
            </a>
            <div class="my_div">
                Contattaci qui:
                <a href="https://www.facebook.com/" class="btn btn-primary btn-lg, fa fa-facebook" role="button" style="margin: 4px;"></a>
                <a href="https://twitter.com/" class="btn btn-primary btn-lg, fa fa-twitter" role="button" style="margin: 4px;"></a>
                <a href="https://www.instagram.com/" class="btn btn-primary btn-lg, fa fa-instagram" role="button" style="margin: 4px;"></a>
                <a href="https://mail.google.com/" class="btn btn-primary btn-lg, fa fa-envelope" role="button" style="margin: 4px;"></a>
            </div>

            <div class="my_div" style="background-color:brown;">
                © 2020 Copyright: Cinema Marco Polo.
            </div>

        </footer>
    </body>
</html>