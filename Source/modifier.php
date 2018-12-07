<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <?php include('php/mySQL.php');?>
    <title>Films | D codeurs du lac</title>
</head>
<body>
    <?php include('php/header.php');?>
    <main>
        <h1>Modifier les films</h1>

        <form id="form" method="GET">
        <div class="form-group">
        <label id="label" for="formModif">Sélectionner votre film</label>
            <select multiple class="form-control" id="formModif" onclick="affEnr(this.value)">
            
            <?php 
                for($x=0; $x<count($film) ; $x++){
                echo '<option class="listFim" value="'.$x.'">'.$film[$x]->getNomFilm().'</option>';
                }
            ?>  

            </select>
            <div id="formLoaded">
            </div>

        </div>
        </form>

    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modifier.js"></script>


</body>
</html>