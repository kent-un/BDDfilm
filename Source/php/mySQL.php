<?php
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
    
    require 'class/film.php';
    $response = $bdd->query("SELECT nomFilm, afficheFilm, resumeFilm, anneeFilm, 
    dureeFilm, lienBandeAnnonce, pseudoUtilisateur, nomPays FROM Film 
    inner JOIN Utilisateur on Film.idUtilisateur = Utilisateur.idUtilisateur
    inner JOIN Vient_de on Film.idFilm = Vient_de.idFilm
    inner JOIN Pays on Vient_de.idPays = Pays.idPays
    ORDER By Film.idfilm ASC");
    $response1 = $bdd->query("SELECT Film.idFilm, GROUP_CONCAT(nomGenre) AS concatGenre 
    FROM Film LEFT JOIN Est_genre on Est_genre.idFilm = Film.idFilm 
    LEFT JOIN Genre on Est_genre.idGenre = Genre.idGenre 
    Group BY Film.idFilm
    ORDER By Film.idfilm ASC"); 
    $response2 = $bdd->query("SELECT Film.idFilm, GROUP_CONCAT(nomPersonne) as concatAct FROM Film 
    LEFT JOIN Joue_Dans on Joue_Dans.idFilm = Film.idFilm 
    LEFT JOIN Personne on Personne.idPersonne = Joue_Dans.idPersonne 
    Group BY Film.idFilm
    ORDER By Film.idfilm ASC"); 
    $response3 = $bdd->query("SELECT Film.idFilm, Group_CONCAT(nomPersonne) as concatReal FROM Film 
    LEFT JOIN A_realise on A_realise.idFilm = Film.idFilm 
    LEFT JOIN Personne on Personne.idPersonne = A_realise.idPersonne 
    Group BY Film.idFilm
    ORDER By Film.idfilm ASC");

    while($donnees = $response->fetch()){  
            $film[] = new film($donnees['nomFilm'], $donnees['afficheFilm'], $donnees['resumeFilm'],$donnees['anneeFilm'],
            $donnees['dureeFilm'], $donnees['nomPays'], $donnees['lienBandeAnnonce'], $donnees['pseudoUtilisateur']
            );
    }
    for($x=0; $x<count($film) ; $x++){
        $donnees1 = $response1->fetch();
        $film[$x]->setConcatGenre($donnees1['concatGenre']);
        $donnees2 = $response2->fetch();
        $film[$x]->setConcatAct($donnees2['concatAct']);
        $donnees3 = $response3->fetch();
        $film[$x]->setConcatReal($donnees3['concatReal']);
    }



var_dump($film);

    
?>