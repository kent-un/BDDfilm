<?php

if (isset($_POST['modif'])){

// pour gerer les caractères spéciaux dans le texte : fonction addslashes
$nomFilm = addslashes($_POST['inputNomFilm']);
$anneeFilm = $_POST['inputAnneeFilm'];
$dureeFilm = $_POST['inputDureeFilm'];
$paysFilm = $_POST['inputPaysFilm'];
$genreFilm = addslashes($_POST['inputGenreFilm']);
$realFilm= addslashes($_POST['inputRealFilm']);
$paysReal= $_POST['inputPaysReal'];
$acteur1= addslashes($_POST['inputAct1']);
$act1Pays= $_POST['inputAct1Pays'];
$acteur2= addslashes($_POST['inputAct2']);
$act2Pays= $_POST['inputAct2Pays'];
$resumeFilm = addslashes($_POST['inputResumeFilm']);
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
 
    
    // pour récuperer idFilm
    $response = $bdd->query("select Film.idFilm from Film where Film.nomFilm='$nomFilm'");
    $donnees = $response->fetch(); 
    $idFilm = $donnees['idFilm'];


    // verif des pays pour Film, realisateur, acteur1 et acteur2
    $idPaysFilm = verifPays($bdd, $paysFilm);
    // echo '<h2>idPaysFilm= '.$idPaysFilm.'</h2>';
    $idPaysReal = verifPays($bdd, $paysReal);
    // echo '<h2>idPaysReal= '.$idPaysReal.'</h2>';
    $idPaysAct1 = verifPays($bdd, $act1Pays);
    // echo '<h2>idPaysAct1= '.$idPaysAct1.'</h2>';
    $idPaysAct2 = verifPays($bdd, $act2Pays);
    // echo '<h2>idPaysAct2= '.$idPaysAct2.'</h2>';

    // Verif des personnes pour realisateur, acteur1 et acteur2
    $idReal = verifPersonne($bdd, $realFilm, $idPaysReal);
    $idActeur1 = verifPersonne($bdd, $acteur1, $idPaysAct1);
    $idActeur2 = verifPersonne($bdd, $acteur2, $idPaysAct2);

    // Verif des mots clé et creation 
    $idMotCle1 = verifMotcle($bdd, $motCle1);
    $idMotCle2 = verifMotcle($bdd, $motCle2);
    $idMotCle3 = verifMotcle($bdd, $motCle3);    

    $sql = "update Film set nomFilm ='$nomFilm', resumeFilm='$resumeFilm', anneeFilm='$anneeFilm', dureeFilm='$dureeFilm', 
            nomFilm='$nomFilm', afficheFilm='$afficheFilm', lienBandeAnnonce='$BAFilm' where Film.idFilm = '$idFilm'";           
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    // echo '<h2>'.$sql.'</h2>';

    //Mise à jour table Vient_de avec Pays du Film
    $sql = "update Vient_de set idPays='$idPaysFilm' where Vient_de.idFilm='$idFilm'";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    // echo '<h2>'.$sql.'</h2>';

    // Mise à jour de la table A_realise 
    // car il n'y a qu'un réalisateur et il est obligatoire
    $sql = "update A_realise set idPersonne='$idReal' where A_realise.idFilm='$idFilm'";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    // echo '<h2>'.$sql.'</h2>';


    // Mise à jour de la table Joue_Dans 
    // On supprime les enregistrements existants et au ecrit les nouveaux
    $sql = "delete from Joue_Dans where idFilm='$idFilm'";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    // et on insere les nouveaux mots clé
    $sql = "insert into Joue_Dans (idPersonne, idFilm) values ('$idActeur1','$idFilm')";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    $sql = "insert into Joue_Dans (idPersonne, idFilm) values ('$idActeur2','$idFilm')";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    // Mise à jour de la table du Genre


    // Mise à jour de la table Definit pour les mots clé
    // On supprime les enregistrements existants et au ecrit les nouveaux
    $sql = "delete from Definit where idFilm='$idFilm'";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    // et on insere les nouveaux mots clé
    $sql = "insert into Definit (idMotCle, idFilm) values ('$idMotCle1','$idFilm')";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    $sql = "insert into Definit (idMotCle, idFilm) values ('$idMotCle2','$idFilm')";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    $sql = "insert into Definit (idMotCle, idFilm) values ('$idMotCle3','$idFilm')";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    echo '<h2>La modification a réussie</h2>';

}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }   

}

// Verif pays pour film, réalisateur, acteur1 et acteur2
function verifPays($nompdo, $Pays) {
    $sql = "select idPays from Pays where nomPays='$Pays'";
    $stmt = $nompdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount()==0) {
        // le pays n'existe pas dans la table on fait un INSERT
        $sql = "insert into Pays (nomPays) values ('$Pays')";
        $stmt = $nompdo->prepare($sql);
        $stmt->execute();
        // echo '<h2>'.$sql.'</h2>';
    }
    // et on récupere son ID
    $sql = "select idPays from Pays where nomPays='$Pays'";
    $stmt = $nompdo->prepare($sql);
    $stmt->execute();

    $donnees = $stmt->fetch(); 
    return $donnees['idPays'];
}

 // Verif personne pour réalisateur, acteur1 et acteur2
 function verifPersonne($nompdo, $Personne, $Pays) {
    $sql = "select idPersonne from Personne where nomPersonne='$Personne'";
    $stmt = $nompdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount()==0) {
        // La personne n'existe pas dans la table on fait un INSERT et on y ajoute aussi le pays
        $sql = "insert into Personne (nomPersonne, idPays) values ('$Personne','$Pays')";
        $stmt = $nompdo->prepare($sql);
        $stmt->execute();
        // echo '<h2>'.$sql.'</h2>';
    } else {
        // on modifie juste le pays
        $sql = "update Personne set idPays=$Pays where nomPersonne='$Personne'";
        $stmt = $nompdo->prepare($sql);
        $stmt->execute();       
    }
    // et on récupere son ID
    $sql = "select idPersonne from Personne where nomPersonne='$Personne'";
    $stmt = $nompdo->prepare($sql);
    $stmt->execute();

    $donnees = $stmt->fetch(); 
    return $donnees['idPersonne'];
}

// Verif si les mots clé existent et si besoin creation
function verifMotcle($nompdo, $motCle) {
    $sql = "select idMotCle from MotCle where MotCle='$motCle'";
    $stmt = $nompdo->prepare($sql);
    $stmt->execute();
    
    if ($stmt->rowCount()==0) {
        // Le mot clé  n'existe pas dans la table on fait un INSERT 
        $sql = "insert into MotCle (MotCle) values ('$motCle')";
        $stmt = $nompdo->prepare($sql);
        $stmt->execute();
        // echo '<h2>'.$sql.'</h2>';
    }
       // et on récupere son ID
        $sql = "select idMotCle from MotCle where MotCle='$motCle'";
        $stmt = $nompdo->prepare($sql);
        $stmt->execute();

        $donnees = $stmt->fetch(); 
        return $donnees['idMotCle'];
    }
?>
