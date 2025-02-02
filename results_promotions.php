<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Rousseau 5 - For sell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link rel="stylesheet" href="css/libraries/bootstrap-multiselect.css">
    <link rel="stylesheet" href="css/libraries/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom_icons/style.css">
    <link rel="stylesheet" href="css/libraries/flickity_carousel.css">
    <link rel="stylesheet" href="css/libraries/simplebar.css">
    <link rel="stylesheet" href="css/libraries/tooltipster.bundle.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/results.css">
    <link rel="stylesheet" href="css/media_queries.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy3z5ZYvr8P0eXpKg8QhcqZU6yYg4Nl6k&libraries=drawing,places&language=en"></script>

</head>

<body id="results_promotions">

<?php $current_page = 'results_promotions'?>

<?php include 'includes/header.php'?>
<?php include 'includes/main_nav.php'?>

<main>
    <section class="results_section">
        <div class="container-fluid">
            <h1 class="margin_bottom_30">Votre recherche immobiliére</h1>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-6 margin_bottom_10">
                    <div class="view_type_container">
                        <ul class="view_type">
                            <li class="hidden-sm-down list_view_btn"><i class="icn icon-list_icn"></i>Liste (371)</li>
                            <li class="grid_view_btn active"><i class="icn icon-grid_icn"></i>Grille (371)</li>
                            <li class="map_view_btn"><i class="icn icon-map_pin"></i>Carte (152)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 offset-sm-6 col-sm-6 col-md-4 offset-md-0 col-lg-3 offset-lg-3 margin_bottom_10">
                    <select class="selectpicker" name="sorting_type">
                        <option value="">Tout</option>
                        <option value="">10 résultats par page</option>
                        <option value="">50 résultats par page</option>
                        <option value="">100 résultats par page</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="results_container grid_view">
            <div id="results_map"></div>
            <div class="container-fluid">
                <div class="carousel row">
                    <div class="carousel-cell col-xs-12 col-sm-6 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <img src="img/promotions/promotion_1.jpg" alt="object name">
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_promotions.php"><h2>La Residence du lac - Saint Prex</h2></a>
                                    <span class="properties_amount">1 propriétés</span>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Type / <span>Ville</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li><span class="icn_container tooltip" title="Unités disponibles"><i class="icn icon-rooms"></i></span><span class="prop_title">Unités disponibles</span><span class="prop_val">3/5</span></li>
                                        <li><span class="icn_container tooltip" title="Surface"><i class="icn icon-living_area"></i></span><span class="prop_title">Surface</span><span class="prop_val">50 à 200m<sup>2</sup></span></li>
                                        <li><span class="icn_container tooltip" title="Prix"><i class="icn icon-price"></i></span><span class="prop_title">Prix</span><span class="prop_val">300'000 à 1'400'000 CHF</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <img src="img/promotions/promotion_2.jpg" alt="object name">
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_promotions.php"><h2>1 Gevray</h2></a>
                                    <span class="properties_amount">1 propriétés</span>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Type / <span>Ville</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li><span class="icn_container tooltip" title="Unités disponibles"><i class="icn icon-rooms"></i></span><span class="prop_title">Unités disponibles</span><span class="prop_val">3/5</span></li>
                                        <li><span class="icn_container tooltip" title="Surface"><i class="icn icon-living_area"></i></span><span class="prop_title">Surface</span><span class="prop_val">50 à 200m<sup>2</sup></span></li>
                                        <li><span class="icn_container tooltip" title="Prix"><i class="icn icon-price"></i></span><span class="prop_title">Prix</span><span class="prop_val">300'000 à 1'400'000 CHF</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <img src="img/promotions/promotion_3.jpg" alt="object name">
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_promotions.php"><h2>LE SPORT CLUB RÉSIDENCES : CRANS-MONTANA</h2></a>
                                    <span class="properties_amount">1 propriétés</span>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Type / <span>Ville</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li><span class="icn_container tooltip" title="Unités disponibles"><i class="icn icon-rooms"></i></span><span class="prop_title">Unités disponibles</span><span class="prop_val">3/5</span></li>
                                        <li><span class="icn_container tooltip" title="Surface"><i class="icn icon-living_area"></i></span><span class="prop_title">Surface</span><span class="prop_val">50 à 200m<sup>2</sup></span></li>
                                        <li><span class="icn_container tooltip" title="Prix"><i class="icn icon-price"></i></span><span class="prop_title">Prix</span><span class="prop_val">300'000 à 1'400'000 CHF</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <img src="img/promotions/promotion_4.jpg" alt="object name">
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_promotions.php"><h2>'BELLES DRIZE' À TROINEX</h2></a>
                                    <span class="properties_amount">1 propriétés</span>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Type / <span>Ville</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li><span class="icn_container tooltip" title="Unités disponibles"><i class="icn icon-rooms"></i></span><span class="prop_title">Unités disponibles</span><span class="prop_val">3/5</span></li>
                                        <li><span class="icn_container tooltip" title="Surface"><i class="icn icon-living_area"></i></span><span class="prop_title">Surface</span><span class="prop_val">50 à 200m<sup>2</sup></span></li>
                                        <li><span class="icn_container tooltip" title="Prix"><i class="icn icon-price"></i></span><span class="prop_title">Prix</span><span class="prop_val">300'000 à 1'400'000 CHF</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <img src="img/promotions/promotion_5.jpg" alt="object name">
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_promotions.php"><h2>LES VILLAS DE LA GENÉVRIÈRE</h2></a>
                                    <span class="properties_amount">1 propriétés</span>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Type / <span>Ville</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li><span class="icn_container tooltip" title="Unités disponibles"><i class="icn icon-rooms"></i></span><span class="prop_title">Unités disponibles</span><span class="prop_val">3/5</span></li>
                                        <li><span class="icn_container tooltip" title="Surface"><i class="icn icon-living_area"></i></span><span class="prop_title">Surface</span><span class="prop_val">50 à 200m<sup>2</sup></span></li>
                                        <li><span class="icn_container tooltip" title="Prix"><i class="icn icon-price"></i></span><span class="prop_title">Prix</span><span class="prop_val">300'000 à 1'400'000 CHF</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <img src="img/promotions/promotion_6.jpg" alt="object name">
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_promotions.php"><h2>COEUR ANIÈRES</h2></a>
                                    <span class="properties_amount">1 propriétés</span>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Type / <span>Ville</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li><span class="icn_container tooltip" title="Unités disponibles"><i class="icn icon-rooms"></i></span><span class="prop_title">Unités disponibles</span><span class="prop_val">3/5</span></li>
                                        <li><span class="icn_container tooltip" title="Surface"><i class="icn icon-living_area"></i></span><span class="prop_title">Surface</span><span class="prop_val">50 à 200m<sup>2</sup></span></li>
                                        <li><span class="icn_container tooltip" title="Prix"><i class="icn icon-price"></i></span><span class="prop_title">Prix</span><span class="prop_val">300'000 à 1'400'000 CHF</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'?>

<script src="js/libraries/jquery-3.1.1.min.js"></script>
<script src="js/libraries/jquery-ui.min.js"></script>
<script src="js/libraries/bootstrap.min.js"></script>
<script src="js/libraries/bootstrap-multiselect.js"></script>
<script src="js/libraries/flickity_carousel.min.js"></script>
<script src="js/libraries/simplebar.js"></script>
<script src="js/libraries/tooltipster.bundle.min.js"></script>

<script src="js/functions.js"></script>
<script src="js/events.js"></script>
<script src="js/results.js"></script>
</body>
</html>