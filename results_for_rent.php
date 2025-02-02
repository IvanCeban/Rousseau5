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
    <link rel="stylesheet" href="css/libraries/slick.css">
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

<body>

<?php $current_page = 'results_for_rent'?>

<?php include 'includes/header.php'?>
<?php include 'includes/main_nav.php'?>

<main id="results_for_sale">
    <section class="search_section">
        <div class="container-fluid">
            <div class="search_block">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-building"></i><span>Type de bien</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_type">
                                <option value="">House</option>
                                <option value="">Apartment</option>
                                <option value="">Building plot</option>
                                <option value="">Building</option>
                                <option value="">Parking space</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-building2"></i><span>Sous-categorie</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_subtype">
                                <option value="">Bastide</option>
                                <option value="">Bungalow</option>
                                <option value="">Chalet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-country"></i><span>Lieu</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_place">
                                <option value="">Geneva</option>
                                <option value="">Bern</option>
                                <option value="">Zurich</option>
                                <option value="">Paris</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-new_projects"></i><span>Projects neufs</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_rooms_number">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-rooms"></i><span>Pieces</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_surface">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-bedroom"></i><span>Chambres</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_price">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 push-md-4 col-lg-3 push-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-price"></i><span>Prix min</span></label>
                        <div class="input_container light margin_bottom_10">
                            <input type="text" placeholder="Min">
                            <div class="input_label">CHF</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 push-md-4 col-lg-3 push-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-price"></i><span>Prix max</span></label>
                        <div class="input_container light margin_bottom_10">
                            <input type="text" placeholder="Max">
                            <div class="input_label">CHF</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 pull-md-8 col-lg-2 pull-lg-6 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-living_area"></i><span>Surface habit.</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_rooms_number">
                                <option value="">100</option>
                                <option value="">200</option>
                                <option value="">300</option>
                                <option value="">400</option>
                                <option value="">500+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-4 margin_bottom_10 margin_top_30">
                        <div class="input_container light">
                            <input type="text" placeholder="Rechercher votre bien">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <div class="carousel-cell col-xs-12 col-sm-6 col-lg-4 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <div class="gallery_view">
                                    <ul class="gallery result_preview_gallery">
                                        <li><img src="img/for_sale/for_sale1.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale2.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale3.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_for_sale.php"><h2>Amazing apartment</h2></a>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Maison à vendre / <span>cologny</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                    <div class="object_price">CHF 2'990'001</div>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de chambres"><i class="icn icon-bedroom"></i></span>
                                            <span class="prop_title">Nombre de chambres</span><span class="prop_val">5</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de salles de bain"><i class="icn icon-bathroom"></i></span>
                                            <span class="prop_title">Nombre de salles de bain</span><span class="prop_val">4</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de WC"><i class="icn icon-wc"></i></span>
                                            <span class="prop_title">Nombre de WC</span><span class="prop_val">3</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface habitable"><i class="icn icon-living_area"></i></span>
                                            <span class="prop_title">Surface habitable</span><span class="prop_val">200m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface du terrain"><i class="icn icon-usable_area"></i></span>
                                            <span class="prop_title">Surface du terrain</span><span class="prop_val">300m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Etage"><i class="icn icon-outdoor_area"></i></span>
                                            <span class="prop_title">Etage</span><span class="prop_val">400m<sup>2</sup></span>
                                        </li>
                                        <li class="hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Balcon</span><span class="prop_val">4</span></li>
                                        <li class="empty hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Terrasse</span><span class="prop_val"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 col-lg-4 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <div class="gallery_view">
                                    <ul class="gallery result_preview_gallery">
                                        <li><img src="img/for_sale/for_sale2.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale1.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale3.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_for_sale.php"><h2>Amazing apartment</h2></a>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Maison à vendre / <span>cologny</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                    <div class="object_price">CHF 2'990'000</div>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de chambres"><i class="icn icon-bedroom"></i></span>
                                            <span class="prop_title">Nombre de chambres</span><span class="prop_val">5</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de salles de bain"><i class="icn icon-bathroom"></i></span>
                                            <span class="prop_title">Nombre de salles de bain</span><span class="prop_val">4</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de WC"><i class="icn icon-wc"></i></span>
                                            <span class="prop_title">Nombre de WC</span><span class="prop_val">3</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface habitable"><i class="icn icon-living_area"></i></span>
                                            <span class="prop_title">Surface habitable</span><span class="prop_val">200m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface du terrain"><i class="icn icon-usable_area"></i></span>
                                            <span class="prop_title">Surface du terrain</span><span class="prop_val">300m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Etage"><i class="icn icon-outdoor_area"></i></span>
                                            <span class="prop_title">Etage</span><span class="prop_val">400m<sup>2</sup></span>
                                        </li>
                                        <li class="hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Balcon</span><span class="prop_val">4</span></li>
                                        <li class="empty hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Terrasse</span><span class="prop_val"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 col-lg-4 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <div class="gallery_view">
                                    <ul class="gallery result_preview_gallery">
                                        <li><img src="img/for_sale/for_sale3.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale2.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale1.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_for_sale.php"><h2>Amazing apartment</h2></a>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Maison à vendre / <span>cologny</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                    <div class="object_price">CHF 2'990'000</div>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de chambres"><i class="icn icon-bedroom"></i></span>
                                            <span class="prop_title">Nombre de chambres</span><span class="prop_val">5</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de salles de bain"><i class="icn icon-bathroom"></i></span>
                                            <span class="prop_title">Nombre de salles de bain</span><span class="prop_val">4</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de WC"><i class="icn icon-wc"></i></span>
                                            <span class="prop_title">Nombre de WC</span><span class="prop_val">3</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface habitable"><i class="icn icon-living_area"></i></span>
                                            <span class="prop_title">Surface habitable</span><span class="prop_val">200m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface du terrain"><i class="icn icon-usable_area"></i></span>
                                            <span class="prop_title">Surface du terrain</span><span class="prop_val">300m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Etage"><i class="icn icon-outdoor_area"></i></span>
                                            <span class="prop_title">Etage</span><span class="prop_val">400m<sup>2</sup></span>
                                        </li>
                                        <li class="hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Balcon</span><span class="prop_val">4</span></li>
                                        <li class="empty hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Terrasse</span><span class="prop_val"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 col-lg-4 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <div class="gallery_view">
                                    <ul class="gallery result_preview_gallery">
                                        <li><img src="img/for_sale/for_sale1.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale2.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale3.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_for_sale.php"><h2>Amazing apartment</h2></a>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Maison à vendre / <span>cologny</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                    <div class="object_price">CHF 2'990'000</div>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de chambres"><i class="icn icon-bedroom"></i></span>
                                            <span class="prop_title">Nombre de chambres</span><span class="prop_val">5</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de salles de bain"><i class="icn icon-bathroom"></i></span>
                                            <span class="prop_title">Nombre de salles de bain</span><span class="prop_val">4</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de WC"><i class="icn icon-wc"></i></span>
                                            <span class="prop_title">Nombre de WC</span><span class="prop_val">3</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface habitable"><i class="icn icon-living_area"></i></span>
                                            <span class="prop_title">Surface habitable</span><span class="prop_val">200m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface du terrain"><i class="icn icon-usable_area"></i></span>
                                            <span class="prop_title">Surface du terrain</span><span class="prop_val">300m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Etage"><i class="icn icon-outdoor_area"></i></span>
                                            <span class="prop_title">Etage</span><span class="prop_val">400m<sup>2</sup></span>
                                        </li>
                                        <li class="hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Balcon</span><span class="prop_val">4</span></li>
                                        <li class="empty hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Terrasse</span><span class="prop_val"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 col-lg-4 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <div class="gallery_view">
                                    <ul class="gallery result_preview_gallery">
                                        <li><img src="img/for_sale/for_sale2.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale3.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale1.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_for_sale.php"><h2>Amazing apartment</h2></a>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Maison à vendre / <span>cologny</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                    <div class="object_price">CHF 2'990'000</div>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de chambres"><i class="icn icon-bedroom"></i></span>
                                            <span class="prop_title">Nombre de chambres</span><span class="prop_val">5</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de salles de bain"><i class="icn icon-bathroom"></i></span>
                                            <span class="prop_title">Nombre de salles de bain</span><span class="prop_val">4</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de WC"><i class="icn icon-wc"></i></span>
                                            <span class="prop_title">Nombre de WC</span><span class="prop_val">3</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface habitable"><i class="icn icon-living_area"></i></span>
                                            <span class="prop_title">Surface habitable</span><span class="prop_val">200m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface du terrain"><i class="icn icon-usable_area"></i></span>
                                            <span class="prop_title">Surface du terrain</span><span class="prop_val">300m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Etage"><i class="icn icon-outdoor_area"></i></span>
                                            <span class="prop_title">Etage</span><span class="prop_val">400m<sup>2</sup></span>
                                        </li>
                                        <li class="hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Balcon</span><span class="prop_val">4</span></li>
                                        <li class="empty hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Terrasse</span><span class="prop_val"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                    <div class="carousel-cell col-xs-12 col-sm-6 col-lg-4 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <div class="gallery_view">
                                    <ul class="gallery result_preview_gallery">
                                        <li><img src="img/for_sale/for_sale3.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale1.jpg" alt=""></li>
                                        <li><img src="img/for_sale/for_sale2.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_for_sale.php"><h2>Amazing apartment</h2></a>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Maison à vendre / <span>cologny</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark_inverse">Contactez l'agent</a>
                                    <div class="object_price">CHF 2'990'000</div>
                                </div>
                                <div class="properties_container">
                                    <ul class="properties">
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de chambres"><i class="icn icon-bedroom"></i></span>
                                            <span class="prop_title">Nombre de chambres</span><span class="prop_val">5</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de salles de bain"><i class="icn icon-bathroom"></i></span>
                                            <span class="prop_title">Nombre de salles de bain</span><span class="prop_val">4</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Nombre de WC"><i class="icn icon-wc"></i></span>
                                            <span class="prop_title">Nombre de WC</span><span class="prop_val">3</span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface habitable"><i class="icn icon-living_area"></i></span>
                                            <span class="prop_title">Surface habitable</span><span class="prop_val">200m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Surface du terrain"><i class="icn icon-usable_area"></i></span>
                                            <span class="prop_title">Surface du terrain</span><span class="prop_val">300m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <span class="icn_container tooltip" title="Etage"><i class="icn icon-outdoor_area"></i></span>
                                            <span class="prop_title">Etage</span><span class="prop_val">400m<sup>2</sup></span>
                                        </li>
                                        <li class="hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Balcon</span><span class="prop_val">4</span></li>
                                        <li class="empty hidden_list"><i class="icn icon-outdoor_area"></i><span class="prop_title">Terrasse</span><span class="prop_val"></span></li>
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
<script src="js/libraries/slick.min.js"></script>
<script src="js/libraries/flickity_carousel.min.js"></script>
<script src="js/libraries/simplebar.js"></script>
<script src="js/libraries/tooltipster.bundle.min.js"></script>

<script src="js/events.js"></script>
<script src="js/results.js"></script>
<script src="js/functions.js"></script>
</body>
</html>