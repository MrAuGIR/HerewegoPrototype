<?php
$titlePage = "Tableau de bord";
$h1 = "Tableau de bord (user)";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->

<style>
    .box {
        height: 100px;
        text-align: center;
    }
</style>
<h2>Mes participations à venir à des events</h2>

<div class="accordion" id="accordionExample">
    <!-- 1 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <div class="row w-100">
                    <div class="col-3">Nom de l'event</div>
                    <div class="col-3">12/05/21</div>
                    <div class="col-3">
                        <span class="btn btn-danger">Sans transport</span>
                    </div>
                </div>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <h2 class="box border border-primary">INFOS DE L'EVENT</h2>
                <div class="row w-100">
                    <div class="col-6 bg-danger">
                        <p class="text-center text-light">Vous n'avez pas de transport pour cet event ? </p>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary" href="page-transports-event.php" role="button">Rejoindre un transport existant</a>
                        <a class="btn btn-primary" href="page-creation-transport.php" role="button">Organiser vous-même un transport</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="row w-100">
                    <div class="col-3">Nom de l'event</div>
                    <div class="col-3">12/05/21</div>
                    <div class="col-3">
                        <span class="btn btn-warning">Demande de transport en cours</span>
                    </div>
                </div>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <h2 class="box border border-primary">INFOS DE L'EVENT</h2>
                <div class="row w-100">
                    <div class="col-6 bg-warning">
                        <p class="text-center">Vous avez fait une demande pour rejoindre un transport </p>
                        <p class="text-center">demande effectué le 12/03/2019 auprès de Michel P.</p>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary" href="#" role="button">Voir le transport</a>
                        <a class="btn btn-primary" href="#" role="button">Annuler ma demande</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="row w-100">
                    <div class="col-3">Nom de l'event</div>
                    <div class="col-3">12/05/21</div>
                    <div class="col-3">
                        <span class="btn btn-info">vous proposez un transport</span><span class="badge bg-danger">!</span>
                    </div>
                </div>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <h2 class="box border border-primary">INFOS DE L'EVENT</h2>
                <div class="row w-100">
                    <div class="col-6 bg-info">
                        <p class="text-center">Vous avez proposer un transport</p>
                        <p class="text-center">il restes des places disponibles</p>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary" href="page-manager-transport.php" role="button">Gerer mon transport</a><span class="badge bg-danger">!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <div class="row w-100">
                    <div class="col-3">Nom de l'event</div>
                    <div class="col-3">12/05/21</div>
                    <div class="col-3">
                        <span class="btn btn-success">Vous avez un transport</span>
                    </div>



                </div>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <h2 class="box border border-primary">INFOS DE L'EVENT</h2>
                <div class="row w-100">
                    <div class="col-6 bg-success">
                        <p class="text-center text-light">Vous faites parti d'un transport</p>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary" href="page-selected-transport.php" role="button">Voir mon transport</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
