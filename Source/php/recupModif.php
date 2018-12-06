<?php
$servername = "localhost";
$username = "BDDFilms";
$password = "comake";
$x = $_SESSION['idFilmAModifier']+1;

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
    
    require 'class/film.php';
    $response = $bdd->query("SELECT nomFilm, afficheFilm, resumeFilm, anneeFilm, 
    dureeFilm, lienBandeAnnonce, pseudoUtilisateur, nomPays FROM Film 
    inner JOIN Utilisateur on Film.idUtilisateur = Utilisateur.idUtilisateur
    inner JOIN Vient_de on Film.idFilm = Vient_de.idFilm
    inner JOIN Pays on Vient_de.idPays = Pays.idPays
    WHERE Film.idFilm = $x");
    $response1 = $bdd->query("SELECT Film.idFilm, GROUP_CONCAT(nomGenre) AS concatGenre 
    FROM Film LEFT JOIN Est_genre on Est_genre.idFilm = Film.idFilm 
    LEFT JOIN Genre on Est_genre.idGenre = Genre.idGenre 
    WHERE Film.idFilm = $x
    Group BY Film.idFilm"); 
    $response2 = $bdd->query("SELECT Film.idFilm, GROUP_CONCAT(nomPersonne) as concatAct FROM Film 
    LEFT JOIN Joue_Dans on Joue_Dans.idFilm = Film.idFilm 
    LEFT JOIN Personne on Personne.idPersonne = Joue_Dans.idPersonne 
    WHERE Film.idFilm = $x
    Group BY Film.idFilm"); 
    $response3 = $bdd->query("SELECT Film.idFilm, Group_CONCAT(nomPersonne) as concatReal FROM Film 
    LEFT JOIN A_realise on A_realise.idFilm = Film.idFilm 
    LEFT JOIN Personne on Personne.idPersonne = A_realise.idPersonne 
    WHERE Film.idFilm = $x
    Group BY Film.idFilm");
    $response4 = $bdd->query("SELECT MotCle FROM Film 
    LEFT JOIN Definit on Definit.idFilm = Film.idFilm 
    LEFT JOIN MotCle on Definit.idMotCle = MotCle.idMotCle
    WHERE Film.idFilm = $x");

    $donnees = $response->fetch();  
    $film[0] = new film($donnees['nomFilm'], $donnees['afficheFilm'], $donnees['resumeFilm'],$donnees['anneeFilm'],
            $donnees['dureeFilm'], $donnees['nomPays'], $donnees['lienBandeAnnonce'], $donnees['pseudoUtilisateur']
            );

 
    $donnees1 = $response1->fetch();
    $film[0]->setConcatGenre($donnees1['concatGenre']);
    $donnees2 = $response2->fetch();
    $film[0]->setConcatAct($donnees2['concatAct']);
    $donnees3 = $response3->fetch();
    $film[0]->setConcatReal($donnees3['concatReal']);

   
    for($i=0; $i<3 ; $i++){
        $donnees4 = $response4->fetch();
        switch ($i) {
            case 0:
            $film[0]->setMotCle1($donnees4['MotCle']);
            break;
            case 1:
            $film[0]->setMotCle2($donnees4['MotCle']);
            break;
            case 2:
            $film[0]->setMotCle3($donnees4['MotCle']);
            break;
        }
    }
     
?>