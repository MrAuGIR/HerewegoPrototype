<?php
$titlePage = "Posez votre question";
$h1 = "Posez-nous votre question";
$h4 = "Nous y repondrons dans les plus bref délais";
require_once 'commons/header.php';
?>
<!-- DEBUT CONTENU DE LA PAGE -->
<main>
    <div class="row my-2">
        <div class="col-12">
            <a href="faq-user-liste.php" title="page faq">Retour page faq</a>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-12">
            <form>
                <div class="row my-1">
                    <div class="col-12">
                        <h4>Quelle est le Sujet de votre question ?</h4>
                        <input class="form-control" type="text" placeholder="sujet" aria-label="default input example">
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Votre question</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                        <input type="submit" class="submit-faq" name="submit" value="envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    


</main>


<!-- FIN CONTENU DE LA PAGE -->
<?php
require_once 'commons/footer.php';