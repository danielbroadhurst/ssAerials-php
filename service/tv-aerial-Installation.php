<?php
define('SAFETORUN', TRUE);
$mytitle = 'TV Aerial Installation';
$myMetaDescription = 'We offer a full range of digital TV aerial products and services. We supply and install TV Aerials which of high quality, this will ensure that the TV aerial installation will last many years.';
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
            <h2>Digital TV Aerial Installation in Manchester.</h2>
            <p><strong>We offer a full range of digital TV aerial products and services.</strong> We supply and install TV Aerials which of high quality, this will ensure that the TV aerial installation will last many years. We will install and set up the aerial to receive a strong signal, once we have acheived a strong signal we will tune your TV so that you have a quality picture.</p>
            <h3>Which TV Aerial do I need?</h3>
            <p>Finding the right TV Aerial can be a confusing task to carry out. If you require an aerial installation we can assist you in choosing the right products and source quality aerials for installation.</p>
            <div class="portrait-images">
                <img src="../img/portfolio/satellite_install_manchester_img_27.jpeg" class="float-left" alt="TV Aerial Installation in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_6.jpeg" class="float-right" alt="TV Aerial Installation in Manchester">
            </div>
            <p>If you are unsure about what type of aerial you require then we can offer advice and source the perfect aerial for your needs. Finding the right aerial can be confusing, but s we have over 25 years experience we can assist you in choosing the correct setup for your requirements. Yagi TV aerials are one of the most commonly used aerials in the UK. These aerials are installed on to the roof, usually to the chimney. These aerials are good for areas which have moderate to good signal.</p>

        </div>
    </section>
</div>
<?php require(TEMPLATES_PATH . "/cta.php"); ?>
<div class="grid-container">
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h3>Aerial Lashing System</h3>
            <p><strong>We secure our aerials using an aerial lashing system</strong>, which helps secure the aerial pole to a chimney by using a strong multi strang wire cable which will securely fix and share the weight to all four corners of the chimney stack.</p>
            <div class="landscape-images">
                <img src="../img/portfolio/satellite_install_manchester_img_8.jpeg" class="float-left" alt="TV Aerial Installation in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_20.jpeg" class="float-right" alt="TV Aerial Installation in Manchester">
            </div>
            <p>This a much more secure solution than a Self Supporting Bracket which are sometimes used, these are insecure and can result in damage to the chimney stack. By using the secure lashing system we can ensure you that your Digital TV Aerial will be secure.</p>
        </div>
    </section>
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h3>Areas we cover - Manchester & Greater Manchester</h3>
            <p>We are located just outside of Manchester so we cover a large area around Manchester and Greater Manchester. Should you find that your aerial has been damaged and you are close to Manchester then give us a call on 07768 600180 and we can help you get your aerial repaired qucikly.</p>
        </div>
    </section>
    <!-- End of Main Container -->
    <!-- <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h2>Get in touch with us for an Aerial Installation</h2>
            <?php
            require(TEMPLATES_PATH . "/contact-form.php");
            ?>
        </div>
    </section> -->

</div><!-- End of Main Container -->

<?php
require(TEMPLATES_PATH . "/footer.php");
?>