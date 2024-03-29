<?php
$titlePage = "Création d'un transport";
$h1 = "Proposer un transport";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
    <div class="row">
        <div class="col-2">
            <div class="absolute-navbar">
                <nav id="navbar" class="navbar navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1">Aller</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-1-1">Où ?</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-2">Quand ?</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-3">Jusqu'où ?</a>
                        </nav>
                        <a class="nav-link" href="#item-2">Retour</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1">Où ?</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2">Quand ?</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-3">Jusqu'où ?</a>
                        </nav>
                    </nav>
                </nav>
            </div>
        </div>
        <div class="col-10">
            <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" tabindex="0">
                <div id="item-1" class="row">
                    <h3>Aller</h3>
                </div>
                <div class="row make-transport">
                    <div class="col-6">
                        <h5 id="item-1-1">A partir d'où ?</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Lieu de départ">
                            <label for="floatingInput">Lieu de départ</label>
                        </div>
                    </div>
                </div>
                <div class="row make-transport">
                    <div class="col-6">
                        <h5 id="item-1-2">Quand ?</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput" placeholder="date de départ">
                            <label for="floatingInput">Date de départ</label>
                        </div>
                    </div>
                </div>
                <div class="row make-transport">
                    <div class="col-6">
                        <h5 id="item-1-3">Jusqu'où ?</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Lieu d'arrivée">
                            <label for="floatingInput">Lieu de l'event (ou proche)</label>
                        </div>
                    </div>
                </div>
                <div id="item-2" class="row">
                    <h3>Retour</h3>
                </div>
                <div class="row make-transport">
                    <div class="col-6">
                        <h5 id="item-2-1">Retour à partir de l'evenement ?</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Lieu de départ du retour">
                            <label for="floatingInput">Lieu de l'event (ou proche)</label>
                        </div>
                    </div>
                </div>
                <div class="row make-transport">
                    <div class="col-6">
                        <h5 id="item-2-2">Quand ?</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="A partir de quand ?">
                            <label for="floatingInput">Date du retour</label>
                        </div>
                    </div>
                </div>
                <div class="row make-transport">
                    <div class="col-6">
                        <h5 id="item-2-3">Jusqu'ou ?</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Jusqu'où ?">
                            <label for="floatingInput">Lieu de retour</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
