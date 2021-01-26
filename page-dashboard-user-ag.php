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
                    <a class="nav-link active" aria-current="page" href="#">Mon profil</a>
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
            <!--  Section profil  -->
            <div class="row my-3 pb-5 px-2">
                <div class="row">
                    <div class="col-12 pt-1 border-top">
                        <h4>Mon profil</h4>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-12 col-md-4">
                        <div class="picture">
                            <img class="img-fluid img-thumbnail" src="img/logo_user.png" alt="logo user">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <p class="text-uppercase fs-6 fw-bold lh-1">Nom user</p>
                        <p class="text-uppercase fs-6 fw-bold lh-1">Prénom user</p>
                        <p class="fs-7 lh-1">Membre depuis le 01/11/2019</p>
                        <p class="fs-7 lh-1">Utilisateur Premium</p>
                    </div>
                </div>
                <div class="row">
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
            <div class="row my-3 pb-5 px-2">
                <div class="row">
                    <div class="col-12 pt-1 border-top">
                        <h4>Mes informations</h4>
                    </div>
                </div>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>
            <!-- Section modification mot de passe -->
            <div class="row my-3 pb-5 px-2 ">
                <div class="row">
                    <div class="col-12 pt-1 border-top">
                        <h4>Mots de passe</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ancien mot de passe</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirmer mot de passe</label>
                            <input type="email" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nouveau mot de passe</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" id="exampleInputPassword1">
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