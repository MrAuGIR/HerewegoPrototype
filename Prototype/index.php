<?php
$titlePage = "Accueil Herewego";
$h1 = "HereWeGo";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <form action="page-events.php" method="POST" class="d-flex my-5 w-50 ">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form>
    </div>
</div>
<!-- Event populaire -->
<div class="row my-5 ">
    <div class="col-12">
        <h3>Evenements Populaires</h3>
    </div>
    <div class="col-12 col-md-8 col-lg-4 my-1">
        <div class="card bg-dark text-white">
            <div class="picture">
                <img src="img/stade1.jpg" class="card-img" alt="...">
            </div>
            <div class="card-img-overlay">
                <h5 class="card-title bg-text-card">U2 stade de france</h5>
                <p class="card-text bg-text-card">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text bg-text-card"><a href="event.php">page de l'event</a></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-4 my-1">
        <div class="card bg-dark text-white">
        <div class="picture">
                <img src="img/tdf.jpg" class="card-img" alt="...">
            </div>
            <div class="card-img-overlay">
                <h5 class="card-title bg-text-card">Card title</h5>
                <p class="card-text bg-text-card">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text bg-text-card"><a href="event.php">page de l'event</a></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-4 my-1">
        <div class="card bg-dark text-white">
            <div class="picture">
                <img src="img/voilier.jpg" class="card-img" alt="...">
            </div>
            <div class="card-img-overlay">
                <h5 class="card-title bg-text-card">Card title</h5>
                <p class="card-text bg-text-card">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text bg-text-card"><a href="event.php">page de l'event</a></p>
            </div>
        </div>
    </div>
</div>
<div class="row my-5">
    <div class="col-12">
        <h3>Evenements Musique</h3>
    </div>
    <div class="col-12 col-md-8 col-lg-4 my-1">
        <div class="card bg-dark text-white">
            <div class="picture">
                <img src="img/stade2.jpg" class="card-img" alt="...">
            </div>
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text bg-text-card"><a href="event.php">page de l'event</a></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-4 my-1">
        <div class="card bg-dark text-white">
        <div class="picture">
                <img src="img/jazz.png" class="card-img" alt="...">
            </div>
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text bg-text-card"><a href="event.php">page de l'event</a></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-4 my-1">
        <div class="card bg-dark text-white">
            <div class="picture">
                <img src="img/hardrock.jpg" class="card-img" alt="...">
            </div>
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text bg-text-card"><a href="event.php">page de l'event</a></p>
            </div>
        </div>
    </div>
</div>
<div class="row my-5">
    <div class="col-12">
        <h3>Catégorie d'évènements</h3>
    </div>
    <div class="col-12">
        <a href="#" type="button" class="btn btn-primary btn-lg me-2">Sport</a>
        <a href="#" type="button" class="btn btn-primary btn-lg me-2">Concert</a>
        <a href="#" type="button" class="btn btn-primary btn-lg me-2">Opérat</a>
        <a href="#" type="button" class="btn btn-primary btn-lg me-2">Musée</a>
        <a href="#" type="button" class="btn btn-primary btn-lg me-2">Manifestation</a>
        <span>filtre...</span>
    </div>
</div>
<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
