<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <?php include('php/mySQL.php');?>
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
    <title>Modifier un film | D codeurs du lac</title>
</head>

<body>
    <?php include('php/header.php');?>
    <main>
        <h1>Modifier les films</h1>

        <form id="form" method="GET">
        <div class="form-group">
        <label id="label" for="formModif">Sélectionner votre film</label>
            <select multiple class="form-control" id="formModif" name="selectedFilm" onclick="affEnr(this.value)">
            
            <?php 
                for($x=0; $x<count($film) ; $x++){
                echo '<option class="listFilm" value="'.$x.'">'.$film[$x]->getNomFilm().'</option>';
                }
            ?>  

            </select>
        </div>
        </form>

        <!-- <form method="POST" action="php/formModifier.php" > -->
        <form method="POST">
        <div id="formLoaded">

           <?php include('php/validModif.php');?>

        </div>
        </form>


    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/jquery-ui/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modifier.js"></script>


</body>
</html>