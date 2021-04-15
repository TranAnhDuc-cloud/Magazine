<?php
require_once "layouts/Header.php";
?>
    <main>

    <?php
    require_once "pages/".$data["pages"].".php";
    ?>

    </main>
<?php
require_once "layouts/Footer.php";
?>