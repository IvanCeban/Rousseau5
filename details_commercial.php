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
    <link rel="stylesheet" href="css/libraries/slick.css">
    <link rel="stylesheet" href="css/custom_icons/style.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/details.css">
    <link rel="stylesheet" href="css/media_queries.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy3z5ZYvr8P0eXpKg8QhcqZU6yYg4Nl6k&libraries=drawing,places&language=en"></script>
</head>

<body>

<?php $current_page = 'commercial' ?>

<?php include 'includes/header.php'?>
<?php include 'includes/main_nav.php'?>

<main>
    <section class="gallery_section">
        <div class="gallery_container">
            <div class="gallery_view">
                <ul class="gallery">
                    <li><img src="img/details_comercial.jpg" alt=""></li>
                    <li><img src="img/carousel2.jpg" alt=""></li>
                    <li><img src="img/carousel3.jpg" alt=""></li>
                </ul>
                <div class="object_title">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-9">
                                <h2>Superbe bureaux au centre ville</h2>
                                <h3>Rues basses - Cité / <span class="gold">GENÈVE</span></h3>
                            </div>
                            <div class="col-xs-3">
                                <div class="object_price">CHF 3'000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gradient_bottom"></div>
                <div class="gradient_left"></div>
                <div class="gradient_right"></div>
            </div>
            <div class="gallery_nav">
                <div class="container-fluid">
                    <ul class="gallery_thumbnails">
                        <li><img src="img/details_comercial_thumbnail1.png" alt=""></li>
                        <li><img src="img/details_comercial_thumbnail2.png" alt=""></li>
                        <li><img src="img/details_comercial_thumbnail1.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="contact_section">
        <div class="container-fluid">
            <a class="back_link" href="results_commercial.php"><i class="icn icon-arrow_left"></i>Back to your search</a>
            <div class="agent_info_container">
                <div class="row">
                    <div class="col-xs-3">
                        <div class="agent_img">
                            <img src="img/agents/agent.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="agent_info">
                            <p>Contact agent to visit</p>
                            <p class="agent_name">Tordjman Gary</p>
                            <ul>
                                <li>022 732 80 00</li>
                                <li><a href="mailto:Info@rousseau5.ch">Info@rousseau5.ch</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="object_info">
                            <p class="object_id">ID : GEGTVES2016</p>
                            <button class="btn dark">I'm interested</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="object_info_section">
        <div class="container-fluid">
            <div class="object_info_container">
                <ul class="properties">
                    <li><i class="icn icon-year"></i><span class="prop_val">(Année) <span>4</span></span></li>
                    <li><i class="icn icon-rooms"></i><span class="prop_val">(Pieces) <span>3</span></span></li>
                    <li><i class="icn icon-living_area"></i><span class="prop_val">(Habitable) <span>61m<sup>2</sup></span></span></li>
                </ul>

                <div class="details_block_title">
                    <span>Description du commerce/industrie</span>
                </div>

                <div class="object_description">
                    <p>Opportunité ! </p>
                    <br>
                    <p>L'agence immobilière Rousseau N°5 à le privilège de vous présenter cette offre :</p>
                    <br>
                    <p>Superbe bureau à louer prochainement rénové dans un immeuble en pierre à deux pas du Rhône.</p>
                    <br>
                    <p>Idéalement situé derrière le Quai des Bergues, dans un immeuble du XVIIIème en pierre, ce bureau de 61 m2 propose un grand espace open space avec un espace kitchenette et wc séparé, possibilité de cloisonné l'espace en plusieurs bureaux individuels.</p>
                    <br>
                    <p>Proche de toutes les commodités, banques, études de notaire, fiduciaires, bureau d'architecte, à seulement quelques mètres du Rhône et de l'hyper centre de Genève.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="location_section">
        <div class="container-fluid">
            <h1>Emplacement du commerce/industrie</h1>
            <div id="object_map"></div>
        </div>
    </section>

    <section class="contact_form_section">
        <div class="container-fluid">
            <h1>Request an appointment</h1>
            <form action="">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <label class="form_el_label">First Name *</label>
                                <input type="text">
                            </div>
                            <div class="col-xs-6">
                                <label class="form_el_label">Name *</label>
                                <input type="text">
                            </div>
                            <div class="col-xs-6 margin_top_20">
                                <label class="form_el_label">Phone *</label>
                                <input type="text">
                            </div>
                            <div class="col-xs-6 margin_top_20">
                                <label class="form_el_label">Email *</label>
                                <input type="text">
                                <div class="my_checkbox">
                                    <label>
                                        <input required="" type="checkbox" name="" value="">
                                        <span class="fake_checkbox"></span>
                                        <span class="my_checkbox_text">Subscribe to the newsletter</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6 margin_top_20">
                                <label class="form_el_label">Postal code *</label>
                                <input type="text">
                            </div>
                            <div class="col-xs-6 margin_top_20">
                                <span class="required_fields">*Required fields</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label class="form_el_label">Message *</label>
                        <textarea name="" id=""></textarea>
                        <button type="submit" class="btn dark_inverse margin_top_20">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'?>

<script src="js/libraries/jquery-3.1.1.min.js"></script>
<script src="js/libraries/jquery-ui.min.js"></script>
<script src="js/libraries/bootstrap.min.js"></script>
<script src="js/libraries/bootstrap-multiselect.js"></script>
<script src="js/libraries/slick.min.js"></script>

<script src="js/functions.js"></script>
<script src="js/events.js"></script>
<script src="js/details.js"></script>
</body>
</html>