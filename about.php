<?php
define('SAFETORUN', TRUE);
$mytitle = 'About S & S Aerials';
$myMetaDescription = 'We have been established Aerial and Satellite installation professionals for the last 25 years and currently work in Manchester, Greater Manchester and we provide a professional service to our customers.';
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
            <p>We have been established Aerial and Satellite installation professionals for the last 25 years and we provide a professional service to our customers. We are experts in <a href="services/tv-aerial-Installation.php">TV aerial installation</a> and can install or upgrade your current setup. If you have suffered from <a href="services/aerial-storm-damage-repair.php">aerial damage</a> in a storm or then we can repair your aerial to get your TV signal back to maximum quality.</p>
            <p>Our working hours are very flexible to suit our customer requirements and we believe that we carry out a professional and honest job with all our customers. The majority of our work is via recommendation from happy customers who we have completed work for. Check out <a href="#reviews">our reviews</a> section to read some of their responses.</p>
            <div class="portrait-images">
                <img src="../img/portfolio/satellite_install_manchester_img_11.jpeg" class="float-left" alt="Aerial Installation in Manchester by S&S Aerials">
                <img src="../img/portfolio/satellite_install_manchester_img_10.jpeg" class="float-right" alt="Satellite Installation in Manchester by S&S Aerials">
            </div>
        </div>
    </section>

    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h2>Our Products & Services</h2>
            <?php require(TEMPLATES_PATH . "/products-services.php"); ?>
        </div>
    </section>

    <section>
        <?php require(TEMPLATES_PATH . "/reviews.php"); ?>
    </section>

</div> <!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>