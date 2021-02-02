<?php
define('SAFETORUN', TRUE);
$mytitle = 'Please Review our Services';
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
// Body
// Header & Menu
?>
<div class="grid-container">
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="callout">
                <h2><?php echo $mytitle ?></h2>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <div class="primary callout">
                            <p><strong>Use our review form if you would like a leave a review of the service you received from S & S Aerials.</strong></p>
                        </div>
                    </div>
                </div>
                <?php
                require(TEMPLATES_PATH . "/review-form.php");
                ?>
            </div>
        </div>
</section>

</div> <!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>