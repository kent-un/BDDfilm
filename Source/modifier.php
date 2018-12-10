<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <?php include('php/mySQL.php');?>
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
    <title>Modifier un film | D codeurs du lac</title>
</head>

<body>
    <?php include('php/header.php');?>
    <main>
        <h1>Modifier les films</h1>

        <form id="form" method="GET">
        <div class="form-group">
        <label id="label" for="formModif">Sélectionner votre film</label>
            <select multiple class="form-control" id="formModif" name="selectedFilm" onclick="affEnr(this.value)">
            
            <?php 
                for($x=0; $x<count($film) ; $x++){
                echo '<option class="listFilm" value="'.$x.'">'.$film[$x]->getNomFilm().'</option>';
                }
            ?>  

            </select>
        </div>
        </form>

        <!-- <form method="POST" action="php/formModifier.php" > -->
        <form method="POST">
        <div id="formLoaded">



<?php
if (isSet($_POST['modif'])){

$nomFilm = $_POST['inputNomFilm'];
$anneeFilm = $_POST['inputAnneeFilm'];
$dureeFilm = $_POST['inputDureeFilm'];
$paysFilm = $_POST['inputPaysFilm'];
$genreFilm = $_POST['inputGenreFilm'];
$realFilm= $_POST['inputRealFilm'];
$paysReal= $_POST['inputPaysReal'];
$acteur1= $_POST['inputAct1'];
$act1Pays= $_POST['inputAct1Pays'];
$acteur2= $_POST['inputAct2'];
$act2Pays= $_POST['inputAct2Pays'];
$resumeFilm = $_POST['inputResumeFilm'];
$afficheFilm = $_POST['inputUrlAff'];
$BAFilm = $_POST['inputUrlBA'];
$motCle1 = $_POST['inputMotCle1'];
$motCle2 = $_POST['inputMotCle2'];
$motCle3 = $_POST['inputMotCle3'];


$servername = "localhost";
$username = "BDDFilms";
$password = "comake";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=BDDFilm", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES utf8");
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    // pour récuperer idFilm
    $response = $bdd->query("select Film.idFilm from Film where Film.nomFilm='$nomFilm'");
    $donnees = $response->fetch(); 
    $idFilm = $donnees['idFilm'];

    // pour gerer les caractères spéciaux dans le texte
    $resumeFilm = addslashes($resumeFilm);
    // pour mettre à jour la table film
    $sql = "update Film set nomFilm ='$nomFilm', resumeFilm='$resumeFilm', anneeFilm='$anneeFilm', dureeFilm='$dureeFilm', 
            nomFilm='$nomFilm', afficheFilm='$afficheFilm', lienBandeAnnonce='$BAFilm' where Film.idFilm = '$idFilm'";           
    //prepare statement
    $stmt = $bdd->prepare($sql);
    //execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    if ($stmt->rowCount()==1)
    {
         echo '<h2>Le film "'.$nomFilm. '" a était mis à jour</h2>';
    } else {
        echo '<h2>Problème lors de la mise à jour, réessayer</h2>';
    }

}
?>
        </div>
        </form>


    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/jquery-ui/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modifier.js"></script>


</body>
</html>