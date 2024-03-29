<?php
$titlePage = "plan";
$h1 = "Plan du site";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->


<h2>Partie site web</h2>


<ul>
    <li><a href="index.php">page d'accueil</a><span class="ms-3">=> accueil du site, zone de filtre/recherche, affichage des events</span></li>
    <li><a href="connexion.php">page de connexion</a><span class="ms-3">=> page permettant de se connecter pour les utilisateurs et les organisateurs. (et les admins?)</span></li>
    <li><a href="register.php">page d'inscription</a><span class="ms-3">=> page permettant de s'inscrire pour les utilisateurs et les organisateurs</span></li>
    <li><a href="plan.php">plan du site</a><span class="ms-3">=> liste de toutes les pages accessibles du site</span></li>
    <li><a href="faq-user-liste.php">page FAQ</a><span class="ms-3">=> Questions et réponses mises en formes</span></li>
    <li><a href="faq-user-form.php">page poser une question</a><span class="ms-3">=> formulaire pour poser une question</span></li>
    <li><a href="plan.php">plan du site</a><span class="ms-3">=> liste de toutes les pages accessibles du site</span></li>




    <li><strong>Gestion des Events :</strong></li>
    <ul>
        
        <li><a href="creation-event.php">création d'un event</a><span class="ms-3">=> formulaire permettant de créer un event (organisateur)</span></li>
        <li><a href="event.php">afficher un event</a><span class="ms-3">=> page de l'event selectionner / affichage des infos de l"event (utilisateur et organisateur)</span></li>
        <li><a href="modification-event.php">modifier un event</a><span class="ms-3">=> page permettant de modifer un event (organisateur)</span></li>
    </ul>
    <li><strong>Gestion des Transports :</strong></li>
    <ul>
        <li><a href="creation-transport.php">proposer un transport</a><span class="ms-3">=> formulaire permettant de proposer un transport (utilisateur/manager)</span></li>
        <li><a href="modification-transport.php">modifier un transport</a><span class="ms-3">=> formulaire permettant de modifier un transport (utilisateur/manager)</span></li>
        <li><a href="event-transports.php">liste des transports d'un event</a><span class="ms-3">=> Liste des transports proposés sur l'évent, filtrable (utilisateur)</span></li>
        <li><a href="transport.php">infos sur un transport</a><span class="ms-3">=> informations du transport séléctionné (utilisateur)</span></li>
        <li><a href="manager-transport.php">manager son transport</a><span class="ms-3">=> informations sur un transport proposé par le manager. gestion des demandes de tickets... (utilisateur/manager)</span></li>
    </ul>
    
</ul>
<h5>Dashboard Utilisateur :</h5>
<ul>
    <li><a href="dash-user-profil.php">profil utilisateur</a><span class="ms-3">=> profil/infos de l'utilisateur (et modification du profil pour l'instant)</span></li>
    <li><a href="dash-user-events.php">liste events/transports utilisateur</a><span class="ms-3">=> listes des events/transports à venir de l'utilisateur</span></li>
    <li><a href="dash-user-archives.php">historique utilisateur</a><span class="ms-3">=> historiques des events/transports de l'utilisateut</span></li>
</ul>
<h5>Dashboard Organisateur :</h5>
<ul>
    <li><a href="dash-organizer-profil.php">profil organisateur</a><span class="ms-3">=> profil/infos de l'utilisateur (et modification du profil pour l'instant)</span></li>
    <li><a href="dash-organizer-events.php">liste events à venir</a><span class="ms-3">=> listes des events/transports à venir de l'utilisateur</span></li>
    <li><a href="dash-organizer-archives.php">historique des events</a><span class="ms-3">=> historiques des events/transports de l'utilisateut</span></li>
</ul>

<h2>Partie Admin</h2>
<ul>
    <li><a href="dash-admin.php">dashboard admin</a><span class="ms-3">=> espace d'administration</span></li>
    <h5>Gestion :</h5>
    <ul>        
        <li><a href="register-demands-list.php">Demandes d'inscription</a><span class="ms-3">=> liste des demandes d'inscription des utilisateurs et organisateurs, permettant de valider ou non.</span></li>
    </ul>
    <h5>FAQ :</h5>
    <ul>
        <li><a href="faq-admin-liste.php">liste des questions users (faq)</a><span class="ms-3">=> liste des questions(+sujet) des users (archivables ou supprimables) par l'admin</span></li>
        <li><a href="faq-admin-form.php">formulaire de question réponse (faq)</a><span class="ms-3">=> formulaire pour entrez une nouvelle question et une réponse, pour agrementer la FAQ (admin)</span></li>
    </ul>
    <h5>CRUD :</h5>
    <ul>
        <li><a href="#">users</a><span class="ms-3">=> </span></li>
        <li><a href="#">events</a><span class="ms-3">=> </span></li>
        <li><a href="#">transports</a><span class="ms-3">=> </span></li>
        <li><a href="#">tickets</a><span class="ms-3">=> </span></li>
        <li><a href="#">categories</a><span class="ms-3">=> </span></li>
        <li><a href="#">social network</a><span class="ms-3">=> </span></li>
        <li><a href="#">groupe d'events</a><span class="ms-3">=> </span></li>
    </ul>
    
</ul>

<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
