

<?php

for ($i = 0; $i < 1; $i++) {
?>

    <div class="itemRecent">

    <?php
    for ($j = 0; $j < 3; $j++) {
    ?>
        <div class="card">
            <a href="index.php?page=carousel-3D">
                <img src="assets/images/univers/jeux-aventure.png" alt="Image">
                <div class="overley1 card-img-overlay d-flex flex-column justify-content-between">
                    <h3 class="card-title">Titre de l'élément</h3>
                    <h4 class="card-text">Auteur de l'élément</h4>
                </div>
            </a>
        </div>
    <?php
    }
    ?>

    </div>
<?php
}

?>