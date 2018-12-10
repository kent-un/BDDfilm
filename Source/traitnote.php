<?php

$Note = $_POST['stars'];
$film = $_POST['ChoixFilm'];
$perso = $_POST['ChoixPerso'];

var_dump($_POST);

//ouverture de connection a la BDD BDDFilm
$BDDFilm = new PDO('mysql:host=localhost; dbname=BDDFilm; charset=utf8', 'BDDFilms', 'comake');

//préparation de la requete d'insertion (SQL) 
$pdoStat = $BDDFilm->prepare('insert into Note value(null, :noteUtilisateur, :idFilm, :idUtilisateur)');

//on lie chaque marqueur à une valeur
$pdoStat->bindValue(':idUtilisateur', $_POST['stars'], PDO::PARAM_STR);
$pdoStat->bindValue(':noteUtilisateur', $_POST['ChoixPerso'], PDO::PARAM_STR);
$pdoStat->bindValue(':idFilm', $_POST['ChoixFilm'], PDO::PARAM_STR);

//exécution de la requete préparée
$insertIsOk = $pdoStat->execute();

if($insertIsOk) {
  echo 'le formulaire a été ajouté dans la BDD';
}
else {
    echo 'Echec de l\'insertion';
}
?>

<!--
//ouverture de connection a la BDD BDDFilm
$BDDFilm = new PDO('mysql:host=localhost; dbname=BDDFilm; charset=utf8', 'BDDFilms', 'comake');

//préparation de la requete d'insertion (SQL) 
$sql = "insert into Note (noteUtilisateur, idFilm, idUtilisateur) values('$Note', '$film', '$perso')";

$stmt = $BDDFilm->prepare($sql);

//on lie chaque marqueur à une valeur

//exécution de la requete préparée
$stmt->execute();
-->

