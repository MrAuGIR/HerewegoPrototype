<?php
$titlePage = "Liste transport d'un event";
$h1 = "Liste des transports proposés sur l'évent #...";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->

2/3 1/3
liste / recap


<div class="w-100 bg-info text-center">
    <h2>zone de filtre</h2>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <div class="row w-100">
                <div class="col-6">Départ de <strong>Poitiers</strong> à <strong>15h le 12/05/21</strong></div>
                <div class="col-6"><strong>2 places</strong> restantes</div>
            </div>
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Nom manager</p>
        <p>infos Aller (map)</p>
        <p>infos retour</p>
        <p>commentaires</p>
        <p>nombre de places dipsos</p>
        <a href="page-selected-transport.php">vers la page du transport</a>
      </div>
    </div>
  </div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <div class="row w-100">
                <div class="col-6">Départ de <strong>Poitiers</strong> à <strong>15h le 12/05/21</strong></div>
                <div class="col-6"><strong>2 places</strong> restantes</div>
            </div>
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Nom manager</p>
        <p>infos Aller (map)</p>
        <p>infos retour</p>
        <p>commentaires</p>
        <p>nombre de places dipsos</p>
        <a href="page-selected-transport.php">vers la page du transport</a>
      </div>
    </div>
  </div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <div class="row w-100">
                <div class="col-6">Départ de <strong>Poitiers</strong> à <strong>15h le 12/05/21</strong></div>
                <div class="col-6"><strong>2 places</strong> restantes</div>
            </div>
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Nom manager</p>
        <p>infos Aller (map)</p>
        <p>infos retour</p>
        <p>commentaires</p>
        <p>nombre de places dipsos</p>
        <a href="page-selected-transport.php">vers la page du transport</a>
      </div>
    </div>
  </div>

  
</div>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
