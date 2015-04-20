<?php
/**
 * Template name: Naslovi
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 16:16
 *
 */

/* @var $this common\components\View */

?>

<!--START HEADER-->
<header class="home-header">

    <div class="header-bg home"></div>

    <div class="out">
        <div class="inn">
            <h1><?php $this->item(
                array(
                    'name' => 'naslov',
                    'validation' => [['naslov'], 'required'],
                    'size' => '12'
                )
            );?>
            </h1>
            <figure>
                <img src="static/ui/home-header-image.png" alt=""/>
                <figcaption>
                    <span class="home-left-text">
                        Zavirite u <br/>
                        našu stoljetnu ...
                    </span>
                    <span class="home-right-text">
                        oazu <br/>
                        cvijeća.
                    </span>

                    <div class="header-box">
                        <span>Radno vrijeme:</span>
                        <div class="home-box-inner">
                            <span class="label">pon-pet:</span>
                            <span class="val">8h - 18h</span>
                            <span class="label">sub:</span>
                            <span class="val">8h - 15h</span>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>

    <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-1">
        <i></i>
    </a>

</header>
<!--END HEADER-->

<!--START MAIN-->

<!--START SECTION-->
<section data-section class="section scroll-1" data-animation="on">
    <section class="green-line">
        <h3>
            <?php

            $this->item(
                array(
                    'name' => 'paragraf1',
                    'validation' => [['paragraf1'], 'required'],
                    'size' => '6'
                )
            );

            ?>
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="orange">DOĐITE</h4>
                        <span class="text">
                            i uvjerite se u visoku tehnologiju i kvalitetu uzgojnog procesa!
                        </span>
                        </span>
                        <a class="btn classic" href="#" data-scroll-to="on" data-scroll-to-target=".footer">lokacija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="orange">
                            POČELO PROLJEĆE U VRTLARIJI PECINA
                        </h4>
                        <span class="text">
                            Ponovno smo započeli, <br>našu 104. proljetnu proizvodnju <br>ukrasnog bilja!
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="orange">
                            SAVJETUJTE SE
                        </h4>
                        <span class="text">
                            i nabavite potrebnu opremu za <br>vašu vlastitu hobi proizvodnju cvijeća i povrća!
                        </span>
                        <a class="btn classic" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/kontakt'); ?>">upit</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-wrapper">
        <div class="extra-slider">
            <div class="wrapper">
                <ul>
                    <li>
                        <img src="static/images/F721-04.jpg" alt="" width="1920" height="843">
                    </li>

                </ul>
            </div>

            <!--<div class="navigation">
                <a href="#" class="prev">Previous</a>
                <a href="#" class="next">Next</a>
            </div>
            <div class="pagination"></div>-->
        </div>
    </section>

    <div class="fb-box">
        <span class="icons-wrapper">
            <span class="fb-icon">
                <img src="static/ui/svg/fb-icon.svg" alt="Facebook"/>
            </span>
            <span class="like-icon">
                <img src="static/ui/svg/like-icon.svg" alt="Facebook"/>
            </span>
        </span>

        <span class="box-title">
            Lajkajte nas <br/>
            i pratite naše <br/>
            objave na <br/>
            Facebooku
        </span>

        <span class="text">
            .. jer možda baš Vi dobijete poklon - besplatnu trajnicu po izboru!
        </span>
    </div>

    <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-2">
        <i></i>
    </a>
</section>
<!--END SECTION-->

<!--START SECTION-->
<section data-section class="section scroll-2" data-animation="on">
    <section class="green-line">
        <h3>
            Proljetna proizvodnja
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Pogledajte</h4>
                        <span class="text">
                            naš raznoliki asortiman <br>proljetnica, ljetnica, trajnica, <br>mirisnog i začinskog bilja.
                        </span>
                        </span>
                        <a class="btn classic" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/galerija'); ?>">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>Proljeće</strong>
                        </h4>
                        <span class="text">
                            Proljetna sezona u Vrtlariji Pecina započinje početkom siječnja i završava krajem lipnja. S prvim danima proljeća počinje prodaja ukrasnog bilja iz vlastite proizvodnje.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            Naručite
                        </h4>
                        <span class="text">
                            na vrijeme i tako si <br>osigurajte svoje <br>omiljeno bilje!
                        </span>
                        <!-- <a class="btn classic" href="#">webshop</a> -->
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-wrapper">
        <div class="extra-slider is-slider">
            <div class="wrapper">
                <ul>
                    <li>
                        <img src="static/images/DSC09778_proljece.jpg" alt="" width="1920" height="843">
                    </li>
                    <li>
                        <img src="static/images/DSC09795_proljece.jpg" alt="" width="1920" height="843">
                    </li>
                    <li>
                        <img src="static/images/DSC09824_proljece.jpg" alt="" width="1920" height="843">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-3">
        <i></i>
    </a>
</section>
<!--END SECTION-->

<!--START SECTION-->
<section data-section class="section scroll-3" data-animation="on">
    <section class="green-line">
        <h3>
            Jesenska proizvodnja
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Pogledajte</h4>
                        <span class="text">
                            naš asortiman <br>raznovrsnih krizantema, <br>maćuhica, thuja i trajnica.
                        </span>
                        </span>
                        <a class="btn classic" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/galerija'); ?>">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>Jesen</strong>
                        </h4>
                        <span class="text">
                            Jesenska sezona u Vrtlariji Pecina započinje već u lipnju - proizvodnjom prvo krizantema, a zatim i ostalih vrsta za prigodnu prodaju povodom blagdana Svih Svetih.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            Naručite
                        </h4>
                        <span class="text">
                            na vrijeme i tako si <br>osigurajte svoje <br>omiljeno bilje!
                        </span>
                        <!-- <a class="btn classic" href="#">webshop</a> -->
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-wrapper">
        <div class="extra-slider is-slider">
            <div class="wrapper">
                <ul>
                    <li>
                        <img src="static/images/IMG_3440-zima.jpg" alt="" width="1920" height="843">
                    </li>
                    <li>
                        <img src="static/images/IMG_3441-zima.jpg" alt="" width="1920" height="843">
                    </li>
                    <li>
                        <img src="static/images/IMG_3459-zima.jpg" alt="" width="1920" height="843">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-4">
        <i></i>
    </a>
</section>
<!--END SECTION-->



