<div class="dropProfil">
    <i id="btnInscri" class="fa-solid fa-circle-user" style="color: #a6a6a6;"></i>
</div>

<?= inscription() ?>

<form method="POST" >
    
    <div class="dropMenu">

        <div id="inscription">

            <h1>INSCRIPTION</h1>
            
            <a id="seConnect" href="">
                <p>Vous avez déjà un compte ?</p>
            </a>

            <div id="nom">
                <input type="text" name="nom" placeholder="Nom" value="<?=isset($_POST['nom'])?$_POST['nom']:"";?>">
            </div>

            <div id="prenom">
                <input type="text" name="prenom" placeholder="Prenom" value="<?=isset($_POST['prenom'])?$_POST['prenom']:"";?>">
            </div>
            
            <div id="pseudo">
                <input type="text" name="pseudo" placeholder="Pseudo" value="<?=isset($_POST['pseudo'])?$_POST['pseudo']:"";?>">
            </div>

            <div id="email">
                <input type="email" name="email" placeholder="E-mail" value="<?=isset($_POST['email'])?$_POST['email']:"";?>">
            </div>

            <div id="password">
                <input type="password" name="mot_de_passe" placeholder="Mot de passe" value="<?=isset($_POST['mot_de_passe'])?$_POST['mot_de_passe']:"";?>">
            </div>

            <!-- <div id="verifPassword">
                <input type="password" name="verifPassword" placeholder="Confirmer mot de passe">
            </div> -->
            
            <div id="bouton">
                <input type="submit" value="S'inscrire">
            </div>

        </div>
    </div>

</form>
