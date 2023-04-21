<form method="POST" enctype="multipart/form-data">
    <div id="dropCreer">
        
        <div class="titre">
            <h3>Créer vôtre galerie</h3>
        </div>
        <div id="choixJeux">
            <h4>Choisir un jeu ou un univers de jeu</h4>


            <div class="jeux">
                <label for="Jeux">Jeux</label>

                <select id="Jeux" name="idJeu">

                    <?php

                        foreach ($jeux as $jeu): ?>
                        <option value="<?=$jeu->id?>"<?=(isset($_POST['idJeu'])&&$_POST['idJeu']==$jeu->id)?" SELECTED ":""?>><?=$jeu->titre?> <?=$jeu->photo_default?></option>

                    <?php
                    endforeach; ?>

                </select>
            </div>    

            <div class="univers">

                <label for="univers">Univers</label>

                <select id="univers" name="idUnivers">

                    <?php

                        foreach ($univers as $univer): ?>
                        <option value="<?=$univer->id?>"<?=(isset($_POST['idUnivers'])&&$_POST['idUnivers']==$univer->id)?" SELECTED ":""?>><?=$univer->titre?> <?=$univer->photo_default?></option>

                    <?php
                    endforeach; ?>

                </select>

            </div>
        </div>

        <div id="choixTags">
            <h4>Ajouter des tags</h4>
            <input type="text" id="fname" name="firstname" placeholder="Entrer un tag (facultatif)">
        </div>

        <div id="ajoutImg">
            <h4>5 images restantes</h4>
            <i class="fa-solid fa-circle-plus fa-2xl"></i>
            <h4>Ajouter une image</h4>
            <span>jpg, png 5Mo max - 5 images max</span>
        </div>

        <div id="choixGalerie">
            <h4>Choisir le type de galerie</h4>

            <select id="typeGaleries" name="typeGaleries">
                <option value="Classique">Classique</option>
                <option value="3D">3D</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <div class="btnValider">
            <input type="submit" name="creer" value="valider">
        </div>
    </div>

</form>