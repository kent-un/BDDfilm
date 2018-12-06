<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?><!------------------appel de la page head.php-------------------->
    <link rel="stylesheet" href="css/noter.css">
    <title>Films | D codeurs du lac</title>
</head>

<body>
    <?php include('php/header.php');?><!--------------------appel de la page header.php--------------------->
    

    <main><!-------------------ici comence mon formulaire de note-------------------->
        <h1>Donner une note à un film</h1> 
        <form methode="POST">
            <div id="fontSelect">
                <select id="choiPerso">
                    <?php include('nomUtile.php');?><!------------------appel de la page nomUtile.php------------------->
                </select>

                <select id="choiFilm">
                    <?php include('filmPref.php');?><!---------------appel de la page filmPref.php----------------->
                </select>
            </div>

            <img id="etoile" src="img/star.svg">
            <img id="etoile" src="img/star.svg">
            <img id="etoile" src="img/star.svg">
            <img id="etoile" src="img/star.svg">
            <img id="etoile" src="img/star.svg">
            
            <div id="envoi">
            <input id="envoyer" type="button" value="envoyer">
            </div>

        </form>
    </main><!-------------ici ce fini mon formulaire de note------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

   
</body>
</html>