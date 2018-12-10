<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('head.php'); ?>
    <?php include('connInfos.php'); ?>
    <link rel="stylesheet" href="/css/ajouter.css">
    <link rel="stylesheet" href="/js/jquery-ui/jquery-ui.css">
    <title>Ajouter un film | D codeurs du lac</title>
</head>
<body>
    <?php include('header.php');?>
    <main>
<?php
$nomFilm = $_POST['inputNomFilm'];
$genreFilm = $_POST['inputGenreFilm'];
$anneeFilm = $_POST['inputAnneeFilm'];
$paysFilm = $_POST['inputOrigineFilm'];
$resumeFilm = $_POST['inputResumeFilm'];
$resumeFilmSlash = addslashes($resumeFilm);
$BAFilm = $_POST['inputBAFilm'];
$afficheFilm = $_POST['inputAfficheFilm'];
$acteur1= $_POST['inputActeur1Film'];
$acteur2= $_POST['inputActeur2Film'];
$pays1= $_POST['inputPays1Film'];
$pays2= $_POST['inputPays2Film'];
$real= $_POST['inputRealFilm'];
$paysReal= $_POST['inputPaysRealFilm'];
$mc1= $_POST['inputMC1Film'];
$mc2= $_POST['inputMC2Film'];
$mc3= $_POST['inputMC3Film'];
$dureeFilm= $_POST['inputDureeFilm'];
$idUtilisateur = $_POST['selectUtilisateur'];
$servername = "localhost";
$username = "BDDFilms";
$password = "comake";
$dbname = "BDDFilm";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec('SET NAMES utf8');
    
    //Vérification si existence du film dans la BDD
    $requete_pdo = $conn->prepare("SELECT nomFilm FROM Film WHERE nomFilm = '$nomFilm'");
    $requete_pdo->execute();
    if(($requete_pdo->rowCount()) != 0){
        //Si le résultat retourner par la fonction est différent de 0, alors le film existe déjà, la requête est donc annulée. 
        die('<div class="alert alert-danger">Ce film existe déjà</div>');
    }
    else{
        //Si le film n'existe pas, alors la requête continue.
        $requete_pdo->closeCursor();
        $requete_pdo = $conn->prepare("INSERT INTO Film (resumeFilm, anneeFilm, dureeFilm, nomFilm, afficheFilm, lienBandeAnnonce, idUtilisateur) VALUES ('$resumeFilmSlash', '$anneeFilm', '$dureeFilm', '$nomFilm', '$afficheFilm', '$BAFilm', '$idUtilisateur')");
        $requete_pdo->execute();
        $requete_pdo->closeCursor();

        //Vérification genre du film et insertion
        $verif_pdo = $conn->prepare("SELECT nomGenre FROM Genre WHERE nomGenre = '$genreFilm'");
        $verif_pdo->execute();
        if(($verif_pdo->rowCount()) == 0){
            $requete_pdo = $conn->prepare("INSERT INTO Genre (nomGenre) VALUES ('$genreFilm')");
            $requete_pdo->execute();
            $requete_pdo->closeCursor();
        }
        $verif_pdo->closeCursor();

        // Insertion dans table Genre 
        $requete_pdo = $conn->prepare("INSERT INTO Est_genre (idFilm, idGenre) VALUES ((SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm'), (SELECT idGenre FROM Genre WHERE nomGenre = '$genreFilm'))");
        $requete_pdo->execute();
        $requete_pdo->closeCursor();

        // Fonction de vérification et d'insertion des pays
        function verifPays($x, $y){ 
            $verif_pdo = $x->prepare("SELECT nomPays FROM Pays WHERE nomPays = '$y'");
            $verif_pdo->execute();
            if(($verif_pdo->rowCount()) == 0){  
                $requete_pdo = $x->prepare("INSERT INTO Pays (nomPays) VALUES ('$y')");
                $requete_pdo->execute();
                $requete_pdo->closeCursor();
            }
            $verif_pdo->closeCursor();
        } 
        verifPays($conn, $pays1);
        verifPays($conn, $pays2);
        verifPays($conn, $paysReal);
        verifPays($conn, $paysFilm);
    

        //Fonction de vérification et d'insertion des personnes
        function verifPersonne($y, $i, $x){
            $verif_pdo= $y->prepare("SELECT nomPersonne FROM Personne WHERE nomPersonne = '$i'");
            $verif_pdo->execute();
            if(($verif_pdo->rowCount()) == 0){  
                $requete_pdo = $y->prepare("INSERT INTO Personne (nomPersonne, idPays) VALUES ('$i', (SELECT idPays FROM Pays WHERE nomPays = '$x'))");
                $requete_pdo->execute();
                $requete_pdo->closeCursor();
            }
            $verif_pdo->closeCursor();
        }
        verifPersonne($conn, $acteur1, $pays1);
        verifPersonne($conn, $acteur2, $pays2);
        verifPersonne($conn, $real, $paysReal);


        //Insertion du réalisateur dans la table de jointure 'a_realisé'  
        $requete_pdo = $conn->prepare("INSERT INTO A_realise (idPersonne, idFilm) VALUES ((SELECT idPersonne FROM Personne WHERE nomPersonne = '$real'), (SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm'))");
        $requete_pdo->execute();
        $requete_pdo->closeCursor();

        //Insertion des acteurs dans la table de jointure 'joue_dans'
        $requete_pdo = $conn->prepare("INSERT INTO Joue_Dans (idPersonne, idFilm) VALUES ((SELECT idPersonne FROM Personne WHERE nomPersonne = '$acteur1'), (SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm')),((SELECT idPersonne FROM Personne WHERE nomPersonne = '$acteur2'), (SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm'))");
        $requete_pdo->execute();
        $requete_pdo->closeCursor();

        //Fonction de vérification des mots clés et insertion si non existants
        function verifMC($y, $x){
            $verif_pdo= $y->prepare("SELECT MotCle FROM MotCle WHERE MotCle = '$x'");
            $verif_pdo->execute();
            if(($verif_pdo->rowCount()) == 0){  
                $requete_pdo = $y->prepare("INSERT INTO MotCle (MotCle) VALUES ('$x')");
                $requete_pdo->execute();
                $requete_pdo->closeCursor();
            }
            $verif_pdo->closeCursor();
        }
        verifMC($conn, $mc1);
        verifMC($conn, $mc2);
        verifMC($conn, $mc3);

        //Insertion des mots clés dans la table de jointure 'definit'
        $requete_pdo = $conn->prepare("INSERT INTO Definit (idMotCle, idFilm) VALUES ((SELECT idMotCle FROM MotCle WHERE MotCle = '$mc1'), (SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm')), ((SELECT idMotCle FROM MotCle WHERE MotCle = '$mc2'), (SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm')),((SELECT idMotCle FROM MotCle WHERE MotCle = '$mc3'), (SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm'))");
        $requete_pdo->execute();
        $requete_pdo->closeCursor();

        //Insertion du pays d'origine du film dans la table de jointure 'vient_de'
        $requete_pdo = $conn->prepare("INSERT INTO Vient_de (idPays, idFilm) VALUES ((SELECT idPays FROM Pays WHERE nomPays = '$paysFilm'), (SELECT idFilm FROM Film WHERE nomFilm = '$nomFilm'))");
        $requete_pdo->execute();
        $requete_pdo->closeCursor();

        echo "<div class='alert alert-success'>Le film a été ajouté avec succès!</div>";
    }}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$conn = null;

?>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/js/jquery-ui/external/jquery/jquery.js"></script>
    <script src="/js/jquery-ui/jquery-ui.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/ajouter.js"></script>
    <script src="/js/voir.js"></script>
</body>
</html>