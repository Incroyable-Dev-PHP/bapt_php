<!DOCTYPE html>
<html lang="fr">
<?php
    include 'includes\head.html';
    include 'includes\Header.html';
    include 'includes\ul.html';
    ?>

    <body>
        <div class="container">
        <?php
                if (isset($_GET['about-me'])) {
                    include './pages/about-me.html';
                } elseif (isset($_GET['my-dreams'])) {
                    include './pages/my-dreams.html';
                } elseif (isset($_GET['my-passions'])) {
                    include './pages/my-passions.html';
                } else {
                    include './pages/home.html';
                }
            ?>
        </div>
    </body>
    <?php
    include 'includes\footer.html';
    ?>
</html>
