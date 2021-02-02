<?php
define('SAFETORUN', TRUE);
$mytitle = 'Contact Us';
$myMetaDescription = 'Contact us now for a Free Quote or advice on what the best aerial or satellite setup for your home. We are located in Manchester.';
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
            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                    <div class="primary callout">
                        <p><strong>Give us a call for a Free Quote for a TV Aerial or Satellite Installation:</strong><br /> Call Us on 07768 600180 or 0161 881 6515.</p>
                    </div>
                </div>
            </div>
            <!-- <?php
            require(TEMPLATES_PATH . "/contact-form.php");
            ?> -->
        </div>
    </section>

</div> <!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>