<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sansita:wght@700&display=swap" >

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>

    <script src="assets/js/fonction.js" defer></script>
    <script src="assets/js/execution.js" defer></script>

    <title>SharePlay</title>

</head>

<body>

    <?php ajouterGalerie(); ?>

    <header class="container-fluid p-0">
        
        <nav id="navbar" class="navbar navbar-expand-lg px-4 justify-content-between">
            
            <a id="navGauche" class="navbar-brand" href="#">
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
                
                <div class="dropProfil">
                    <img id="btnProfil" src="assets/images/photo-profil.jpg" alt="photo de profil">
                </div>

            </div>


        </nav>


        <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">   
            <div class="carousel-inner">
                <?=$carouselNews?>
            </div>
        </div>
        
        
        
    </header>

    <section id="ajoutRecent">

    <h1 class="ajout px-4">Ajout récent</h1>
     
     <div id="list">
     
         <div class="itemRecent">
            <?php afficherGalerie(); ?>
         </div>
         
     </div>
        

    </section>

    

</body>
</html>