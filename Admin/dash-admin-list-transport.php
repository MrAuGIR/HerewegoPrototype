<?php
$titlePage = "Tableau de bord";
$h1 = "Liste des utilisateurs";
require_once '../commons/header-Admin.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<style>
    td{
        font-size: small;
    }
</style>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="plus"></span>
                    Ajouter un transport</button>
            </div>
        </div>
    </div>
    <h2>Liste des Transports</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Event</th>
                    <th>Localisation départ</th>
                    <th>départ allé </th>
                    <th>arrivé allé</th>
                    <th>Localisation arrivé</th>
                    <th>depart retour </th>
                    <th>arrivé retour </th>
                    <th>Nb place total</th>
                    <th>Place restantes</th>
                    <th>Profil du manager</th>
                    <th>Liste des tickets</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i < 17; $i++) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>U2 stade de france</td>
                        <td>Marseille</td>
                        <td>18/06/2021 8h00</td>
                        <td>18/06/2021 20h00</td>
                        <td>Paris stade de france</td>
                        <td>20/06/2021 8h00</td>
                        <td>20/06/2021 20h00</td>
                        <td>4</td>
                        <td>2</td>
                        <td><a href="#">Manager</a></td>
                        <td><a href="#">Listes tickets</a></td>
                        <td><a href="#">Supprimer</a></td>
                    </tr>
                <?php endfor; ?>

            </tbody>
        </table>
    </div>
</div>



<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once '../commons/footer-Admin.php'; ?>