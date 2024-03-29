<?php
$titlePage = "Modification d'un évènement";
$h1 = "Modification d'un évènement";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<main>
    <div class="row">
        <div class="col-2">
            <div class="absolute-navbar">
                <nav id="navbar" class="navbar navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1">Information général</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-1-1">Titre</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-2">Date debut</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-3">Date fin</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-4">Description</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-5">Catégorie</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-6">Groupe d'event</a>
                        </nav>
                        <a class="nav-link" href="#item-2">Information de contact</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1">Email</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2">Numero telephone</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-3">Site web</a>
                        </nav>
                        <a class="nav-link" href="#item-2">Réseaux sociaux</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1">Facebook</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2">Twitter</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-3">Instagrams</a>
                        </nav>
                    </nav>
                </nav>
            </div>
        </div>
        <div class="col-10">
            <div class="row mb-5 pb-5 border-bottom ">
                <a href="dash-organizer-events.php">Retour tableau de bord
                </a>
            </div>
            <form>
                <div class="w-100">
                    <h6>Informations général</h6>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="titre" value="u2 au stade de france">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Débute le :</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="date de début" value="2021-09-02">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Se termine le :</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="date de fin" value="2021-09-05">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Une description pour votre event</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Concert de U2 au stade de france</textarea>
                </div>
                <div class="mb-3 pb-5 border-bottom">
                    <label for="exampleFormControlInput1" class="form-label">Dans quelle catégorie se situe-t-il ?</label>
                    <select class="form-select" aria-label="Default select example">
                        <option ></option>
                        <option selected value="1">Concert</option>
                        <option value="2">Sportif</option>
                        <option value="3">Culturel</option>
                    </select>
                </div>
                <div class="mb-3 pb-5 border-bottom">
                    <label for="exampleFormControlInput1" class="form-label">Votre event fait-il partie d'un groupement d'event ?</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Tour de France</option>
                        <option value="2">Tournée française des spice Girl</option>
                        <option value="3">Coupe de france de lancé de nain</option>
                    </select>
                </div>
                <div class="w-100">
                    <h6>Informations de contact</h6>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email de l'event</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="contact@example.com" value="contact@u2.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">numero de l'event</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="numero de téléphone" value="06 xx xx xx xx">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">site web de l'event</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="site web de l'event" value="u2.com/concert/fr/">
                </div>
                <div class="w-100">
                    <h6>Les réseaux sociaux de l'event</h6>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="facebook de l'event" value="facebook.com/fr/u2">
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Twitter de l'event"value="http://twitter.fr/u2-fgfh">
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Instagram de l'event" value="http://www.instagram.com">
                    </div>
                </div>
                <div class="w-100">
                    <h6>tags lié à votre event</h6>
                </div>
                <div class="mb-3 pb-5 border-bottom">
                    <label for="exampleFormControlInput1" class="form-label">tag séparé par des virgules (ex: musique, jazz, paris)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="liste de vos tags" value="concert, musique, rock">
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6>Vos images</h6>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Vos images</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                         </div>
                    </div>
                    <div class="col-4">
                        <div class="picture">
                            <img src="https://via.placeholder.com/150" style="width: 100px; height:auto; border:1px solid black;" alt="image provisoire">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="picture">
                            <img src="https://via.placeholder.com/150" style="width: 100px; height:auto; border:1px solid black;" alt="image provisoire">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="picture">
                            <img src="https://via.placeholder.com/150" style="width: 100px; height:auto; border:1px solid black;" alt="image provisoire">
                        </div>
                       
                    </div>
                </div>
                <div class="my-5">
                    <h6>Confirmer vos validation</h6>
                    <input type="submit" class="submit-faq w-100; " name="submit" value="Confirmation">
                </div>

            </form>
        </div>
    </div>
</main>


<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';
