<?php 

$_SESSION['idFilmAModifier'] = $_GET['idFilm'];
include('php/recupModif.php');
?>

<form class="needs-validation" novalidate>
<div class="form-row">

  <div class="col-md-12 mb-3">
      <label for="validationCustom01">Titre du Film</label>
      <input type="text" class="form-control" id="validationCustom01" value='<?php echo $film[0]->getNomFilm()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Année Film</label>
      <input type="text" class="form-control" id="validationCustom01" value='<?php echo $film[0]->getAnneeFilm()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Durée Film</label>
      <input type="text" class="form-control" id="validationCustom02" value='<?php echo $film[0]->getDureeFilm()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Pays</label>
      <input type="text" class="form-control" id="validationCustom02" value='<?php echo $film[0]->getNomPays()?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Realisateur</label>
      <input type="text" class="form-control" id="validationCustom05" value='<?php echo $film[0]->getConcatReal()?>' required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Acteur 1</label>
      <input type="text" class="form-control" id="validationCustom05" value='<?php echo $film[0]->getConcatAct()?>' required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>

    <div class="col-md-12 mb-3">
        <label for="exampleFormControlTextarea1">Résumé du film</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ><?php echo $film[0]->getResumeFilm()?></textarea>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom03">URL Affiche</label>
      <input type="text" class="form-control" id="validationCustom03" value='<?php echo $film[0]->getAfficheFilm()?>' required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom04">URL Bande Annonce</label>
      <input type="text" class="form-control" id="validationCustom04" value='<?php echo $film[0]->getlienBandeAnnonce()?>' required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>

  <div class="col-md-4 mb-3">
      <label for="validationCustom05">Mot Clé 1</label>
      <input type="text" class="form-control" id="validationCustom05" value='<?php echo $film[0]->getMotCle1()?>' required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Mot Clé 2</label>
      <input type="text" class="form-control" id="validationCustom05" value='<?php echo $film[0]->getMotCle2()?>' required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Mot Clé 3</label>
      <input type="text" class="form-control" id="validationCustom05" value='<?php echo $film[0]->getMotCle3()?>' required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
</div>

    <button class="btn btn-primary" type="submit">Submit form</button>
</form>

</div>

