<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title><?= $titlePage ?></title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../index.php">HereWeGo</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dash-admin.php">
                                    <span data-feather="home"></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-user.php">
                                    <span data-feather="users"></span>
                                    Users
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-organizer.php">
                                    <span data-feather="star"></span>
                                    Organisateurs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-event.php">
                                    <span data-feather="shopping-cart"></span>
                                    Events
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-transport.php">
                                    <span data-feather="truck"></span>
                                    Transport
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-ticket.php">
                                    <span data-feather="bookmark"></span>
                                    Tickets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-category.php">
                                    <span data-feather="layers"></span>
                                    Catégories
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-group-event.php">
                                    <span data-feather="package"></span>
                                    Group d'Event
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-admin-list-rs.php">
                                    <span data-feather="radio"></span>
                                    Réseaux sociaux
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dash-faq-admin-liste.php">
                                    <span data-feather="message-circle"></span>
                                    Questions des utilisateurs
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>