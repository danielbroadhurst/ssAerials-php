<?php
define('SAFETORUN', TRUE);
$mytitle = 'TV Aerial Installation';
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
// Body
// Header & Menu
?>
<div class="grid-container">
    <!-- Start of Main Container -->
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="callout">
                <h1><?php echo $mytitle ?></h1>
            </div>
        </div>
    </div>

</div> <!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>