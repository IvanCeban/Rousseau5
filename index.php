<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Rousseau 5</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link rel="stylesheet" href="css/libraries/bootstrap-multiselect.css">
    <link rel="stylesheet" href="css/libraries/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom_icons/style.css">
    <link rel="stylesheet" href="css/libraries/flickity_carousel.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media_queries.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php $current_page = 'home' ?>

<?php include 'includes/header.php'?>
<?php include 'includes/main_nav.php'?>

<main>
    <section class="top_image_section">
        <p class="title">Maison de standing</p>
        <p class="sub_title">Anières</p>
        <button class="btn light">Voir le bien</button>
    </section>
    <section class="homepage_search_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="info_block">
                        <p>Rousseau 5</p>
                    </div>
                    <div class="info_block">
                        <p>Bienvenue chez Rousseau N°5 reconnu pour son expertise dans l’achat, la location et la vente de biens d’exceptions à Genève, dans le Canton de Vaud et le Canton du Valais. Rousseau N°5 propose une large sélection de biens à la location allant des petites surfaces jusqu’à des biens de prestige ! L’agence possède également des biens à l’achat : neufs comme de l’ancien, des maisons, des appartements, des terrains ou encore des chalets sont proposés par nos équipes pour satisfaire les envies de chacun. </p>
                    </div>
                    <div class="info_block">
                        <p>Notre agence a une seule philosophie : offrir le bien qui correspond au mieux aux besoins de chaque client. Dans un accompagnement sur mesure, notre équipe est disponible pour aider nos clients dans leurs démarches de location, d’achat ou de vente d’un produit immobilier en Suisse.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a data-toggle="tab" class="nav-link" href=".rent_block">Location</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href=".sale_block">Vente</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active rent_block search_block">
                            <div class="row margin_top_10">
                                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-building"></i><span>Type de bien</span></label>
                                    <select  multiple="multiple" name="object_type" data-actions-box="true">
                                        <option value="House">House</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Building plot blabla text">Building plot blabla text</option>
                                        <option value="Building">Building</option>
                                        <option value="Parking space">Parking space</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-address"></i><span>Lieu</span></label>
                                    <select multiple="multiple" name="object_place">
                                        <option value="Geneva">Geneva</option>
                                        <option value="Bern">Bern</option>
                                        <option value="Zurich">Zurich</option>
                                        <option value="Paris">Paris</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-12 col-lg-4 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-bedrooms"></i><span>Projects Neufs</span></label>
                                    <select name="object_subtype">
                                        <option value="Bastide">Bastide</option>
                                        <option value="Bungalow">Bungalow</option>
                                        <option value="Chalet">Chalet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row margin_top_10">
                                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-rooms"></i><span>Pièces</span></label>
                                    <div class="min_select_container">
                                        <select  class="selectpicker" name="object_rooms_number">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-bedrooms"></i><span>Chambres</span></label>
                                    <div class="min_select_container">
                                        <select  class="selectpicker" name="object_price">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-12 col-lg-4 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-living_area"></i><span>Surface habit</span></label>
                                    <div class="min_select_container">
                                        <select  class="selectpicker" class="my_select2" name="object_surface">
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500+">500+</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row margin_top_10">
                                <div class="col-xs-12 col-sm-6 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-prix"></i><span>Prix min</span></label>
                                    <div class="input_container dark">
                                        <input type="text" placeholder="Min">
                                        <div class="input_label">CHF</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 margin_top_15">
                                    <label class="form_el_label dark"><i class="icn icon-prix"></i><span>Prix max</span></label>
                                    <div class="input_container dark">
                                        <input type="text" placeholder="Max">
                                        <div class="input_label">CHF</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin_top_15">
                                <div class="col-xs-12 margin_top_15">
                                    <div class="input_container dark">
                                        <input type="text" placeholder="Rechercher votre bien">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in sale_block">
                            <div class="row">
                                <div class="col-xs-12">Sale</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="carousel_section">
        <div class="container-fluid">
            <h1>Nos derniers biens</h1>
            <div class="carousel row">
                <div class="carousel-cell col-xs-12 col-sm-6 col-md-4">
                    <div class="cell_content">
                        <h2>Cologny</h2>
                        <img src="img/carousel1.jpg" alt="article image">
                        <div class="info_container">
                            <ul>
                                <li>Belle maison pieds dans l'eau</li>
                                <li>Parcelle de 2'320m<sup>2</sup></li>
                                <li>300m<sup>2</sup>, 5 ch., 4 sdb</li>
                                <li>Garage à bateaux, ponton privé</li>
                                <li>Vue spectaculaire sur le lac</li>
                            </ul>
                            <div class="object_price">CHF 9'500'000</div>
                        </div>
                        <a href="#">Voir le bien</a>
                    </div>
                </div>
                <div class="carousel-cell col-xs-12 col-sm-6 col-md-4">
                    <div class="cell_content">
                        <h2>Cologny</h2>
                        <img src="img/carousel2.jpg" alt="article image">
                        <div class="info_container">
                            <ul>
                                <li>Belle maison pieds dans l'eau</li>
                                <li>Parcelle de 2'320m<sup>2</sup></li>
                                <li>300m<sup>2</sup>, 5 ch., 4 sdb</li>
                                <li>Garage à bateaux, ponton privé</li>
                                <li>Vue spectaculaire sur le lac</li>
                            </ul>
                            <div class="object_price">Prix sur demande</div>
                        </div>
                        <a href="#">Voir le bien</a>
                    </div>
                </div>
                <div class="carousel-cell col-xs-12 col-sm-6 col-md-4">
                    <div class="cell_content">
                        <h2>Cologny</h2>
                        <img src="img/carousel3.jpg" alt="article image">
                        <div class="info_container">
                            <ul>
                                <li>Belle maison pieds dans l'eau</li>
                                <li>Parcelle de 2'320m<sup>2</sup></li>
                                <li>300m<sup>2</sup>, 5 ch., 4 sdb</li>
                                <li>Garage à bateaux, ponton privé</li>
                                <li>Vue spectaculaire sur le lac</li>
                            </ul>
                            <div class="object_price">CHF 7'500'000</div>
                        </div>
                        <a href="#">Voir le bien</a>
                    </div>
                </div>
                <div class="carousel-cell col-xs-12 col-sm-6 col-md-4">
                    <div class="cell_content">
                        <h2>Cologny</h2>
                        <img src="img/carousel1.jpg" alt="article image">
                        <div class="info_container">
                            <ul>
                                <li>Belle maison pieds dans l'eau</li>
                                <li>Parcelle de 2'320m<sup>2</sup></li>
                                <li>300m<sup>2</sup>, 5 ch., 4 sdb</li>
                                <li>Garage à bateaux, ponton privé</li>
                                <li>Vue spectaculaire sur le lac</li>
                            </ul>
                            <div class="object_price">CHF 9'500'000</div>
                        </div>
                        <a href="#">Voir le bien</a>
                    </div>
                </div>
                <div class="carousel-cell col-xs-12 col-sm-6 col-md-4">
                    <div class="cell_content">
                        <h2>Cologny</h2>
                        <img src="img/carousel2.jpg" alt="article image">
                        <div class="info_container">
                            <ul>
                                <li>Belle maison pieds dans l'eau</li>
                                <li>Parcelle de 2'320m<sup>2</sup></li>
                                <li>300m<sup>2</sup>, 5 ch., 4 sdb</li>
                                <li>Garage à bateaux, ponton privé</li>
                                <li>Vue spectaculaire sur le lac</li>
                            </ul>
                            <div class="object_price">Prix sur demande</div>
                        </div>
                        <a href="#">Voir le bien</a>
                    </div>
                </div>
                <div class="carousel-cell col-xs-12 col-sm-6 col-md-4">
                    <div class="cell_content">
                        <h2>Cologny</h2>
                        <img src="img/carousel3.jpg" alt="article image">
                        <div class="info_container">
                            <ul>
                                <li>Belle maison pieds dans l'eau</li>
                                <li>Parcelle de 2'320m<sup>2</sup></li>
                                <li>300m<sup>2</sup>, 5 ch., 4 sdb</li>
                                <li>Garage à bateaux, ponton privé</li>
                                <li>Vue spectaculaire sur le lac</li>
                            </ul>
                            <div class="object_price">CHF 7'500'000</div>
                        </div>
                        <a href="#">Voir le bien</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="articles_section">
        <div class="container-fluid">
            <div class="article_block">
                <!--<h1>Nos derniers biens</h1>-->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 push-sm-6 col-md-5 push-md-7">
                        <h2>Le premier site d’annonces immobilières qui associe la recherche et la vie de quartier</h2>
                        <p>Pour acheter une maison, pour louer un appartement ou investir, nous nous sommes dit que la recherche immobilière était souvent compliquée. Après tout, dénicher un logement, ce n’est pas juste trouver quatre murs : c’est aussi trouver la réponse à ses besoins et à son style de vie. C’est pour cette raison que nous avons décidé de créer Rousseau5, le premier moteur de recherche d'annonces immobilières qui prend en compte le logement en lui-même mais aussi ses alentours, avec la vie de quartier et les points d’intérêt à proximité.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 pull-sm-6 col-md-7 pull-md-5">
                        <img src="img/article1.jpg" alt="article image">
                    </div>
                </div>
            </div>

            <div class="article_block">
                <!--<h1>Nos derniers biens</h1>-->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5">
                        <h2>Une expérience de recherche unique pour trouver le bon logemen</h2>
                        <p>Plongez en immersion dans votre futur quartier grâce à nos nombreuses fonctionnalités de recherche : carte 3D en temps réel, localisation des commerces et des services à proximité, multiples critères de recherche adaptés à vos besoins. Bien’ici est également le premier site à vous proposer des annonces immobilières à la fois dans le neuf et dans l’ancien, pour faciliter votre recherche et vous offrir plus de choix. Que ce soit sur votre ordinateur, votre tablette ou en mobilité sur votre Smartphone, nous vous accompagnons partout. Bien’ici est à la fois innovant, complet, pratique et facile d’utilisation : avec nous, trouver le logement idéal n’a jamais été aussi simple</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-7">
                        <img src="img/article2.jpg" alt="article image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="#" class="category sell_category">
                                <!--<img src="img/category1.jpg" alt="Acat Residentiel">-->
                                <div class="category_title"><span>Acat Residentiel</span></div>
                                <div class="gradient_bottom"></div>
                            </a>
                        </div>
                        <div class="col-xs-12">
                            <a href="#" class="category rent_category">
                                <!--<img src="img/category2.jpg" alt="Location Residentielle">-->
                                <div class="category_title"><span>Location Residentielle</span></div>
                                <div class="gradient_bottom"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="category agency_category">
                        <!--<img src="img/category5.jpg" alt="L'agence">-->
                        <div class="category_title"><span>L'agence</span></div>
                        <div class="gradient_bottom"></div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <a href="#" class="category commercial_category">
                                <!--<img src="img/category3.jpg" alt="Commercial">-->
                                <div class="category_title"><span>Commercial</span></div>
                                <div class="gradient_bottom"></div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <a href="#" class="category promo_category">
                                <!--<img src="img/category4.jpg" alt="Promotion">-->
                                <div class="category_title"><span>Promotion</span></div>
                                <div class="gradient_bottom"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'?>

<script src="js/libraries/jquery-3.1.1.min.js"></script>
<script src="js/libraries/jquery-ui.min.js"></script>
<script src="js/libraries/bootstrap.min.js"></script>
<script src="js/libraries/bootstrap-multiselect.js"></script>
<script src="js/libraries/flickity_carousel.min.js"></script>

<script src="js/functions.js"></script>
<script src="js/events.js"></script>
<script src="js/index.js"></script>
</body>
</html>