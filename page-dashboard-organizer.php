<?php
$titlePage = "Tableau de bord";
$h1 = "Tableau de bord (organisateur)";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->


<a class="btn btn-primary" href="page-creation-event.php" role="button">Créer un event</a>

<h2>liste des events (de l'organisateur)</h2>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Event #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h4>infos</h4>
        <a class="btn btn-primary" href="page-modification-event.php" role="button">Modifier l'event</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Event #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h4>infos</h4>
        <a class="btn btn-primary" href="page-modification-event.php" role="button">Modifier l'event</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Event #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h4>infos</h4>
        <a class="btn btn-primary" href="page-modification-event.php" role="button">Modifier l'event</a>
      </div>
    </div>
  </div>
</div>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
