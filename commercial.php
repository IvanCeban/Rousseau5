<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Rousseau 5 - For sell</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link rel="stylesheet" href="css/libraries/bootstrap-multiselect.css">
    <link rel="stylesheet" href="css/libraries/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/libraries/tooltipster.bundle.min.css">
    <link rel="stylesheet" href="css/custom_icons/style.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/media_queries.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>-->
</head>

<body id="commercial">

<?php $current_page = 'commercial' ?>

<?php include 'includes/header.php'?>
<?php include 'includes/main_nav.php'?>

<main>
    <section class="search_section">
        <div class="container-fluid">
            <div class="search_block">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-building"></i><span>Type de bien</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select multiple="multiple" name="object_type">
                                <option value="">Tout</option>
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
                                <option value="">Tout</option>
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
                                <option value="">Tout</option>
                                <option value="">Geneva</option>
                                <option value="">Bern</option>
                                <option value="">Zurich</option>
                                <option value="">Paris</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-projects_neufs"></i><span>Projects neufs</span></label>
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

    <section class="comercial_funds_section">
        <div class="container-fluid">
            <h1>Fonds de commerce et murs</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-6 object_block_container">
                    <a href="results_commercial.php" class="object_block">
                        <div class="img_block">
                            <img src="img/comercial1.jpg" alt="">
                            <div class="gradient_bottom"></div>
                        </div>
                        <div class="info_block">
                            <div class="properties_container">
                                <h2>Achats Fonds de Commerce</h2>
                                <p>Chez Rousseau N°5 il est possible de louer et d’acheter des murs commerciaux. Investissez dans un bien de rendement.</p>
                                <span class="results_amount">5 résultats</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 object_block_container">
                    <a href="results_commercial.php" class="object_block">
                        <div class="img_block">
                            <img src="img/comercial2.jpg" alt="">
                            <div class="gradient_bottom"></div>
                        </div>
                        <div class="info_block">
                            <div class="properties_container">
                                <h2>Achat Murs</h2>
                                <p>Chez Rousseau N°5 il est possible de louer et d’acheter des murs commerciaux. Investissez dans un bien de rendement.</p>
                                <span class="results_amount">3 résultats</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="comercial_info_section">
        <div class="container-fluid">
            <div class="comercial_info_block">
                <h1>Location appartement et tous types de logement sur Suisse</h1>
                <p>Vous désirez acquérir, vendre un fonds de commerce ou investir dans la pierre pour vous garantir une rente régulière et sécurisée ? « Rousseau N°5 L’agence Immobilière » est là pour vous accompagner tout au long de votre démarche et vous aider à réaliser vos projets.</p>
                <br>
                <p>Nos conseillers spécialisés se feront un plaisir de vous recevoir et de vous faire partager leur expérience et savoir-faire dans les domaines suivants :</p>

                <div class="card">
                    <div class="card-header" role="tab" id="comercial_rule_1_title">
                        <h5 class="card-title">
                            <a class="collapsed" data-toggle="collapse" href="#comercial_rule_1_info" aria-expanded="false" aria-controls="answerOne">
                                <span>Transmission de fonds de commerce</span>
                                <i class="icn icon-arrow_dropdown_down"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="comercial_rule_1_info" class="collapse" role="tabcard" aria-labelledby="comercial_rule_1_title">
                        <div class="card-block">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="comercial_rule_2_title">
                        <h5 class="card-title">
                            <a class="collapsed" data-toggle="collapse" href="#comercial_rule_2_info" aria-expanded="false" aria-controls="answerOne">
                                <span>TRANSMISSION D’UN COMMERCE : FONDS OU PARTS ?</span>
                                <i class="icn icon-arrow_dropdown_down"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="comercial_rule_2_info" class="collapse" role="tabcard" aria-labelledby="comercial_rule_2_title">
                        <div class="card-block">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="comercial_rule_3_title">
                        <h5 class="card-title">
                            <a class="collapsed" data-toggle="collapse" href="#comercial_rule_3_info" aria-expanded="false" aria-controls="answerOne">
                                <span>L’ÉVALUATION DU PRIX</span>
                                <i class="icn icon-arrow_dropdown_down"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="comercial_rule_3_info" class="collapse" role="tabcard" aria-labelledby="comercial_rule_3_title">
                        <div class="card-block">
                            <p>Il existe plusieurs manières pour évaluer le prix d’un fonds de commerce.</p>
                            <p>On peut néanmoins regrouper les différentes techniques d’évaluation en deux grandes catégories, celles fondées sur le chiffre d’affaires taxes comprises et sur la rentabilité (excédent brut d’exploitation).</p>
                            <p>La deuxième méthode est basée sur une évaluation plus empirique. Il s’agit de la qualité et la conformité de l’outil de travail, la qualification, l’autonomie, et l’ancienneté du personnel, la clientèle et le marché, la situation géographique, les chiffres de l’entreprise, etc.</p>
                            <p>C’est la combinaison de tous ces facteurs qui permet de déterminer une valeur cohérente du commerce à transmettre.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="comercial_rule_4_title">
                        <h5 class="card-title">
                            <a class="collapsed" data-toggle="collapse" href="#comercial_rule_4_info" aria-expanded="false" aria-controls="answerOne">
                                <span>LES MODALITÉS DE TRANSMISSION D’UN FONDS DE COMMERCE</span>
                                <i class="icn icon-arrow_dropdown_down"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="comercial_rule_4_info" class="collapse" role="tabcard" aria-labelledby="comercial_rule_4_title">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h6>1. MONTAGE DU DOSSIER DE VENTE</h6>
                                    <p>Nos spécialistes réunissent toutes les pièces nécessaires à l’élaboration d’un dossier de vente constitué des aspects financiers, marketing et juridiques du fonds de commerce.</p>
                                    <h6>2. MONTAGE DU DOSSIER ACHETEUR</h6>
                                    <p>Dans le même temps, nous constituons également le dossier acheteur afin de s’assurer que son profil réponde aux exigences de l’opération et notamment à la phase cruciale du transfert de bail auprès de la régie. (Solvabilité, compétences professionnelles)</p>
                                    <h6>3. SUPPORT À LA NÉGOCIATION AVEC L’ACHETEUR</h6>
                                    <p>Il est parfois difficile de trouver un terrain d’entente lors de la phase de négociation. Nous vous accompagnons lors de cette étape importante en valorisant votre bien auprès de l’acheteur mais dans un respect déontologique des deux parties.</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <h6>4. RÉDACTION DE LA CONVENTION DE VENTE</h6>
                                    <p>Dès la négociation achevée, Rousseau N°5 rédige une convention de vente respectant les droits et obligations des deux parties. Ce document est en quelque sorte une promesse de vente subordonnée à la décision des propriétaires d’accorder le transfert de bail au repreneur.</p>
                                    <h6>5. CONSTITUTION DOSSIER ET DÉMARCHES AUPRÈS DE LA RÉGIE</h6>
                                    <p>Rousseau N°5 élabore un dossier complet à l’attention de la régie pour l’obtention d’un transfert de bail ou un nouveau bail. Ce dossier comprend tous les éléments permettant à la régie de prendre position.</p>
                                    <h6>6. SUIVI JURIDIQUE ET ADMINISTRATIF</h6>
                                    <p>Tout au long des opérations mais dans des proportions raisonnables, nous vous accompagnons et répondons à vos éventuelles questions administratives ou juridiques.</p>
                                </div>
                            </div>
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
<script src="js/libraries/tooltipster.bundle.min.js"></script>

<script src="js/functions.js"></script>
<script src="js/events.js"></script>
</body>
</html>