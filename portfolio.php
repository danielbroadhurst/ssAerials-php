<?php
define('SAFETORUN', TRUE);
$mytitle = 'Portfolio & Reviews';
$myMetaDescription = 'View a collection of satellite and aerial installation work which we have carried out for customers in the Manchester area!';
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
            <p>A collection of satellite and aerial work which we have carried out for customers in the Manchester area!</p>
            <div class="row">
                <div class="columns">
                    <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit id="portfolio">
                        <ul class="orbit-container">
                            <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                            <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                            <li class="is-active orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_1.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_2.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_3.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_4.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_5.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_6.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_7.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_8.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_9.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_10.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_11.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_12.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_13.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-images-orbit-slide">
                                    <img src="img/portfolio/satellite_install_manchester_img_14.jpeg" class="float-center" alt="Aerial & Satellite Installation">
                                </div>
                            </li>
                        </ul>
                        <nav class="orbit-bullets">
                            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                            <button data-slide="4"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="5"><span class="show-for-sr">Third slide details.</span></button>
                            <button data-slide="6"><span class="show-for-sr">Fourth slide details.</span></button>
                            <button data-slide="7"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="8"><span class="show-for-sr">Third slide details.</span></button>
                            <button data-slide="9"><span class="show-for-sr">Fourth slide details.</span></button>
                            <button data-slide="10"><span class="show-for-sr">Fourth slide details.</span></button>
                            <button data-slide="11"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="12"><span class="show-for-sr">Third slide details.</span></button>
                            <button data-slide="13"><span class="show-for-sr">Fourth slide details.</span></button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    <?php require(TEMPLATES_PATH . "/reviews.php"); ?>
    </section>

</div> <!-- End of Main Container -->

<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>