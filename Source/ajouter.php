<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <?php include('php/connInfos.php'); ?>
    <link rel="stylesheet" href="css/ajouter.css">
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
    <title>Ajouter un film | D codeurs du lac</title>
</head>
<body>
    <?php include('php/header.php');?>
    <main>
        <div id="titleVoir">
            <h1>Ajouter un film</h1>
        </div>
        <form method="post" action="php/formAjouter.php" id="formAjouter">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="inputUtilisateur">Nom d'utilisateur</label>
                    <select multiple class="form-control" id="selectUtilisateur" name="selectUtilisateur">
                        <?php 
                        $response4 = $bdd->query("SELECT pseudoUtilisateur FROM Utilisateur");
                        $i=1;
                        while($donnees4 = $response4->fetch()){  
                            echo '<option class="listFim" id="listFilm'.$x.'" value="'.$i.'">'.$donnees4['pseudoUtilisateur'].'</option>';
                            $i++;
                        }
                        ?> 
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="inputNomFilm">Titre du film</label>
                    <input type="text" class="form-control" id="inputNomFilm" name="inputNomFilm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="inputNomFilm">Genre du film</label>
                    <input type="text" class="form-control" id="inputGenreFilm" name="inputGenreFilm">
                </div>
                <div class="form-group col-3">
                    <label for="inputNomFilm">Durée du film</label>
                    <input type="text" class="form-control" id="inputDureeFilm" name="inputDureeFilm">
                </div>
                <div class="form-group col-3">
                    <label for="inputAnneeFilm">Année du film</label>
                    <input type="text" class="form-control ui-datepicker-inline" id="inputAnneeFilm" name="inputAnneeFilm">
                </div>
                <div class="form-group col-3">
                    <label for="inputOrigineFilm">Pays d'origine du film</label>
                    <input type="text" class="form-control ui-autocomplete" id="inputOrigineFilm" name="inputOrigineFilm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputRealFilm">Nom du réalisateur</label>
                    <input type="text" class="form-control" name="inputRealFilm" id="inputRealFilm">
                </div>
                <div class="form-group col-6">
                    <label for="inputPaysRealFilm">Pays d'origine du réalisateur</label>
                    <input type="text" class="form-control" name="inputPaysRealFilm" id="inputPaysRealFilm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputActeur1Film">Nom acteur principal</label>
                    <input type="text" class="form-control" name="inputActeur1Film" id="inputActeur1Film">
                </div>
                <div class="form-group col-6">
                    <label for="inputPays1Film">Pays d'origine acteur principal</label>
                    <input type="text" class="form-control" name="inputPays1Film" id="inputPays1Film">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputActeur2Film">Nom du deuxième acteur principal</label>
                    <input type="text" class="form-control" name="inputActeur2Film" id="inputActeur2Film">
                </div>
                <div class="form-group col-6">
                    <label for="inputPays2Film">Pays d'origine du deuxième acteur principal</label>
                    <input type="text" class="form-control" name="inputPays2Film" id="inputPays2Film">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="inputResumeFilm">Résumé du film</label>
                    <textarea type="text" class="form-control" id="inputResumeFilm" name="inputResumeFilm" rows="4"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputBAFilm">Lien de la bande annonce du film</label>
                    <input type="text" class="form-control" name="inputBAFilm" id="inputBAFilm">
                </div>
                <div class="form-group col-6">
                    <label for="inputAfficheFilm">Lien de l'affiche du film</label>
                    <input type="text" class="form-control" name="inputAfficheFilm" id="inputAfficheFilm">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="inputMC1Film">Mot-clé 1</label>
                    <input type="text" class="form-control" id="inputMC1Film" name="inputMC1Film">
                </div>
                <div class="form-group col-4">
                    <label for="inputMC1Film">Mot-clé 2</label>
                    <input type="text" class="form-control" id="inputMC2Film" name="inputMC2Film">
                </div>
                <div class="form-group col-4">
                    <label for="inputMC3Film">Mot-clé 3</label>
                    <input type="text" class="form-control" id="inputMC3Film" name="inputMC3Film">
                </div>
            </div>
            <button type="submit" name="envoi" class="btn btn-outline-light">Ajouter le film</button>
        </form>
        
    </main>
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/jquery-ui/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ajouter.js"></script>
    <script src="js/voir.js"></script>
</body>
</html>