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
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a type="button" class="btn btn-sm btn-outline-secondary">
                        <span data-feather="plus"></span>
                        Ajouter un ticket</a>
                </div>
            </div>
        </div>
    </div>
    <h2>Liste des tickets</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Emetteur</th>
                    <th>transport concerné</th>
                    <th>date demande</th>
                    <th>nb de place réservé</th>
                    <th>commentaire</th>
                    <th>est validé ?</th>
                    <th>date de validation</th>
                    <th>Annuler</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i < 17; $i++) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>JM TARTENPION</td>
                        <td><a href="../manager-transport.php">page transport</td>
                        <td>18/02/2021</td>
                        <td>2</td>
                        <td>Hello world</td>
                        <td>NON</td>
                        <td>null</td>
                        <td><a href="#">Annuler</a></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>



<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once '../commons/footer-Admin.php'; ?>