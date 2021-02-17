<?php
$titlePage = "demandes d'inscription";
$h1 = "demandes d'inscription";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->

<div class="card-body">
    <h2 class="mb-5 text-center">Deamndes des users et organisateurs à valider</h2>
    <p>filtrable par Role (orga ou user)</p>
    <div class="accordion" id="accordionExample">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $i ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?>">
                        Demande faite le : 12/05/2020 - Par John
                    </button>
                </h2>
                <div id="collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="">
                            <fieldset disabled>
                                <div class="row pb-4">
                                    <div class="col-12 col-md-4">
                                        <div class="picture-demand">
                                            <img class="img-thumbnail" src="img/logo_user.png" alt="logo user">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <h2 class="text-uppercase">Demande pour devenir : User</h2>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="raison_sociale" class="form-label">Raison sociale</label>
                                        <input type="text" class="form-control" id="raison_sociale" value="/">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="numero_siret" class="form-label">Numero de Siret</label>
                                        <input type="text" class="form-control" id="numero_siret" value="/">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nom" value="Doe">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="prenom" class="form-label">Prenom</label>
                                        <input type="text" class="form-control" id="prenom" value="John">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" value="jd@gmail.com">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="telephone" class="form-label">Telephone</label>
                                        <input type="text" class="form-control" id="telephone" value="08 36 65 65 65">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="ville" class="form-label">Ville</label>
                                        <input type="text" class="form-control" id="ville" value="Poitiers">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="code_postal" class="form-label">Code postal</label>
                                        <input type="text" class="form-control" id="code_postal" value="86000">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="adresse" class="form-label">Adresse</label>
                                        <input type="text" class="form-control" id="adresse" value="12 rue du chêne">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="web_site" class="form-label">Web site</label>
                                        <input type="text" class="form-control" id="web_site" value="/">
                                    </div>                                    
                                </div>
                            </fieldset>  
                            <button type="submit" class="btn btn-danger w-25 m-auto">Refuser</button>
                            <button type="submit" class="btn btn-success w-25 m-auto">Valider l'inscription</button>
                        </form>      
                    </div>
                </div>
            </div>
        <?php endfor ?>
    </div>
</div>


<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
