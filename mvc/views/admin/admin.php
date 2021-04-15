<?php
require_once "layouts/Header_admin.php";
?>
    <main>

    <?php
    require_once "pages/".$data["pages"].".php";
    ?>

    </main>
<?php
require_once "layouts/Footer_admin.php";