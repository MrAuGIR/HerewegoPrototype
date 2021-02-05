<?php
$titlePage = "stats organizer";
$h1 = "Dashboard organisateur : stats";
require_once 'commons/header.php';
?>

<!-- DEBUT CONTENU DE LA PAGE -->

<div class="card text-center">
    <div class="card-header mb-5">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item w-25">
                <a class="nav-link" aria-current="true" href="dash-organizer-profil.php">Profil</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link href=" dash-organizer-events.php">Events</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link" href="dash-organizer-archives.php">Hstorique</a>
            </li>
            <li class="nav-item w-25">
                <a class="nav-link active"" href=" dash-organizer-stats.php">Statistiques</a>
            </li>
        </ul>
    </div>
    <div class="card-body">

        <h2 class="mb-5 text-center">Mes stats des events</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
