<?php 
include('php/connInfos.php');
$nbFilm = $_GET['nbFilm'];
echo $film[$nbFilm]->getNomFilm();
?>