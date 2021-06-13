<!-- Including header partial -->
<?php
include "partials/header.php";
?>

<!-- Header-->
<header class="masthead d-flex align-items-center">
    <div class="container px-4 px-lg-5 text-center">
        <h1 class="mb-1 text-white">Museum</h1>
        <h3 class="mb-5 text-white">Play Back and Data Analytics</h3>
        <button class="button-3d" id="button" onclick="location.href='view/playback.php'"> Play </button>
        <button class="button-3d" id="button" onclick="location.href='view/analytics.php'"> Analytics </button>
        <br><br>
        <button class="btn text-white" style="font-weight: bold;" id="button" onclick="window.open('../assets/Project Report - ATCS - Assignment of Museum Development Project - Tech4CH - Alejandro Mallon Buitrago - 571179 - 05441412A.pdf', '_blank'); window.open('../assets/User Guide - ATCS - Assignment of Museum Development Project - Tech4CH - Alejandro Mallon Buitrago - 571179 - 05441412A.pdf', '_blank');"> - Project Documentation - </button>
        <br>
        <button class="btn text-white" style="font-weight: bold;" id="button" onclick=""> Github Source Code </button>

    </div>
</header>

<!-- Including footer partial -->
<?php
include "partials/footer.php";
?>