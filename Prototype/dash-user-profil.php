<?php
$titlePage = "Profil user";
$h1 = "Dashboard Utilisateur : Profil";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->

<div class="card text-center">
    <div class="card-header mb-5">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item w-25">
                <a class="nav-link active" aria-current="true" href="dash-user-profil.php">Profil</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link" href="dash-user-events.php">Events</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link" href="dash-user-archives.php">Historique</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h2 class="mb-5 text-center">Mon profil</h2>
        <!--  Section profil  -->
        <div class="row pb-4">
            <div class="col-12 col-md-4">
                <div class="picture">
                    <img class="img-thumbnail" src="img/logo_user.png" alt="logo user">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <p class="text-uppercase fs-6 fw-bold lh-1">Nom user</p>
                <p class="text-uppercase fs-6 fw-bold lh-1">Prénom user</p>
                <p class="fs-7 lh-1">Membre depuis le 01/11/2019</p>
            </div>
            <div class="col-12 mt-3">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nombre de transport éffectués</td>
                            <td>42</td>
                        </tr>
                        <tr>
                            <td>Nombre de participation à un évent</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Nombre de transport organisés</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Section information -->
        <h2 class="my-5 border-top text-center">Mes informations</h2>
        <form action="">
            <div class="row pb-4">
                <div class="col-12 col-md-6 mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="telephone" class="form-label">Telephone</label>
                    <input type="text" class="form-control" id="telephone">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="ville">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="code_postal" class="form-label">Code postal</label>
                    <input type="text" class="form-control" id="code_postal">
                </div>
                <div class="col-12 mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse">
                </div>
                <button type="submit" class="btn btn-primary w-25 m-auto">Modifier</button>
            </div>
        </form>
        <!-- Section modification mot de passe -->
        <h2 class="mb-5 border-top text-center">Mot de passe</h2>
        <form action="">

            <div class="row mb-2">
                <div class="col-12 col-md-6  mb-3">
                    <label for="ancien_pass" class="form-label">Ancien mot de passe</label>
                    <input type="password" class="form-control" id="ancien_pass">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="new_pass" class="form-label">Nouveau mot de passe</label>
                    <input type="password" class="form-control" id="new_pass">
                </div>
                <button type="submit" class="btn btn-primary w-25 m-auto">Modifier</button>
                <div class="col-12 col-md-6 mb-3">
                    <label for="confirm_pass" class="form-label">Confirmer mot de passe</label>
                    <input type="password" class="form-control" id="confirm_pass">
                </div>
            </div>
        </form>
    </div>
</div>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
