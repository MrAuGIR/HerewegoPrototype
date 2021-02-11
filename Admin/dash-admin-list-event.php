<?php
$titlePage = "Tableau de bord";
$h1 = "Liste des utilisateurs";
require_once '../commons/header-Admin.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<style>
    td {
        font-size: small;
    }
</style>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="plus"></span>
                    Ajouter un event</button>
            </div>
        </div>
    </div>
    <h2>Liste des Events</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>Catégorie</th>
                    <th>commence le</th>
                    <th>termine le</th>
                    <th>Email</th>
                    <th>Site web</th>
                    <th>Telephone</th>
                    <th>nombre de vues</th>
                    <th>Ses transports</th>
                    <th>détails</th>
                    <th>Supprimer
                    <th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i < 18; $i++) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>U2 au stade de france</td>
                        <td>Concert</td>
                        <td>19/06/2021</td>
                        <td>21/06/2021</td>
                        <td>contact@u2.com</td>
                        <td>concert-u2.com</td>
                        <td>0398 985 9845</td>
                        <td>704875</td>
                        <td><a href="#">Liste des transports</a></td>
                        <td><a href="#">voir détails</a></td>
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