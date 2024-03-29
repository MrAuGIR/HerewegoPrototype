<?php
$titlePage = "Gestion d'un transport";
$h1 = "Page Gestion du transport #";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    <span>Transport pour l'evenement <strong>U2 au stade de france</strong></span><br>
                </div>
                <div class="card-body">
                    <p class="card-text">De 8h300 le 19/02/2021 -----------> vers ------------> stade de france le 19/02/2021 à 21h00</p>
                    <a href="modification-transport.php" class="btn btn-primary">Modifier le transport</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-lg-8 border-end">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Numéro</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Places réservées</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Valider</th>
                    <th scope="col">Décliner</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>En attente</td>
                    <td>Jean Mi</td>
                    <td>2</td>
                    <td>Bonjour, je souhaite prendre deux places pour moi et ma <a href="#">Lire la suite</a></td>
                    <td><a href="#">Valider</a></td>
                    <td><a href=""">Annuler</a></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Validé</td>
                    <td>Marc</td>
                    <td>1</td>
                    <td>Bonjour, je souhaite prendre deux places pour moi et ma <a href="#">Lire la suite</a></td>
                    <td><a href="#">Valider</a></td>
                    <td><a href=""">Annuler</a></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Annulé</td>
                    <td>Michelle</td>
                    <td>5</td>
                    <td>Bonjour, je souhaite prendre deux places pour moi et ma <a href="#">Lire la suite</a></td>
                    <td><a href="#">Valider</a></td>
                    <td><a href=""">Annuler</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-lg-4 border-start">
            <!-- detail du ticket-->
            <div class="row border-bottom mb-3 mx-1">
                <div class="col-12">
                    <h4>Detail du ticket selectionner</h4>
                </div>
                <div class="col-12">
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0">Nom</li>
                        <li class="list-group-item border-0">Nombre de place</li>
                        <li class="list-group-item border-0">date de demande</li>
                        <li class="list-group-item border-0">commentaire</li>
                    </ul>
                </div>
    
            </div>
            <!-- detail de l'event -->
            <div class="row border-bottom mb-3 mx-1">
                <div class="col-12">
                    <h4>Event <strong>U2 au stade de France</strong></h4>
                </div>
                <div class="col-6">
                    <ul class="list-group">
                        <li class="list-group-item border-0">Date de début</li>
                        <li class="list-group-item border-0">Date de fin</li>
                        <li class="list-group-item border-0">Lieu de deroulement</li>
                        <li class="list-group-item border-0">Catégorie</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="picture border">
                        <img src="#" alt="">
                        <p>photo </p>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item border-0">Facebook</li>
                        <li class="list-group-item border-0">Twitter</li>
                        <li class="list-group-item border-0">Instagram</li>
                    </ul>
                </div>
                <div class="col-12">
                    <a href="event.php">Lien vers la page de l'event</a>
                </div>
            </div>
                
        </div>
    </div>
<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
