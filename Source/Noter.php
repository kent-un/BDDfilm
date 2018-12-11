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

    <form method="post" >
         
        <div id="fontSelect">
            <select id="choiPerso" name="ChoixPerso">
                <option value="" disabled selected>Choisir un utilisateur</option>
                <?php include('nomUtile.php');?><!------------------appel de la page nomUtile.php------------------->
            </select>

            <select id="choiFilm" name="ChoixFilm" onchange="afficheMoyene(this.value)">
                <option value="" disabled selected>Choisir un film</option>
                <?php include('filmPref.php');?><!---------------appel de la page filmPref.php----------------->
            </select>
        </div>

        <div id="retournMoyene"></div>
        <p>Donnez une note au film de votre choix</p>

        <div class="etoileNote" name="EtoileNote">
            <img id="etoile1" src="img/star.svg" class="etoile">
            <img id="etoile2" src="img/star.svg" class="etoile">
            <img id="etoile3" src="img/star.svg" class="etoile">
            <img id="etoile4" src="img/star.svg" class="etoile">
            <img id="etoile5" src="img/star.svg" class="etoile">
        </div>

<!----------- recuperation de la note moyenne d'un film ------------>
        <div class="recupNoteMoyene" id="recupNoteMoyene" name="recupNoteMoyene"></div>

            <input type="hidden" name="stars" id="stars" > 
<!---------------------------- boutton envoyer --------------------------->
        <div id="envoi">
            <button id="envoyer" type="submit" name="submit">Valider</button>
        </div>
    </form>

    <?php
if(isset($_POST['submit'])){
$Note = $_POST['stars'];
$film = $_POST['ChoixFilm'];
$perso = $_POST['ChoixPerso'];

//ouverture de connection a la BDD BDDFilm
$BDDFilm = new PDO('mysql:host=localhost; dbname=BDDFilm; charset=utf8', 'BDDFilms', 'comake');

//préparation de la requete d'insertion (SQL) 
$pdoStat = $BDDFilm->prepare('insert into Note value(null, :idUtilisateur, :idFilm, :noteUtilisateur)');

//on lie chaque marqueur à une valeur
$pdoStat->bindValue(':idUtilisateur', $_POST['stars'], PDO::PARAM_STR);
$pdoStat->bindValue(':noteUtilisateur', $_POST['ChoixPerso'], PDO::PARAM_STR);
$pdoStat->bindValue(':idFilm', $_POST['ChoixFilm'], PDO::PARAM_STR);

//exécution de la requete préparée
$insertIsOk = $pdoStat->execute();

if($insertIsOk) {
  echo '<div class="alert alert-secondary">La note a été ajoutée au film</div>';
}
else {
    echo 'Echec de l\'insertion';
}
}

?>





</main><!-------------ici ce fini mon formulaire de note------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/Noter.js"></script>

   
</body>
</html>
