<?php
$titlePage = "Tableau de bord";
$h1 = "Liste des utilisateurs";
require_once '../commons/header-Admin.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a type="button" class="btn btn-sm btn-outline-secondary">
                        <span data-feather="plus"></span>
                        Ajouter un catégorie</a>
                </div>
            </div>
        </div>
    </div>
    <h2>Liste des Catégories d'events</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Couleur</th>
                    <th>Image</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i < 17; $i++) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>Concert</td>
                        <td><a href="#" style="display:block; width:25px; height:25px; background-color:blue;"></a></td>
                        <td><img style="width:25px;"src="../img/logo.png"></td>
                        <td><a href="#">Modifier</a></td>
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