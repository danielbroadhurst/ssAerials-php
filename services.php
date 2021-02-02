<?php
define('SAFETORUN', TRUE);
$mytitle = 'Our Products & Services';
$myMetaDescription = 'Manchester Aerial and Satellite Installation Experts. We offer a range of services which include Digital TV Aerial Installtion and setup, satellite dish setup and installation, aerial storm damage repair, TV Wall Mounting and Setup.';
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
// Body
// Header & Menu
?>
<div class="grid-container" id="main-content">
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h1><?php echo $mytitle ?></h1>
            <?php require(TEMPLATES_PATH . "/products-services.php"); ?>
        </div>
</section>

</div> <!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>