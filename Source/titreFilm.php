<?php 
include('php/mySQL.php');
$nbFilm = $_GET['nbFilm'];
echo $film[$nbFilm]->getNomFilm();
?>