<?php 
include('php/connInfos.php');
$nbFilm = $_GET['nbFilm'];
echo '<span class="badge badge-secondary">
Ajouté par '.$film[$nbFilm]->getPseudoUtilisateur().'</span>';
echo '<br><h3>Résumé du film:</h3>';
echo '<div class="resume">'.$film[$nbFilm]->getResumeFilm().'</div>';
?>
<button class="btn btn-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Informations</button>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-info card-body">
        <?php 
        echo '<h3>Année du film:</h3>';
        echo $film[$nbFilm]->getAnneeFilm();
        echo '<h3>Durée du film:</h3>';
        echo $film[$nbFilm]->getDureeFilm().' minutes';
        echo "<h3>Pays d'origine:</h3>";
        echo $film[$nbFilm]->getNomPays();
        ?>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-info card-body">
        <?php 
        echo '<h3>Genre</h3>';
        echo $film[$nbFilm]->getConcatGenre();
        echo '<h3>Acteur(s)</h3>';
        echo $film[$nbFilm]->getConcatAct();
        echo '<h3>Réalisateur(s)</h3>';
        echo $film[$nbFilm]->getConcatReal();
        ?>
      </div>
    </div>
  </div>
</div>
<?php
echo '<br>';
echo '<a class="btn btn-outline-warning" href="'.$film[$nbFilm]->getLienBandeAnnonce().'">Bande annonce du film</a>';

?>