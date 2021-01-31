<?php
$titlePage = "Informations d'un transport";
$h1 = "Informations transport #...";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->

<div>
    <h2>Recapitulatif du transport</h2>
    <p>nom du responsable</p>
    <p>Aller - lieu de rendez vous - heure de départ - lieu d'arrivée</p>
    <p>Retour lieu de rendez vous - heure de départ - lieu d'arrivée</p>
    <p>Commentaires dur esponsables - prix de la place</p>
    <p>nombre de places restantes</p>
</div>

<hr>

<!-- FORM -->
<form>
    <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Nombre de places à reserver</label>
        <input type="number" class="form-control" id="exampleInputNumber">
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">commentaires / questions a destination du responsable</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Faire une demande pour rejoindre le transport</button>
</form>


<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
