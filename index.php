<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- A RETIRER AVANT MISE EN LIGNE   -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Babes Day 2019</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/custome-checkbox-css/custom-checkbox-radio.css">

    <link rel="stylesheet" href="css/style.css">
    <?php
    require_once "traitements/Connexion.php";
    require_once "traitements/SQLInteractions.php";
    $sql = new SQLInteractions();
    ?>
</head>
<body>

<section class="header_banner owl-carousel header-carousel">
    <div class="header-image">

    </div>
    <div class="header-image banner_evening">

    </div>
</section>
<!--================Hero Banner Area End =================-->

<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid box_1620">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center align-items-center">
                        <li class="nav-item"><a class="nav-link smooth-link" href="#home">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link smooth-link 300" title="A propos des BabesDay 2019" href="#timer">A propos</a></li>
                        <li class="nav-item"><a class="nav-link smooth-link 300" title="Programme des BabesDay 2019" href="#programme">Programme</a></li>
                        <li class="nav-item"><a class="nav-link smooth-link 100" title="Popup Store des BabesDay 2019" href="#store">Pop up Store</a></li>
                        <li class="nav-item"><a class="nav-link smooth-link 100" title="Partenaires des BabesDay 2019" href="#partenaires">Partenaires</a></li>
                        <li class="nav-item"><a class="nav-link smooth-link 60" href="#contact">CONTACT</a></li>
                        <li class="nav-item"><a target="_blank" class="nav-link smooth-link" href="https://www.facebook.com/BABESDAYFR/"><img src="img/FB_ico.png" alt="Facebook BabesDay 2019" aria-label="Facebook BabesDay 2019"></a>
                        </li><li class="nav-item"><a target="_blank" class="nav-link smooth-link" href="https://twitter.com/babesvoices"><img src="img/Twitter_ico.png" alt="Twitter BabesDay 2019" aria-label="Twitter BabesDay 2019"></a>
                        </li><li class="nav-item"><a target="_blank" class="nav-link smooth-link" href="https://www.instagram.com/babesdayfr/?fbclid=IwAR2epW3H5nbH7-syKuh8Oea7PxYvWsT6MvPBX5_J8J1FgoDz1iDV7cuD5mM"><img src="img/Insta_ico.png" alt="Instagram BabesDay 2019" aria-label="Instagram BabesDay 2019"></a>
                        </li><li class="nav-item"><a target="_blank" class="nav-link smooth-link" href="https://www.linkedin.com/company/18691047/"><img src="img/LinkedIn_ico.png" alt="LinkedIn BabesDay 2019" aria-label="LinkedIn BabesDay 2019"></a>
                        </li></ul>
                    <ul class="nav-right text-center text-lg-right py-4 py-lg-0">
                        <li><a class="smooth-link 300 bold_text" href="#billeterie">Billetterie</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php if(isset($_GET['mail_sent']) && $_GET['mail_sent'] == 1) { ?>
            <div class="alert alert-success" role="alert">
                <button type="button" class="close-alert">×</button>
                <i class="material-icons">email</i>
                Votre message à bien été envoyé, nous vous répondrons au plus vite
            </div>
        <?php } ?>
        <?php if(isset($_GET['news_sent']) && $_GET['news_sent'] == 1) { ?>
            <div class="alert alert-success" role="alert">
                <button type="button" class="close-alert">×</button>
                <i class="material-icons">email</i>
                Votre inscription à notre newsletter est reçue !
            </div>
        <?php } ?>
    </div>
</header>
<!--================Header Menu Area =================-->
<!--================ Timer section Start =================-->
<section class="section-padding--small bg-primary-red pt-5" >
    <div class="container">
        <h3 class="text-black-50 text-center" tabindex="-1">#BABESDAY2019</h3>
        <div class="clockdiv-content text-center mt-5">
            <p class="h2 primary-text mb-2 text-white">Rendez-vous le 11 & 12 Octobre 2019 :</p>
        </div>
        <div class="col-lg-12 mt-4" tabindex="0">
            <ul class="clockdiv text-center" id="clockdiv">
                <li class="clockdiv-single clockdiv-day">
                    <h1 id="daysTicker" class="text-white"></h1>
                    <span class="smalltext text-white">Jours</span>
                </li>
                <li class="clockdiv-single clockdiv-hour">
                    <h1 id="hoursTicker" class="text-white"></h1>
                    <span class="smalltext text-white">Heures</span>
                </li>
                <li class="clockdiv-single clockdiv-minute">
                    <h1 id="minsTicker" class="text-white"></h1>
                    <span class="smalltext text-white">Minutes</span>
                </li>
            </ul>

        </div>
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 align-self-center mb-5 mt-3 mb-lg-0">
                <div class="timer-wrapper text-center" style="text-shadow: 1px 1px 2px black;">
                    <h3 id="timer" class="text-white h2" tabindex="0"><b style="letter-spacing:1px;font-size: larger">POUR “UN ÉVÉNEMENT POUR ENTREPRENDRE L’ÉGALITÉ”</b></h3>
                    <p class="paragraph-with-jump">LE <b style="letter-spacing:1px;font-size: larger">BABES DAY</b> EST UN <b style="letter-spacing:1px;font-size: larger">ÉVÉNEMENT D’UNE JOURNÉE</b> ACCESSIBLE PAR TOUTES ET TOUS,
                        NÉ D’<b style="letter-spacing:1px;font-size: larger">UNE COLLABORATION FRANCO-AMÉRICAINE</b> EN <b style="letter-spacing:1px;font-size: larger">2017</b>.
                        L’IDÉE PRINCIPALE EST DE METTRE EN LUMIÈRE <b style="letter-spacing:1px;font-size: larger">LES FEMMES, ENTREPRENEURES, ARTISTES, CRÉATIVES.</b></p>
                    <p class="paragraph-with-jump">AU COURS DE CETTE JOURNÉE, NOUS LES INVITONS
                        <b style="letter-spacing:1px;font-size: larger">À DISCUTER LORS DE TALKS</b>, À <b style="letter-spacing:1px;font-size: larger">EXPOSER LEUR ART</b>, À <b style="letter-spacing:1px;font-size: larger">JOUER</b>,
                        LE TOUT EN APPLIQUANT DES <b style="letter-spacing:1px;font-size: larger">VALEURS POSITIVES</b>.
                        LE BABES DAY A POUR SOUHAIT DE <b style="letter-spacing:1px;font-size: larger">CRÉER UN ESPACE COMMUN</b>
                        AFIN DE <b style="letter-spacing:1px;font-size: larger">FAIRE PARLER LES FEMMES, ET LES HOMMES</b>,
                        SUR <b style="letter-spacing:1px;font-size: larger">LA PLACE DES FEMMES</b>, SUR <b style="letter-spacing:1px;font-size: larger">LEUR SOIF DE VISIBILITÉ</b>
                        ET <b style="letter-spacing:1px;font-size: larger">LEUR EXPÉRIENCE</b> DANS <b style="letter-spacing:1px;font-size: larger">LES MILIEUX CULTUREL, ARTISTIQUE</b> ET <b style="letter-spacing:1px;font-size: larger">ENTREPRENEURIAL</b></p>
                    <!--                      <p class="paragraph-with-jump"> Les vendredi et samedi 11 et 12 octobre 2019, l’association Babes Voices, qui porte le projet, investit deux lieux à Angers : l’Atelier des Arts Appliqués le vendredi soir de 19h à 22h et le samedi de 10h à 19h puis de 21h à 2h au Joker’s Pub.</p>-->
                </div>
            </div>

        </div>
    </div>
</section>
<!--================ Timer section End =================-->
<!--================ Schedule section Start =================-->
<section class="section-margin">
    <div class="container">
        <hr class="separator primary-color2" />
        <div class="section-intro text-center pb-5">
            <h2 id="programme" class="text-white title h1" tabindex="0">PROGRAMME</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="scheduleTab">
                    <ul class="nav nav-tabs">
                        <li tabindex="0" class="nav-item text-center">
                            <div class="active" data-toggle="tab" href="#day1">
                                <h4>VENDREDI</h4>
                                <p>11 octobre 2019</p>
                            </div>
                        </li>
                        <li tabindex="0" class="nav-item text-center">
                            <div data-toggle="tab" href="#day2">
                                <h4>SAMEDI</h4>
                                <p>12 octobre 2019</p>
                            </div>
                        </li>
                        <li tabindex="0" class="nav-item text-center">
                            <div data-toggle="tab" href="#day3">
                                <h4>SAMEDI / DIMANCHE</h4>
                                <p>12 - 13 octobre 2019</p>
                            </div>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="day1" class="tab-pane active">
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk justify-content-center p-3">
                                            <img src="img/home/Informations.webp" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <h3><span class="bold_text">À L'ATELIER D'ARTS APPLIQUÉS</span> - 20 RUE FLORENT CORNILLEAU, ANGERS   </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk">
                                            <i aria-hidden="true" class="fas fa-microphone-alt fa-3x"></i>
                                            <div>
                                                <h3>WARM-UP</h3>
                                                <p>19h-22h</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <h3> UN VERRE AUTOUR DES FEMMES ET DU VIN </h3>
                                            <p>DEPUIS #METOO, LES FEMMES SONT DAVANTAGE SUR LE DEVANT DE LA SCÈNE DANS LE MONDE DU VIN,
                                                NOTAMMENT EN SOMMELLERIE OÙ LES PRIX SE MULTIPLIENT POUR LES FRANÇAISES. DES ÉVÉNEMENTS,
                                                COMME LE SALON CANONS OU LES RENCONTRES DE L’ASSOCIATION WOMEN DO WINE, DÉDIÉS AUX FEMMES
                                                SE DÉVELOPPENT AUSSI. EST-CE UN MOUVEMENT DE FOND ENTRAINANT UN CHANGEMENT TANGIBLE ?
                                                EST-CE LIMITÉ À CERTAINS MÉTIERS DU VIN ? QU’EN EST-IL SUR LE TERRAIN CHEZ LES VIGNERONNES ? </p>

                                            <div class="d-flex flex-row">
                                                <p class="underline_title">INVITÉ.E.S</p>
                                                <div class="d-flex flex-row justify-content-around ml-4">
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="day2" class="tab-pane">
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk justify-content-center p-3" >
                                            <img src="img/home/Informations.webp" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <h3><span class="bold_text">À L'ATELIER D'ARTS APPLIQUÉS</span> - 20 RUE FLORENT CORNILLEAU, ANGERS   </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk">
                                            <i aria-hidden="true" class="fas fa-microphone-alt fa-3x"></i>
                                            <div>
                                                <h3>TALK #1</h3>
                                                <p>10h30/12h30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <h3>L’entrepreneuriat au féminin : partage d’expériences</h3>
                                            <p class="programme_desc"  tabindex="0">Se lancer dans la création d’une entreprise demande une grande motivation et beaucoup de courage. L’idée est ici de donner la parole aux
                                                Angevines qui en ont fait l’expérience pour qu’elles partagent leur vécu, témoignent de leurs réussites et de leurs difficultés,
                                                racontent si le fait d’être une femme a eu un impact dans leur parcours… Face à d’autres Angevines,
                                                peut-être futures entrepreneures elle-même, nous voulons engager la discussion et pourquoi pas susciter ou encourager des vocations !</p>
                                            <div class="d-flex flex-row">
                                                <p class="underline_title">INVITÉ.E.S</p>
                                                <div class="d-flex flex-row justify-content-around ml-4">
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk">
                                            <i aria-hidden="true" class="fas fa-microphone-alt fa-3x"></i>
                                            <div>
                                                <h3>TALK #2</h3>
                                                <p>14h30/15h30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <h3>Parcours de femme inspirante</h3>
                                            <p class="programme_desc" tabindex="0">
                                                Pendant une heure, nous discutons avec une femme qui nous inspire. De son travail, de son parcours de femmes, de son rapport à son métier, à son art,
                                                à sa féminité, à la beauté, aux attentes de la société… Autant de thématiques diverses à dérouler au fil de l’entretien et des interventions de
                                                l’auditoire, en fonction des directions où nous mènera cette discussion.</p>
                                            <div class="d-flex flex-row">
                                                <p class="underline_title">INVITÉ.E.S</p>
                                                <div class="d-flex flex-row justify-content-around ml-4">
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk">
                                            <i aria-hidden="true" class="fas fa-microphone-alt fa-3x"></i>
                                            <div>
                                                <h3>TALK #3</h3>
                                                <p>16h30/18h30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <h3>Égalité de genre, où en est-on dans le monde du sport ?</h3>
                                            <p class="programme_desc" tabindex="0">
                                                En 2016, seules 11 fédérations sportives nationales sont présidées par des femmes contre 104 par des hommes.
                                                Elles représentent 37,5 % des titulaires d’une licence de sport en France et 16 % des arbitres.
                                                Un rapport de 2009 montre que 11 % des athlètes interrogées ont subi des violences sexuelles.
                                                L’égalité des genres et des sexes est donc un enjeu fort pour le milieu sportif.
                                                Encore peu représentées dans les métiers du sport, des championnes, des professeures d’EPS et des chercheuses
                                                travaillent à améliorer la situation et participent à combattre les inégalités.</p>
                                            <div class="d-flex flex-row">
                                                <p class="underline_title">INVITÉ.E.S</p>
                                                <div class="d-flex flex-row justify-content-around ml-4">
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                    <p class="underline">A venir (...)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="day3" class="tab-pane">
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk justify-content-center p-2" >
                                            <img src="img/home/Informations.webp" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <h3><span class="bold_text">AU JOKER'S PUB</span> - 32 RUE SAINT LAUD, ANGERS   </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-card">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="card-talk">
                                            <i aria-hidden="true" class="fas fa-compact-disc fa-3x"></i>
                                            <div>
                                                <h3>CONCERTS ELECTRO POP + DJ SET</h3>
                                                <p>21H45 - 2H</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 align-self-center">
                                        <div class="schedule-content">
                                            <a class="schedule-title" href="#">
                                                <h3>BABES DAY PRÉSENTE 2 CONCERTS ELECTRO POP + DJ SET AVEC :</h3>
                                            </a>
                                              <div class="d-flex flex-row">
<!--                                                  <section class="section-padding gallery-area gallery-bg">-->
<!--                                                  <div class="container">-->
<!--                                                    <div class="row no-gutters">-->
<!--                                                      <div class="col-sm-6 col-md-4">-->
<!--                                                          <a href="img/gallery/g1.png" class="img-gal">-->
<!--                                                              <div class="single-imgs relative">-->
<!--                                                                  <img class="card-img rounded-0" src="img/home/Michelle_Blades_square.webp" alt="">-->
<!--                                                                  <div class="overlay">-->
<!--                                                                      <div class="overlay-content">-->
<!--                                                                          <div class="overlay-icon">-->
<!--                                                                              <i class="ti-plus"></i>-->
<!--                                                                          </div>-->
<!--                                                                      </div>-->
<!--                                                                  </div>-->
<!--                                                              </div>-->
<!--                                                          </a>-->
<!--                                                      </div>-->
<!--                                                      <div class="col-sm-6 col-md-4">-->
<!--                                                          <a href="img/gallery/g2.png" class="img-gal">-->
<!--                                                              <div class="single-imgs relative">-->
<!--                                                                  <img class="card-img rounded-0" src="img/home/Kiss_Doom_Fate_square.webp" alt="">-->
<!--                                                                  <div class="overlay">-->
<!--                                                                      <div class="overlay-content">-->
<!--                                                                          <div class="overlay-icon">-->
<!--                                                                              <i class="ti-plus"></i>-->
<!--                                                                          </div>-->
<!--                                                                      </div>-->
<!--                                                                  </div>-->
<!--                                                              </div>-->
<!--                                                          </a>-->
<!--                                                      </div>-->
<!--                                                      <div class="col-sm-6 col-md-4">-->
<!--                                                          <a href="img/gallery/g3.png" class="img-gal">-->
<!--                                                              <div class="single-imgs relative">-->
<!--                                                                  <img class="card-img rounded-0" src="img/home/Djohn_Pandah_square.webp" alt="">-->
<!--                                                                  <div class="overlay">-->
<!--                                                                      <div class="overlay-content">-->
<!--                                                                          <div class="overlay-icon">-->
<!--                                                                              <i class="ti-plus"></i>-->
<!--                                                                          </div>-->
<!--                                                                      </div>-->
<!--                                                                  </div>-->
<!--                                                              </div>-->
<!--                                                          </a>-->
<!--                                                      </div>-->
<!--                                                  </div>-->
<!--                                                  </div>-->
<!--                                                  </section>-->
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Schedule section End =================-->

<!--================ Pop up store section Start =================-->
<section class="speaker-bg section-padding mb-5">
    <div class="container">
        <hr class="separator primary-color2" />
        <div class="section-intro section-intro-white text-center pb-5">
            <h2 id="store" class="h1 text-white text-uppercase big_title title" tabindex="0">Pop-up Store</h2>
        </div>
        <div class="schedule-card">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="card-talk d-flex justify-content-center align-items-center">
                        <img src="img/home/Informations.webp" alt="" style="width: 100px;">
                    </div>
                </div>
                <div class="col-md-9 align-self-center">
                    <div class="schedule-content">
                        <h3>Entrée libre • 10h-19h</h3>
                        <p>Samedi 12 Octobre à l'ateliers d'Arts Appliqués
                            20 rue Florent Cornilleau, Angers</p>
                        <p class="h3 text-uppercase popup-title">Inscrivez-vous jusqu'au 1er Août 2019 :</p>
                        <a class="button button-header mt-2 text-uppercase" href="http://bit.ly/2WGITZz" > Formulaire du pop-up store</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <?php
            foreach ($sql->overrideSELECT('*','popup_store','1','fetchAll') as $data){
                //                  print_r($data);
                $linkRS = '';
                if(isset($data['facebook'])){$linkRS .= '<li><a target="_blank" href="'.$data['facebook'].'" aria-label="Facebook de '.$data['nom'].'"><i aria-hidden="true" class="fab fa-facebook fa-2x"></i></a></li>';}
                if(isset($data['twitter'])){$linkRS .= '<li><a target="_blank" href="'.$data['twitter'].'" aria-label="Twitter de '.$data['nom'].'"><i aria-hidden="true" class="fab fa-twitter fa-2x"></i></a></li>';}
                if(isset($data['instagram'])){$linkRS .= '<li><a target="_blank" href="'.$data['instagram'].'" aria-label="Instagram de '.$data['nom'].'"><i aria-hidden="true" class="fab fa-instagram fa-2x"></i></a></li>';}
                if(isset($data['etsy'])){$linkRS .= '<li><a target="_blank" href="'.$data['etsy'].'" aria-label="Etsy de '.$data['nom'].'"><i aria-hidden="true" class="fab fa-etsy fa-2x"></i></a></li>';}
                if(isset($data['autre'])){$linkRS .= '<li><a target="_blank" href="'.$data['autre'].'" aria-label="Site web de '.$data['nom'].'"><i aria-hidden="true" class="fas fa-globe fa-2x"></i></a></li>';}
                echo '
                                               <div class="col-lg-4 col-sm-6 mb-4">
                                               <div class="card-speaker">
                                                  <img class="card-img rounded-0" src="https://placekitten.com/400/400" alt="">
                                                  <img class="card-img rounded-0" src="'.$data['nom'].'" alt="">
                                                  <div class="speaker-footer">
                                                      <h4>'.$data['nom'].'</h4>
                                                      <p>'.$data['label'].'</p>
                                                  </div>
                                                  <div class="speaker-overlay">
                                                      <ul class="speaker-social">
                                                        '.$linkRS.'
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          ';
            }

            ?>

        </div>
    </div>
</section>
<!--================ Pop up store section End =================-->


<!--================ Sponsor section Start =================-->
<section class="section-padding--small bg-white">
    <div class="container">
        <hr class="separator primary-color" />
        <div class="section-intro text-center pb-80px">
            <h2 id="partenaires" class="h1 primary-text title" tabindex="0">PARTENAIRES</h2>
        </div>

        <div class="sponsor-wrapper ">
            <div class="row">
                <?php
                foreach ($sql->overrideSELECT('nom,extLink,img_src,class','partenaires','1','fetchAll') as $data){
                    echo '<div class="col-sm-6 col-lg-4 mb-3">
                                   <a target="_blank" href="'.$data['extLink'].'">
                                   <div class="sponsor-single"  aria-label="Logo vers le site de '.$data['nom'].'">
                                   <img class="img-fluid '.$data['class'].'" src="'.$data['img_src'].'" alt="">
                                   </div>
                                   </a>
                                   </div>';
                }
                ?>

            </div>
        </div>
        <div class="schedule-card mt-5">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="card-talk d-flex justify-content-center align-items-center p-3">
                        <img src="img/partenaires/partners-claping-hands.webp" alt="" style="border-radius: 0;">
                    </div>
                </div>
                <div class="col-md-9 align-self-center">
                    <div class="schedule-content d-flex justify-content-between flex-wrap">
                        <p class="h3 text-uppercase popup-title">VOUS AUSSI DEVENEZ PARTENAIRES</p>
                        <a class="button button-header mt-2 text-uppercase" href="mailto:babesdayfr@gmail.com" > FAIRE LA DEMANDE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Sponsor section End =================-->

<!--================ Billeterie section Start =================-->
<section class="section-padding--small bg-primary-rose mb-5">
    <div class="container">
        <div class="section-intro text-center">
            <hr class="separator" />
            <h2 id="billeterie" class="h1 text-white title" tabindex="0">BILLETTERIE</h2>
            <p class="color-black title-2 " tabindex="0">Mise en ligne le 23 Août 2019</p>
        </div>
        <div class="sponsor-wrapper ">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <a disabled="disabled" class="button button-header btn-large text-white">TALKS / CONFERENCES</a>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <a disabled="disabled" class="button button-header btn-large text-white">CONCERTS</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Billeterie section End =================-->

<!--  SEPARATOR -->
<section id="" class="bg-white p-5">
</section>

<!-- ================ newsletter & social section start ================= -->
<section id="social" class="bg-primary-yellow pb-5">
    <div class="container-fluid">
        <hr class="separator primary-color" />
        <div class="section-intro text-center pb-4">
            <h2 id="partenaires" class="text-white h1 mb-5" style="font-size: 30px">Suivez-nous sur les réseaux sociaux #BabesDay2019</h2>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container social">
                    <div class="bg-primary-yellow pb-2">
                        <a href="https://www.facebook.com/BABESDAYFR/" class="text-center"><img src="img/FB_ico.png" alt="Facebook BabesDay 2019" aria-label="Facebook BabesDay 2019"/></a>
                        <a href="https://twitter.com/babesvoices" class="text-center"><img src="img/Twitter_ico.png" alt="Facebook BabesDay 2019" aria-label="Facebook BabesDay 2019"/></a>
                        <a href="https://www.instagram.com/babesdayfr/?fbclid=IwAR2epW3H5nbH7-syKuh8Oea7PxYvWsT6MvPBX5_J8J1FgoDz1iDV7cuD5mM" class="text-center"><img src="img/Insta_ico.png" alt="Facebook BabesDay 2019" aria-label="Facebook BabesDay 2019"/></a>
                        <a href="https://www.linkedin.com/company/18691047/" class="text-center"><img src="img/LinkedIn_ico.png" alt="Facebook BabesDay 2019" aria-label="Facebook BabesDay 2019"/></a>
                    </div>
                </div>
                <div class="single-footer-widget mail-chimp">
                    <div class="container">
                        <div id="instagram-feed-babesday" class="instagram_feed"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
<!-- ================ newsletter & social section end ================= -->

<!-- ================ contact section start ================= -->
<section class="bg-white pt-2 ">
    <div class="container">
        <div class="section-intro text-center">
            <hr class="separator primary-color" />
            <h2 id="contact" class="primary-text h1" tabindex="0">LIEUX & CONTACT</h2>
        </div>
        <div class="d-none d-sm-block pb-1">
            <div class="owl-carousel contact-carousel" tabindex="-1">
                <iframe tabindex="-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.5756234461946!2d-0.541401984182403!3d47.47869870479757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480878fa43de06b3%3A0x3cfcbe24ffa202d6!2sl&#39;atelier+d&#39;Arts+Appliqu%C3%A9s!5e0!3m2!1sfr!2sfr!4v1560762177342!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <iframe tabindex="-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.9091090882343!2d-0.5552238841825554!3d47.47220060524535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480878c1ffe8c3a3%3A0xfaccd22921c382d0!2sLe+Joker&#39;s+Pub!5e0!3m2!1sfr!2sfr!4v1560762340080!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div id="slide_maps" class="row">
                <div class="col-sm-6 col-lg-6">
                    <a id="first_loc" class="button button-tab active" tabindex="0" style="width: 100%">l'Atelier des Arts Appliqués</a>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <a id="second_loc" class="button button-tab" tabindex="0" style="width: 100%">Joker's Pub</a>
                </div>
            </div>
        </div>
        <div class="row pb-4">
            <div class="col-12">
                <h2 class="contact-title mt-5 mb-5 text-center">Contacter la team orga</h2>
            </div>
            <div class="col-lg-12">
                <form class="form-contact contact_form" action="traitements/contact.php" method="post" id="contactForm" novalidate="novalidate">

                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="subject">Objet du mail</label>
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Saisissez l'objet de votre mail">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="name">Votre nom</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="Entrer votre nom (ex : Emmanuelle)">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="email">Votre adresse mail</label>
                                <input class="form-control" name="email" id="email" type="email" placeholder="Saisissez votre adresse mail (ex : emmanuelle@gmail.com)">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="6" placeholder="Saisissez votre message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm" style="margin-bottom: 10px;">
                            Envoyer le message
                        </button>
                    </div>
                </form>


            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row align-items-center pt-5 pb-5 bg-primary">
            <div class="offset-lg-3 offset-md-3 col-lg-6 col-md-6 col-sm-12">
                <div class="newsletter-widget">
                    <p class="text-center m-0">
                        On vous envoie aussi des emails bien badass
                    </p>
                    <div id="newsL_signup">
                        <form action="traitements/news.php" method="post" class="subscription relative">
                            <div class="input-group d-flex flex-row">
                                <label class="sr-only" for="newsL_email">Inscrivez vous à la newsletter :</label>
                                <input id="newsL_email" name="email" placeholder="Adresse email" required="required" type="email">
                                <button class="btn bb-btn">
                                    <i aria-hidden="true" class="fas fa-check-circle" style="font-size:2em" title="Valider le formulaire"></i>
                                    <span class="sr-only">Valider le formulaire d'inscription à la newsletter</span>
                                </button>
                            </div>
                            <div class="mt-10 info"></div>
                            <div class="checkbox mt-2 mb-4">
                                <div class="checkbox-container">
                                    <input id="checkbox-default" aria-describedby="legal" required="required" type="checkbox" />
                                    <div class="checkbox-checkmark" tabindex="0" ></div>
                                </div>
                                <label aria-labelledby="legal" for="checkbox-default">Vous acceptez de recevoir nos communications par email</label>
                            </div>
                        </form>
                    </div>
                    <p class="legal" tabindex="0">En renseignant votre adresse mail, vous acceptez de recevoir notre lettre d'informations (newsletter) et nos derniers articles de blog par courrier électronique et vous acceptez avoir pris connaissance de notre <a href="">Politique de confidentialité</a></p>
                </div>

            </div>


        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

<!-- ================ Footer ================= -->
<footer class="footer-area pt-2 pb-2">
    <p class="col-lg-12 col-sm-12 footer-text m-0 text-center text-lg-center">
        &copy;<script>document.write(new Date().getFullYear());</script> by BABESDAYFR.
    </p>
</footer>
<!-- ================ End Footer ================= -->


<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>

<script defer src="vendors/jquery.instagramFeed.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script defer src="vendors/bootstrap-swipe-carousel.min.js"></script>
<script src="js/countdown.js"></script>
<script defer src="https://kit.fontawesome.com/9acaa4ca7f.js"></script>
<script src="js/main.min.js"></script>


</body>
</html>
