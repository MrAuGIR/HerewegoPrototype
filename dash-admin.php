<?php
$titlePage = "Tableau de bord";
$h1 = "Tableau de bord (admin)";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->

dashboard admin

<ul>
    <li><a href="faq-admin-liste.php">liste des questions users (faq)</a><span class="ms-3">=> liste des questions(+sujet) des users (archivables ou supprimables) par l'admin</span></li>
    <li><a href="faq-admin-form.php">formulaire de question réponse (faq)</a><span class="ms-3">=> formulaire pour entrez une nouvelle question et une réponse, pour agrementer la FAQ (admin)</span></li>
    <li><a href="register-demands-list.php">Demandes d'inscription</a><span class="ms-3">=> liste des demandes d'inscription des utilisateurs et organisateurs, permettant de valider ou non.</span></li>
</ul>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
