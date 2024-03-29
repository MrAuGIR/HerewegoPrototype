<?php
$titlePage = "Evènement Selectionné";
$h1 = "Evenement U2 au stade de France";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<div class="row d-flex justify-content-center my-5">
    <div class="col-12 col-lg-8 border-end">
        <div class="row px-2 py-2">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/stade1.jpg" class="d-block w-100" alt="SDF">
                        </div>
                        <div class="carousel-item">
                            <img src="img/stade2.jpg" class="d-block w-100" alt="SDF">
                        </div>
                        <div class="carousel-item">
                            <img src="img/stade3.jpg" class="d-block w-100" alt="SDF">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-12 mt-4 mb-4">
                <p>
                    Integer vulputate at nunc ac sollicitudin. Integer feugiat ipsum sodales arcu accumsan, sed imperdiet tellus efficitur. Aliquam erat volutpat. Sed mollis ultricies bibendum. Donec rutrum orci velit, facilisis rutrum nulla venenatis quis. Mauris egestas elementum justo, facilisis congue massa fringilla lobortis. Proin magna arcu, lobortis ut mi ac, venenatis tempor risus. Sed pretium sem eu diam pulvinar facilisis. Proin sagittis maximus libero. Vestibulum facilisis lacus non turpis consectetur, id ultricies elit vulputate. Integer ultrices elit elit, sit amet convallis nisl volutpat nec. Quisque tempus malesuada euismod. Donec ex ante, vestibulum sed semper a, egestas a est. Aliquam sodales nec ante non sodales.
                </p>
            </div>
            <div class="col-12 col-md-6 mt-4 mb-4">
                <a href="event-transports.php" class="btn btn-info">Les transports</a>
            </div>
            <div class="col-12 col-md-6 mt-4 mb-4">
                <a href="transport.php" class="btn btn-info">Proposer un transport</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="row">
            <div class="col-12 py-2">
                <button type="button" class="btn btn-success">Je participe</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="fs-5 fw-bold">Du 19/02/2021 au 21/02/2021</p>
            </div>
            <div class="col-12">
                <p class="fs-5 fw-bold">Horaire : 19h - 20 h</p>
            </div>
            <div class="col-12">
                <a href="#" title="">Voir les autres événement du même Event-group</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-2">
                <div class="border-top">
                    <span class="fs-6  lh-1">1 rue du stade france</span><br>
                    <span class="fs-6 lh-1">Saint-Denis</span><br>
                    <span class="fs-6 lh-1">France</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-2">
                <div class="border-top">
                    <span class="fs-6  lh-1">Facebook</span><br>
                    <span class="fs-6 lh-1">Twitter</span><br>
                    <span class="fs-6 lh-1">Instagram</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-2">
                <div class="border-top">
                    <span class="fs-6  lh-1"><a href="#">www.site-du-stade-france.com</a></span><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 py-2 offset-2">
                <div class="border-top">
                    <a href="https://via.placeholder.com"><img src="https://via.placeholder.com/150"></a>
                </div>
                <span><em>code d'integration</em></span>
                <a type="button" class="btn btn-secondary">Copier votre label herewego</a>
            </div>
        </div>

    </div>
</div>



<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
