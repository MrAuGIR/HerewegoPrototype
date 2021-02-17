<?php
$titlePage = "admin faq form";
$h1 = "admin faq form";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<a class="btn btn-primary" href="faq-user-liste.php" role="button">Voire la liste des questions</a>

<h2>Entrez une nouvelle question / réponse dans la FAQ</h2>

<form action="">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">La question</label>
      <input type="text" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">La réponse</label>
    </div>
    <button type="submit" class="btn btn-primary w-25 m-auto">Créer</button>
</form>


<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';