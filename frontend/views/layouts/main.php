<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;

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
    <link rel="stylesheet" href="/static/css/style.css?r=1" />

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
<body>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62156779-1', 'auto');
        ga('send', 'pageview');

    </script>
    <?php $this->beginBody() ?>

    <?= $content ?>

    <?php if(Yii::$app->controller->action->id != 'kontakt'){ ?>
    <!--START FOOTER-->
    <footer class="footer scroll-4" data-animation="on">
        <section class="green-line">
            <h3>
                Kontakt
            </h3>
        </section>

        <section class="three-col-text" style="padding-bottom: 10px;">
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
                                <strong>kontakt</strong>
                            </h4>
                        <span class="text">
                            +385 1 3842 892 <br/>
                            <span class="green">Jaroslav Pecina, dipl.ing.agr. –  hortikultura</span> <br/>
                            +385 98 450 666 <br/>
                            <span class="green">Jan Pecina, mag.ing.agr. – zaštita bilja</span> <br/>
                            +385 98 1658 387 <br/>
                            <!-- <a href="mailto:info@pecina.hr">info@pecina.hr</a> -->
                        </span>
                            <a class="btn classic" style="margin-bottom: 15px;" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/upit'); ?>" target="_blank">upit</a>
                        </article>
                    </div>
                    <div class="col-4 one-col-text has-button">
                        <article class="right">
                            <h4 class="green">
                                ADRESA
                            </h4>
                        <span class="text">
                            Vrtarija Pecina<br/>
                            Franje Tuđmana 20, Novaki <br>
                            10431 Sveta Nedelja <br>
                            <br>
                            <span class="green">OIB:</span> 87526088885
                            <br>
                            <span class="green">IBAN:</span> HR4923600001101276572
                        </span>
                        </article>
                    </div>
                </div>
            </div>
        </section>


        <section class="map-wrapper">
            <div class="container-12">
                <div class="col-12">
                    <div class="map-inner">
                        <!--
                        <div class="address">
                            <h4>Adresa</h4>
                        <span class="text">
                            Franje Tuđmana 20, <br/>
                            Novaki <br/>
                            10431 Sv. Nedelja
                            <br/>
                            <span class="green">OIB:</span> 87526088885
                            <br>
                            <span class="green">IBAN:</span> HR4923600001101276572
                        </span>
                        -->
                        </div>
                        <div id="simple-map-canvas" rel="45.8041251|15.7977075" data-img="static/ui/pecina_pin_google.png" ></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="copy">
            <div class="container-12">
                <div class="col-12">
                    &copy; 2015. Pecina d.o.o. All rights reserved.

                    <a class="arrow-up" href="#" data-scroll-to="on" data-scroll-to-target="body">
                        <i></i>
                    </a>
                </div>
            </div>
        </section>
    </footer>
    <!--END FOOTER-->
    <?php } ?>

    <!--SCRIPTS-->
    <!--<script src='static/js/vendor/jquery/jquery.min.js'></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="//maps.googleapis.com/maps/api/js?&sensor=false"></script>
    <script src='static/js/frontend.min.js'></script>

    <script src='static/js/main.js?r=5'></script>
    <script>
        $("img").each(function(){
            $(this).css("background-image", $(this).attr("src"));
        });
    </script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
