<?php 
$_SESSION['idFilmAModifier'] = $_GET['idFilm'];
include('php/recupModif.php');
?>


<form class="needs-validation" novalidate>
<div class="form-row">

  <div class="col-md-12 mb-3">
      <label for="validationCustom01">Titre du Film</label>
      <input type="text" class="form-control" id="validationCustom01" name="inputNomFilm" value='<?php echo $film[0]->getNomFilm()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom01">Année Film</label>
      <input type="text" class="form-control" id="validationCustom01" name="inputAnneeFilm" value='<?php echo $film[0]->getAnneeFilm()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">Durée Film</label>
      <input type="text" class="form-control" id="validationCustom02" name="inputDureeFilm" value='<?php echo $film[0]->getDureeFilm()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">Pays</label>
      <input type="text" class="form-control" id="validationCustom02" name="inputPaysFilm" value='<?php echo $film[0]->getNomPays()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">Genre</label>
      <input type="text" class="form-control" id="validationCustom02" name="inputGenreFilm" value='<?php echo $film[0]->getConcatGenre()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Realisateur</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputRealFilm" value='<?php echo $film[0]->getReal()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>
 
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Pays Realisateur</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputPaysReal" value='<?php echo $film[0]->getPaysReal()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Acteur1</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputAct1" value='<?php echo $film[0]->getAct1()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Pays Acteur1</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputAct1Pays" value='<?php echo $film[0]->getPaysAct1()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Acteur2</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputAct2" value='<?php echo $film[0]->getAct2()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Pays Acteur2</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputAct2Pays" value='<?php echo $film[0]->getPaysAct2()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>

    <div class="col-md-12 mb-3">
        <label for="exampleFormControlTextarea1">Résumé du film</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="inputResumeFilm"><?php echo $film[0]->getResumeFilm()?></textarea>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom03">URL Affiche</label>
      <input type="text" class="form-control" id="validationCustom03" name="inputUrlAff" value='<?php echo $film[0]->getAfficheFilm()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom04">URL Bande Annonce</label>
      <input type="text" class="form-control" id="validationCustom04" name="inputUrlBA" value='<?php echo $film[0]->getlienBandeAnnonce()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>

  <div class="col-md-4 mb-3">
      <label for="validationCustom05">Mot Clé 1</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputMotCle1" value='<?php echo $film[0]->getMotCle1()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Mot Clé 2</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputMotCle2" value='<?php echo $film[0]->getMotCle2()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Mot Clé 3</label>
      <input type="text" class="form-control" id="validationCustom05" name="inputMotCle3" value='<?php echo $film[0]->getMotCle3()?>' required>
      <div class="invalid-feedback">
      Looks good!
      </div>
    </div>
</div>

    <button class="btn btn-primary" name="modif" type="submit">Modifier le Film</button>
</form>

</div>


