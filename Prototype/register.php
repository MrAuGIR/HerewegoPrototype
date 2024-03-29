<?php
$titlePage = "Inscription";
$h1 = "Page d'inscription";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->

<form>
    <p>Vous souhaitez devenir :</p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Utilisateur du site
        </label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Organisateur d'evenement
        </label>
    </div>
    <hr>
    <p class="text-secondary">s'affiche si Organisateur</p>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Raison sociale</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">SIRET</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Web site</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <hr>
    <p class="text-secondary">s'affiche</p>
    <div class="row my-3 pb-5 px-2">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Telephone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Code postale</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pays</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

            </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Choisissez un avatar</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <button class="btn btn-primary" type="submit">S'inscrire</button>
    </div>
</form>
<p>L'inscription doit être validée... vous recevrez une réponse à votre demande sous peu</p>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
