<?php
require_once "head.html";
require_once "header.html";
?>
<div>
    <div class="row justify-content-end">
        <div class="col-6">
            <p class="text-center">Sabine PERONCZYK</p>
            <p class="text-left">France</p>
            <p class="text-left">Merci d'avoir visité mes pages, vous pouvez m'envoyer vos commentaires. A bientôt</p>
            <p class="text-left">contact@sabineperonczyk.com</p>
            <p class="text-left sizeText">* ces champs sont requis.</p>
        </div>
    </div>
    <div class="row align-items-start">
        <div class="col-6">
            <h3 class="formClass">Contact</h3>
            <form method="POST" action="check_contact.php" class="formClass" name="formulaire">
                <div class="form-group">
                    <label for="text">Nom*</label>
                    <span class="spanTextRed" id="nomSpanErrorText"></span>
                    <input class="form-control text-uppercase" type="text" id="nom" name="Nom" placeholder="votre nom ici">
                </div>
                <div class="form-group">
                    <label for="text">Prénom*</label>
                    <span class="spanTextRed" id="prenomSpanErrorText"></span>
                    <input class="form-control text-capitalize" type="text" id="prenom" name="Prenom" placeholder="votre prenom ici">
                </div>
                <div class="form-group">
                    <label for="mail">Mail*</label>
                    <span class="spanTextRed" id="mailSpanErrorText"></span>
                    <input class="form-control" type="email" id="mail" name="Email" placeholder="adresse@mail.xxx">
                </div>
                <div class="form-group">
                    <label for="sujet">Sujet* </label>
                    <input class="form-control" type="text" id="sujet" name="Sujet" placeholder="sujet">
                </div>
                <div class="form-group">
                    <label for="comments">Commentaire*</label>
                    <span id="count" class="fs-6 text compteur">120</span>
                    <span class="compteurText" id="caracteres">Caractères restants</span>
                    <textarea class="form-control" type="text" id="comments" name="Commentaires" rows="4" cols="30" placeholder="vos remarques, 120 caractères max." maxlength="120"></textarea>
                </div>
                <div class="form-group">
                    <!-- how to insert a random code to valide form, no activate for the moment-->
                    <!--<input class="form-control" type="text" id="validate" name="valider" placeholder="entrez code de vérification"> -->
                    <button class="btn" id="subBtn" type="submit">envoyer votre message</button>
                    <button class="btn" id="clearBtn" type="reset">Effacer les champs</button>
                </div>
        </div>
        </form>
        <!--<button type="button" data-bs-toggle="modal" data-bs-target="#infos" class="btn btn-primary formClass">afficher modale</button>-->
        <?php
        require_once "modal.php";
        ?>
    </div>
        <?php
        require_once "footer.php";
        ?>
    </body>

    </html>