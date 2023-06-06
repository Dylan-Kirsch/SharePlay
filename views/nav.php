<?php ajouterGalerie(); ?>

<header class="container-fluid p-0">
    
    <nav id="navbar" class="navbar navbar-expand-lg px-4 justify-content-between">
        
        <a id="navGauche" class="navbar-brand" href="index.php">
            <img id="logo1" class="rounded-circle" src="assets/images/logo-shareplay.png" alt="logo" />
            <span id="nomSite" class="text-capitalize">sharePlay</span>
        </a>

        <div id="creerGalerie">
            <div class="btnCreer">
                <button id="navBtn" class="btn">Créer une galerie</button>
            </div> 
            
            <?php include 'formGalerie.php'?>

        </div>


        <div class="dropAction">
            
            <?php 
            afficherUtilisateur();
            
            ?>

        </div>


    </nav>