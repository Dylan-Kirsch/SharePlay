<form method="POST" enctype="multipart/form-data">

    <div id="dropCreer">

        <div class="titre">
            <h1>Créer vôtre galerie</h1>
        </div>
        <div id="choixJeux">
            <h1>Choisir un jeu ou un univers de jeu</h1>

            <div class="jeux">
                <label for="Jeux">Jeux</label>

                <select id="Jeu" name="idJeu">

                    <?php

                    foreach ($listeJeux->getdata() as $jeu): ?>
                        <option value="<?=$jeu->id?>"<?=(isset($_POST['idJeu'])&&$_POST['idJeu']==$jeu->id)?" SELECTED ":""?>><?=$jeu->titre?></option>

                    <?php
                    endforeach; ?>

                </select>
            </div>    

            <div class="univers">

                <label for="univers">Univers</label>

                <select id="univers" name="idUnivers">

                    <?php

                    foreach ($listeUnivers->getdata() as $univers): ?>
                        <option value="<?=$univers->id?>"<?=(isset($_POST['idUnivers'])&&$_POST['idUnivers']==$univers->id)?" SELECTED ":""?>><?=$univers->titre?></option>

                    <?php
                    endforeach; ?>

                </select>

            </div>
        </div>

        <div id="choixTags">
            <h1>Ajouter des tags</h1>
            <input type="text" id="fname" name="firstname" placeholder="Entrer un tag (facultatif)" value="<?=isset($_POST['libelle'])?$_POST['libelle']:"";?>">
        </div>


        <!-- <div id="ajoutImg">
            <h2>5 images restantes</h2>
            <i class="fa-solid fa-circle-plus fa-2xl"></i>
            <h1>Ajouter une image</h1>
            <span>jpg, png 5Mo max - 5 images max</span>
        </div>  -->

        <!-- <div id="choixGalerie">
            <h1>Choisir le type de galerie</h1>

            <select id="typeGaleries" name="typeGaleries">
                <option value="Classique">Classique</option>
                <option value="3D">3D</option>
                <option value="Autre">Autre</option>
            </select>
        </div> -->

        <div class="btnValider">
            <input type="submit" name="creer" value="valider">
        </div>
    </div>

</form>