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
    $response2 = $bdd->query("SELECT Film.idFilm, nomPersonne, nomPays FROM Film 
    LEFT JOIN Joue_Dans on Joue_Dans.idFilm = Film.idFilm 
    LEFT JOIN Personne on Personne.idPersonne = Joue_Dans.idPersonne 
    LEFT JOIN Pays on Pays.idPays = Personne.idPays
    WHERE Film.idFilm = $x"); 
    $response3 = $bdd->query("SELECT Film.idFilm, nomPersonne, nomPays FROM Film 
    LEFT JOIN A_realise on A_realise.idFilm = Film.idFilm 
    LEFT JOIN Personne on Personne.idPersonne = A_realise.idPersonne 
    LEFT JOIN Pays on Pays.idPays = Personne.idPays
    WHERE Film.idFilm = $x");
    $response4 = $bdd->query("SELECT MotCle FROM Film 
    LEFT JOIN Definit on Definit.idFilm = Film.idFilm 
    LEFT JOIN MotCle on Definit.idMotCle = MotCle.idMotCle
    WHERE Film.idFilm = $x");
    $response5 = $bdd->query("SELECT MotCle FROM Film 
    LEFT JOIN Definit on Definit.idFilm = Film.idFilm 
    LEFT JOIN MotCle on Definit.idMotCle = MotCle.idMotCle
    WHERE Film.idFilm = $x");

    $donnees = $response->fetch();  
    $film[0] = new film($donnees['nomFilm'], $donnees['afficheFilm'], $donnees['resumeFilm'],$donnees['anneeFilm'],
            $donnees['dureeFilm'], $donnees['nomPays'], $donnees['lienBandeAnnonce'], $donnees['pseudoUtilisateur']
            );

 
    $donnees1 = $response1->fetch();
    $film[0]->setConcatGenre($donnees1['concatGenre']);


    for($i=0; $i<2 ; $i++){
        $donnees2 = $response2->fetch();
        switch ($i) {
            case 0:
            $film[0]->setAct1($donnees2['nomPersonne']);
            $film[0]->setPaysAct1($donnees2['nomPays']);          
            break;
            case 1:
            $film[0]->setAct2($donnees2['nomPersonne']);
            $film[0]->setPaysAct2($donnees2['nomPays']);
            break;

        }
    }

    $donnees3 = $response3->fetch();
    $film[0]->setReal($donnees3['nomPersonne']);
    $film[0]->setPaysReal($donnees3['nomPays']);          
    
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