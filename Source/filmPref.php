<?php

$BDDFilm = new PDO('mysql:host=localhost; dbname=BDDFilm; charset=utf8', 'BDDFilms', 'comake');

$reponse = $BDDFilm->query('SELECT * FROM Film');

while ($donnees = $reponse->fetch()){
    echo '<option>' . $donnees['nomFilm'] . '</option>';
};
?>