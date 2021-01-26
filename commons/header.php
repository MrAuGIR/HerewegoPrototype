<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titlePage ?></title>
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php" title="accueil"><img class="header-logo" src="img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="page-register.php" title="Inscription">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="page-connexion.php" title="Connexion">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="deconnexion.php" title="Déconnexion">Déconnexion</a>
                        </li>                                             
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php" title="Accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="page-events.php" title="Rechercher un Evènement">Rechercher un Evènement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="page-dashboard-user-ag.php" title="Tableau de bord utilisateur">Tableau de bord</a>
                        </li>    
                        <li>
                            <a class="nav-link" aria-current="page" href="page-dashboard-user.php" title="Notification"><i class="bi bi-bell-fill text-white"></i></a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="page-dashboard-organizer.php" title="Tableau de bord organisateur">TB Orga</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="page-dashboard-admin.php" title="Tableau de bord Admin">TB Admin</a>
                        </li>          
                    </ul>
                    <form class="d-flex mx-4">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <a class="navbar-brand mb-2" href="page-profil.php" title="Profil"><i class="bi bi-person-circle fs-3"></i></a>
                </div>
            </div>
        </nav>        
    </header>
    <main class="flex-shrink-0">        
        <div class="container">
            <h1><?= $h1 ?></h1>
            <!-- DEBUT DU CONTENU SPECIFIQUE A CHAQUE PAGE -->