<?php
define('SAFETORUN', TRUE);
$mytitle = 'Sky & Satellite Installation';
$myMetaDescription = 'We provide professional satellite dish (receivers) installation and setup. This will ensure that you have a high quality signal to display your channels correctly. We have over 25 years experience in working with satellite dishes.';
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
// Body
// Header & Menu
?>
<div class="grid-container" id="main-content">
    <!-- Start of Main Container -->
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h1><?php echo $mytitle ?></h1>
            <h2>Satellite Dish Installation in Manchester.</h2>
            <p>We provide professional satellite dish (receivers) installation and setup. This will ensure that you have a high quality signal to display your channels correctly. We have over 25 years experience in working with satellite dishes. We will provide you with a Free Quote before carrying out any work. </p>
            <div class="portrait-images cell">
                <img src="../img/portfolio/satellite_install_manchester_img_29.jpeg" class="float-left" alt="Satellite Installtion in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_2.jpeg" class="float-right" alt="Satellite Installtion in Manchester">
            </div>

        </div>
        <div class="large-12 cell">
            <div class="portrait-images cell">
                <img src="../img/portfolio/satellite_install_manchester_img_35.jpeg" class="float-left" alt="Satellite Installtion in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_36.jpeg" class="float-right" alt="Satellite Installtion in Manchester">
            </div>
        </div>
    </section>
</div>
<?php require(TEMPLATES_PATH . "/cta.php"); ?>
<div class="grid-container">
    <div class="grid-x grid-padding-x mt-50">
        <div class="large-6 cell">
            <h3>Freesat Satellite Dish Installation</h3>
            <p>We can install dishes for which are capable of receiving Freesat SD, Freesat HD and Freesat+. We also provide a service for maintiaing the dish and realignment. A satellite dish must have a good line of sight of the transmission beam to be able to recevie a high quality signal. Once we know your requirements then we will be able to offer you advice on how you can get the best from your dish.</p>
            <img src="../img/portfolio/satellite_install_manchester_img_3.jpeg" class="float-right" alt="Satellite Installtion in Manchester">
        </div>
        <div class="large-6 cell">
            <h3>Satellite TV Installation &amp; Repairs</h3>
            <p>If you require a satellite dish for installation we can source high quality dishes and equipment. Wether you wish to have Freesat, european satellite channels or motorised satellite systems. We can professionally and securely install these dishes to your wall or chimney stack using top quality fixings.</p>
            <div class="portrait-images">
                <img src="../img/portfolio/satellite_install_manchester_img_5.jpeg" class="float-left" alt="Satellite Installtion in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_7.jpeg" class="float-right" alt="Satellite Installtion in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_1.jpeg" class="float-left" alt="Satellite Installtion in Manchester">
            </div>
        </div>
    </div>
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h3>Areas we cover - Manchester & Greater Manchester</h3>
            <p>We are located just outside of Manchester so we cover a large area around Manchester and Greater Manchester. Should you find that your aerial has been damaged and you are close to Manchester then give us a call on 07768 600180 and we can help you get your aerial repaired qucikly.</p>
        </div>
    </section>
    <!-- End of Main Container -->
    <!-- <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h2>Get in touch with us for Satellite Installations</h2>
            <?php
            require(TEMPLATES_PATH . "/contact-form.php");
            ?>
        </div>
    </section> -->

</div><!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>