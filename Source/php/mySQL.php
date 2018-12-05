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
    $response = $bdd->query("SELECT afficheFilm FROM Film");

    while($donnees = $response->fetch()){  
            $film[] = new film($donnees['afficheFilm']);
    }

?>