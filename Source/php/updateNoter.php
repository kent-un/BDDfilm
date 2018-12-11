<?php
$idFilm= $_GET['idFilm'];
//ouverture de connection a la BDD BDDFilm
$BDDFilm = new PDO('mysql:host=localhost; dbname=BDDFilm; charset=utf8', 'BDDFilms', 'comake');

//préparation de la requete d'insertion (SQL) 
$pdoStat = $BDDFilm->query('SELECT ROUND(AVG(noteUtilisateur),1) AS NoteMoyenne FROM Note WHERE idFilm = '.$idFilm.' ');

while( $donnees = $pdoStat->fetch() )
    {
        echo 'Ce film est noté '.$donnees['NoteMoyenne'].'/5<br>';


    }



?>