<?php
$titlePage = "historique organizer";
$h1 = "Dashboard organisateur : Historique ";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<div class="card text-center">
    <div class="card-header mb-5">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item w-25">
                <a class="nav-link" aria-current="true" href="dash-organizer-profil.php">Profil</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link" href="dash-organizer-events.php">Events</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link active" href="dash-organizer-archives.php">Hstorique</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link" href="dash-organizer-stats.php">Statistiques</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h2 align="center" class="mb-5">Liste des events passés que j'ai organisé</h2>
        <div class="accordion" id="accordionExample">
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $i ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?>">
                            Event #<?= $i ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="box border border-primary">
                                <p>INFOS DE L'EVENT <?= $i ?></p>
                                <a href="event.php">page de l'event <?= $i ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</div>
<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';