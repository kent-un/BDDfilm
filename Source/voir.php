<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <title>Films | D codeurs du lac</title>
</head>
<body>
    <?php include('php/header.php');?>
    <main>
        <div id="titleVoir">
            <h1>Liste des films</h1>
        </div>
        <div class="card-columns">
        <?php 
        for($x=0; $x<count($film) ; $x++){
            echo '<div class="card" id="card'.$x.'"><img class="card-img" id="img-card'.$x.'" src="'.$film[$x]->getafficheFilm().'"/><div class="overlay" id="overlay-card'.$x.'"><div class="textOverlay">En savoir plus</div></div></div>';
        }
        ?>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/voir.js"></script>
</body>
</html>