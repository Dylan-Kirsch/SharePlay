
<div id="leProfil" class="dropProfil">
    <span> <?=$_SESSION['pseudo']?> </span>
    <img id="btnDrop" src="assets/images/photo-profil.jpg" alt="photo de profil">
</div>

<div id="profil" class="dropMenu">
    <div class="profil">
        <img src="assets/images/photo-profil.jpg" alt="photo de profil">
        <h3>Dylan Kirsch</h3>
        <span>Kurama-X9</span>
    </div>
    <ul>
        <li class="paraProfil" >
            <a href="#">
                <i class="fa-solid fa-gear"></i>
                Paramètre du profil
            </a>
        </li>

        <li class="mesGalerie" >
            <a href="#">
                <i class="fa-solid fa-rectangle-history-circle-user"></i>
                Mes galeries
            </a>
        </li>

        <li class="touteCommu" >
            <a href="#">
                <i class="fa-solid fa-ball-pile"></i>
                Toutes les communautés
            </a>
        </li>

        <li class="news" >
            <a href="views\formulaire\news.php">
                Ajouter une news
            </a>
            
        </li>

        <li class="deconnection">
            <a href="index.php?page=logout">Deconnexion</a>
        </li>
    </ul>
</div>