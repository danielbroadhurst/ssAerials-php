<?php
define('SAFETORUN', TRUE);
$mytitle = 'Sorry! Somethings gone wrong.';
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
            <p>Sorry we cannot find the page you are looking for.</p>
            <p>If you would like to contact us then please use our <a href="<?php echo BASE_URL; ?>contact">contact form</a> or get in touch with us on 07768 600180.</p>
        </div>
    </section>

</div> <!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>