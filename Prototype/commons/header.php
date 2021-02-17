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
    <link rel="stylesheet" href="styles/style_jd.css">
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
                            <a class="nav-link" aria-current="page" href="register.php" title="Inscription">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="connexion.php" title="Connexion">Connexion</a>
                        </li>
                                                                   
                                                                   
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php" title="Accueil">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="text-white">Utilisateur</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="dash-user-profil.php">profil</a>
                                </li>  
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="dash-user-events.php">events / transports</a>
                                </li>  
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="dash-user-archives.php">historique</a>
                                </li>   
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="deconnexion.php">déconnexion</a>
                                </li>                                  
                            </ul>
                        </li>   
                        <li>
                            <a class="navbar-brand" href="dash-user-profil.php" title="Profil"><i class="bi bi-person-circle fs-3"></i></a>
                        </li>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="text-white">Organisateur</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="dash-organizer-profil.php">profil</a>
                                </li>  
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="dash-organizer-events.php">events / transports</a>
                                </li>  
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="dash-organizer-archives.php">historique</a>
                                </li>  
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="dash-organizer-stats.php">statistiques</a>
                                </li> 
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="deconnexion.php">déconnexion</a>
                                </li>                                  
                            </ul>
                        </li>   
                        <li>
                            <a class="navbar-brand" href="dash-organizer-profil.php" title="Profil"><i class="bi bi-person-circle fs-3 text-white"></i></a>
                        </li>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="text-warning">Admin</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="admin/dash-admin.php">Dashboard</a>
                                </li>                                 
                            </ul>
                        </li>   
                        <li>
                            <a class="navbar-brand" href="admin/dash-admin.php" title="Profil"><i class="bi bi-person-circle fs-3 text-warning"></i></a>
                        </li>    
                    </ul>
                    
                </div>
            </div>
        </nav>        
    </header>
    <main class="flex-shrink-0">        
        <div class="container">
            <h1><?= $h1 ?></h1>
            <!-- DEBUT DU CONTENU SPECIFIQUE A CHAQUE PAGE -->