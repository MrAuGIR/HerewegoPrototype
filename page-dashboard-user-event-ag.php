<?php
$titlePage = "Dashboard";
$h1 = "DashBoard Utilisateur";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
    <div class="row mt-5">
        <div class="col-12 col-lg-2 border-end">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="page-dashboard-user-ag.php">Mon profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-dashboard-event-ag.php">Mes events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mon Historique</a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-7 border-end">
            <!-- Section event -->
            <div class="row my-3 pb-5 px-2">
                <div class="row">
                    <div class="col-12 pt-1 border-top">
                        <h4>Mes Events</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mx-2 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mx-2 mb-2 ">
                        <div class="card">
                            <div class="card-header">
                                Concert U2 - Stade de France
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Transport :</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
        </div>
    </div>
<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';