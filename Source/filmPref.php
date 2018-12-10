<?php

$BDDFilm = new PDO('mysql:host=localhost; dbname=BDDFilm; charset=utf8', 'BDDFilms', 'comake');

$reponse = $BDDFilm->query('SELECT idFilm, nomFilm FROM Film');

while ($donnees = $reponse->fetch()){
    echo '<option value="' . $donnees['idFilm'] . '">' . $donnees['nomFilm'] . '</option>';
};
?> 