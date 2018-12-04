<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130445676-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130445676-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" type="image/x-icon" />

    <title>Geoffrey Lohse, développement front-end</title>

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

<!--    <link href="vendors/owl-carousel/owl.carousel.css" rel="stylesheet">-->
    <link href="vendors/animate-css/animate.css" rel="stylesheet">

    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/responsive.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/colors/default.css" title="default">
    <link rel="stylesheet" href="css/colors/violet.css" title="violet">
    <link rel="stylesheet" href="css/colors/blue.css" title="blue">
    <link rel="stylesheet" href="css/colors/gold.css" title="gold">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="light_bg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="80" data-scroll-animation="true">

<div id="preloader">
    <div id="preloader_spinner">
        <div class="spinner"></div>
    </div>
</div>

<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-default">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#about">&Agrave; propos </a></li>
                    <li><a href="#skill">Compétences</a></li>
                    <li><a href="#experience">Expériences</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container main_container">
    <div class="content_inner_bg row m0">
        <section class="about_person_area pad" id="about">
            <div class="row">
                <div class="col-md-4">
                    <div class="person_img">
                        <img src="img/geoffrey-lohse.jpg" alt="Geoffrey Lohse, développeur front-end">
                        <a class="download_btn" href="documents/CV_Geoffrey-Lohse.pdf"><span>Télécharger le CV</span></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row person_details">
                        <h3><span>Geoffrey Lohse</span></h3>
                        <h4>Développeur front-end</h4>
                        <p>Refonte de site web, développement javascript, animation et intégration CSS avec une pointe de PHP/Mysql sont mon quotidien.</p>
                        <p>Je travaille seul ou en réseau avec d'autres indépendants afin de compléter nos champs d'expertise.</p>
                        <div class="person_information">
                            <ul>
                                <li>Age</li>
                                <li>Nationalité</li>
                                <li>Adresse</li>
                                <li>Téléphone</li>
                                <li>Email</li>
                            </ul>
                            <ul>
                                <li>35</li>
                                <li>Française</li>
                                <li>Région des Yvelines</li>
                                <li>06 68 78 50 20</li>
                                <li><a href="mailto:geoffrey.lohse@gmail.com" title="Contactez moi !">geoffrey.lohse@gmail.com</a></li>
                            </ul>
                        </div>
                        <ul class="social_icon">
                            <li><a href="https://www.linkedin.com/in/geoffreylohse/"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="myskill_area pad" id="skill">
            <div class="main_title">
                <h2>Compétences</h2>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInUp animated">
                    <div class="skill_text">
                        <h4>Développement web</h4>
                    </div>
                    <div class="skill_item_inner">
                        <div class="single_skill">
                            <h4>HTML 5</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h4>CSS 3</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h4>Javascript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h4>PHP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h4>MySQL</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated">
                    <div class="skill_text">
                        <h4>Spécialisations</h4>
                    </div>
                    <div class="skill_item_inner">
                        <div class="single_skill">
                            <h4>jQuery / jQuery UI</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h4>Intégration web</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h4>Bootstrap</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h4>SEO <small>(référencement naturel)</small></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress_parcent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="skill_text more_skills">
                        <h4>En plus</h4>
                        <p><strong>Développement Web</strong>: Responsive Design, Respect des normes W3C et d'accessibilité web, compabilité cross-browser, POO</p>
                        <p><strong>Versioning</strong>: Git, GitHub</p>
                        <p><strong>Format de données</strong>: JSON, XML</p>
                        <p><strong>Workflow</strong>: Grunt, Npm</p>
                        <p><strong>Gestion de Projet</strong>: Rédaction de cahiers des charges techniques et fonctionnels, Méthode Agile/SCRUM</p>
                        <p><strong>Veille technologique</strong>: React.js, node.js, Sass, Less</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="education_area pad" id="experience">
            <div class="main_title">
                <h2>Expérience professionnelle</h2>
            </div>
            <div class="education_inner_area">
                <div class="education_item wow fadeInUp animated seed">
                    <h6>2015-2019</h6>
                    <h4>Dévellopeur fullstack - CTO</h4>
                    <h5>Omendo - Le Labbo</h5>
                    <p>Conception et développement de la plateforme de formation SEED :</p>
                    <p>Développement et intégration sur l'outil de montage vidéo</p>
                    <p>Gestion et intégration de la refonte totale du site Omendo</p>
                    <p>Développement et intégration sur la plateforme SPI en ligne</p>
                    <p>Gestion du recrutement (lead dev et apprenti)</p>
                    <p>Environnement technique : PHP5, MySQL, Javascript, jQuery, HTML5, CSS3, GIT, AWS, Windows.</p>
                    <img src="img/seed.png" alt="">
                </div>
                <div class="education_item wow fadeInUp animated abtasty">
                    <h6>2013-2015</h6>
                    <h4>Dévellopeur front-end</h4>
                    <h5><a href="https://www.abtasty.com">AB Tasty</a></h5>
                    <p>Conception et développement de nouvelles fonctionnalités sur l'outil de gestion des tests AB/ségmentation</p>
                    <p>Conception et développement de la première version du heatmap (carte de chaleur)</p>
                    <p>Développement de fonctionnalités sur l'outil de création de tests</p>
                    <p>Intégration de la refonte totale du site de l'entreprise</p>
                    <p>Aide à la mise en place de test AB complexe</p>
                    <p>Environnement technique : PHP5, MySQL, Javascript, jQuery, HTML5, CSS3, GIT, Windows.</p>
                    <img src="img/abtasty.jpg" alt="">
                </div>
                <div class="education_item wow fadeInUp animated adux">
                    <h6>2010-2013</h6>
                    <h4>Développeur front-end</h4>
                    <h5><a href="http://www.adux.com/">HiMedia</a> (devenu AdUX)</h5>
                    <p>Conception et développement des opérations spéciales, jeux concours :</p>
                    <ul>
                        <li>- Espaces dédiés (landing page, mini site, ...)</li>
                        <li>- Jeux concours (Quizz, instant gagnant, ...)</li>
                        <li>- Modules javascript, API Youtube, Facebook, Twitter</li>
                    </ul>
                    <p>Développement/maintenance sur les sites du groupe</p>
                    <p>Intégration / routage d'e-mail</p>
                    <p>Environnement technique : PHP5, MySQL, Javascript, HTML5, CSS3, GIT, Windows.</p>
                    <img src="img/adux.png" alt="">
                </div>
                <div class="education_item wow fadeInUp animated kernix">
                    <h6>2008-2010</h6>
                    <h4>Développeur fullstack</h4>
                    <h5>en alternance chez <a href="https://www.kernix.com">KerniX</a></h5>
                    <p>Chargé du développement et de l’intégration des applications web.</p>
                    <p>Suivi et maintenance des sites</p>
                    <p>Intervention sur l’accessibilité et le référencement naturel.</p>
                    <p>Environnement technique : PHP5, MySQL, Javascript, xHTML, CSS, Windows, framework PHP maison KWO.</p>
                    <img src="img/kernix.png" alt="">
                </div>
            </div>
        </section>
        <section class="service_area" id="service">
            <div class="main_title">
                <h2>SERVICES</h2>
            </div>
            <div class="service_inner row">
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fas fa-laptop" aria-hidden="true"></i>
                        <h4>Développement de site internet</h4>
                        <p>Site vitrine, landing page, CMS : Wordpress, Joomla etc ...</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fab fa-css3-alt" aria-hidden="true"></i>
                        <h4>Intégration web</h4>
                        <p>Structure HTML, intégration CSS, intégration d'email, optimisation de page</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fab fa-js-square" aria-hidden="true"></i>
                        <h4>Développement Javascript</h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        <h4>Site mobile/responsive</h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio_area pad" id="portfolio">
            <div class="main_title">
                <h2>Portfolio</h2>
            </div>
            <div class="porfolio_menu">
                <ul class="causes_filter">
                    <li class="active" data-filter="*"><a href="">Tout</a></li>
                    <li data-filter=".abtasty"><a href="">AB Tasty</a></li>
                    <li data-filter=".kernix"><a href="">Kernix</a></li>
                    <li data-filter=".lelabbo"><a href="">Le Labbo</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="portfolio_list_inner">
                    <div class="col-md-4 kernix">
                        <div class="portfolio_item" data-selector="familytrip" data-title="Familytrip V1">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/familytrip.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Familytrip</h4>
                                <h5>Intégration web / développement</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 kernix">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/neowebcar.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Neowebcar</h4>
                                <h5>Intégration web / développement</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 kernix">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/afflelou.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Extranet Afflelou</h4>
                                <h5>Intégration web</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lelabbo">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/outil-video.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Outil video</h4>
                                <h5>Développement front-end</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lelabbo">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/seed.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Plateforme SEED</h4>
                                <h5>Développement fullstack</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lelabbo">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/omendo.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Refonte site web Omendo</h4>
                                <h5>Intégration / développement front-end / SEO</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 abtasty">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/heatmap.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Heatmap V1</h4>
                                <h5>développement front-end / Mysql / PHP</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 abtasty">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/abtasty-editeur.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>AB Tasty - outil d'édition</h4>
                                <h5>développement front-end / CSS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 abtasty">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <div class="overlay"><i class="fas fa-search"></i></div>
                                <img src="img/portfolio/AB-Tasty.jpg" alt="">
                            </div>
                            <div class="portfolio_title">
                                <h4>Refonte site web AB Tasty 2016</h4>
                                <h5>Intégration / développement front-end / SEO</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_area pad" id="contact">

            <div class="row">
                <div class="col-md-12">
                    <div class="wow fadeInUp animated">
                        <div class="contact_title text-center">
                            <h3>Une idée, un projet ? N'hésitez pas à me contacter :</h3>
                        </div>

                        <div class="row">
                            <div class="media col-md-4">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Téléphone</h4>
                                    <p>06 68 78 50 20</p>
                                </div>
                            </div>
                            <div class="media col-md-4">
                                <div class="media-left">
                                    <i class="fas fa-at"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Email</h4>
                                    <p><a href="mailto:geoffrey.lohse@gmail.com">geoffrey.lohse@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="media col-md-4">
                                <div class="media-left">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Linkedin</h4>
                                    <p><a href="https://www.linkedin.com/in/geoffreylohse/" target="_blank">www.linkedin.com</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>
</div>

<footer class="footer_area">
    <div class="footer_copyright">
        <div class="container">
            <div class="pull-left">
                <h5><p>Made with <i class="far fa-heart"></i></p></h5>
            </div>
            <div class="pull-right">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">&Agrave; propos </a></li>
                    <li><a href="#skill">Compétences</a></li>
                    <li><a href="#experience">Expériences</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="envalab-style-switch" id="switch-style">
    <div class="switch-button" id="toggle-switcher"><i class="fas fa-palette"></i></div>
    <div class="switched-options">
        <ul class="styles">
            <li>
                <a href=# onmouseenter='return setActiveStyleSheet("default"),!1' title="default"></a>
            </li>
            <li>
                <a href=# onmouseenter='return setActiveStyleSheet("violet"),!1' title="violet"></a>
            </li>
            <li>
                <a href=# onmouseenter='return setActiveStyleSheet("blue"),!1' title="blue"></a>
            </li>
            <li>
                <a href=# onmouseenter='return setActiveStyleSheet("gold"),!1' title="gold"></a>
            </li>
        </ul>
    </div>
</div>

<!--<div class="modal fade" tabindex="-1" role="dialog" id="portfolio_modal">-->
<!--    <div class="modal-dialog modal-lg" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                <h4 class="modal-title"></h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="portfolio_modal_content familytrip">-->
<!--                    <p class="text-center">Mise en ligne : 17/06/2010 - Site : <a href="http://www.familytrip.fr" target="_blank">www.familytrip.fr</a></p>-->
<!--                    <img src="img/portfolio/familytrip.png" alt="">-->
<!--                    <div class="skill_text">-->
<!--                        <p>Structure HTML</p>-->
<!--                        <p>Découpe et intégration CSS des maquettes du directeur artistique</p>-->
<!--                        <p>Développement javascript (slider, carte de france interactive ...)</p>-->
<!--                        <p>Participation au développement back-end sur le framework maison KWO</p>-->
<!--                        <p class="skills_list">HTML, CSS, javascript, Prototype.js, PHP, MySQL, KWO</p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="portfolio_modal_content neowebcar">-->
<!--                    <p class="text-center">Mise en ligne : 15/02/2010 - Site : <a href="http://www.neowebcar.com/" target="_blank">www.neowebcar.com/</a></p>-->
<!--                    <img src="img/portfolio/neowebcar.png" alt="">-->
<!--                    <div class="skill_text">-->
<!--                        <p>Structure HTML</p>-->
<!--                        <p>Découpe et intégration CSS des maquettes du directeur artistique</p>-->
<!--                        <p>Développement javascript (slider, carte de france interactive ...)</p>-->
<!--                        <p>Participation au développement back-end sur le framework maison KWO</p>-->
<!--                        <p class="skills_list">HTML, CSS, javascript, Prototype.js, PHP, MySQL, KWO</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/counter-up/waypoints.min.js"></script>
    <script src="js/counter-up/jquery.counterup.min.js"></script>
    <script src="js/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope/isotope.pkgd.min.js"></script>

<!--    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>-->

    <script src="vendors/style-switcher/styleswitcher.js"></script>
    <script src="vendors/style-switcher/switcher-active.js"></script>

    <script src="vendors/animate-css/wow.min.js"></script>

<!--    <script src="js/jquery.form.js"></script>-->
<!--    <script src="js/jquery.validate.min.js"></script>-->
<!--    <script src="js/contact.js"></script>-->

    <script src="js/script.min.js"></script>
</body>
</html>
