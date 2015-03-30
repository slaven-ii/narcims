<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src='static/js/vendor/modernizr/modernizr.js'></script>

    <!-- Page styles -->
    <link rel="stylesheet" href="static/css/style.css" />

    <link rel="shortcut icon" href="static/ui/meta/favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="static/ui/meta/touch-icon-iphone.png">-->
    <!--<link rel="apple-touch-icon" sizes="76x76" href="static/ui/meta/touch-icon-ipad.png">-->
    <!--<link rel="apple-touch-icon" sizes="120x120" href="static/ui/meta/touch-icon-iphone-retina.png">-->
    <!--<link rel="apple-touch-icon" sizes="152x152" href="static/ui/meta/touch-icon-ipad-retina.png">-->

    <!--[if gte IE 9]>
    <style type="text/css">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->

    <?php $this->head() ?>
</head>
<body id="topme">
    <?php $this->beginBody() ?>

    <?= $content ?>
    <footer class="footer scroll-4">
        <section class="green-line">
            <h3>
                Kontakt
            </h3>
        </section>

        <section class="three-col-text">
            <div class="container-12">
                <div class="col-12">
                    <div class="col-4 one-col-text">
                        <article class="left">
                            <h4 class="green">kako do nas?</h4>
                        <span class="text">
                            - autoput Zagreb - Ljubljana (E 70; A3) <br/>
                            - izlaz Sv. Nedelja na prvom semaforu skrenite desno (stara Samoborska) <br/>
                            - nakon 900 m stižete u Vrtlariju Pecina
                        </span>
                        </article>
                    </div>
                    <div class="col-4 one-col-text">
                        <article class="middle">
                            <h4 class="green">
                                <strong>kontak</strong>
                            </h4>
                        <span class="text">
                            +395 1 3842 892 <br/>
                            <span class="green">Jaroslav Pecina</span> <br/>
                            +385 98 450 666 <br/>
                            <span class="green">Jan Pecina</span> <br/>
                            +385 98 1658 387 <br/>
                            <a href="mailto:info@pecina.hr">info@pecina.hr</a>
                        </span>
                        </article>
                    </div>
                    <div class="col-4 one-col-text has-button">
                        <article class="right">
                            <h4 class="green">
                                zašto baš mi?
                            </h4>
                        <span class="text">
                            Zato jer Vrtlarija Pecina osim proizvodnje biljaka nudi i:
                            povjerenje, supstrate, <br/>
                            uređenje vrtova, praksu
                        </span>
                            <a class="btn classic" href="#">djelatnosti</a>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-wrapper">
            <div class="container-12">
                <div class="col-12">
                    <div class="map-inner">
                        <div class="address">
                            <h4>Adresa</h4>
                        <span class="text">
                            Franje Tuđmana 20, <br/>
                            Novaki <br/>
                            10431 Sv. Nedelja
                        </span>
                        </div>
                        <div id="simple-map-canvas" rel="45.8041251|15.7977075"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="copy">
            <div class="container-12">
                <div class="col-12">
                    &copy; 2015. Pecina d.o.o. All rights reserved.

                    <a class="arrow-up" href="#" data-scroll-to="on" data-scroll-to-target="#topme">
                        <i></i>
                    </a>
                </div>
            </div>
        </section>
    </footer>

    <!--SCRIPTS-->
    <!-- <script src='static/js/vendor/jquery/jquery.min.js'></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="//maps.googleapis.com/maps/api/js?&sensor=false"></script>
    <script src='static/js/frontend.min.js'></script>
    <script src='static/js/main.js'></script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
