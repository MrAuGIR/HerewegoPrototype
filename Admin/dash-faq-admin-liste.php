<?php
$titlePage = "admin faq liste";
$h1 = "Les questions des utilisateurs";
require_once '../commons/header-Admin.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2>Questions reçus :</h2>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">User</th>
        <th scope="col">Sujet</th>
        <th scope="col">Question</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= 10; $i++) : ?>
        <tr>
          <th scope="row">John</th>
          <td>gestion d'un transport</td>
          <td>Comment je créé un transport ? et puis comment je le gère par la suite ?</td>
          <td><a href="" class="btn btn-danger">X</a></td>
        </tr>
      <?php endfor ?>
    </tbody>
  </table>
</div>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once '../commons/footer-Admin.php';
