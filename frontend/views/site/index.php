<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<style>
    .bg-gradient{
        background: #ffffff; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover, #ffffff 30%, #b2c2a6 100%); /* FF3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(30%,#ffffff), color-stop(100%,#b2c2a6)); /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover, #ffffff 30%,#b2c2a6 100%); /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover, #ffffff 30%,#b2c2a6 100%); /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover, #ffffff 30%,#b2c2a6 100%); /* IE10+ */
        background: radial-gradient(ellipse at center, #ffffff 30%,#b2c2a6 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#b2c2a6',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    }
</style>
<svg style="display:none;">
    <!-- icons here -->

    <symbol id="twitter-icon" viewBox="0 0 32 32">
        <path d="M32 6.076c-1.177 0.522-2.443 0.875-3.771 1.034 1.355-0.813 2.396-2.099 2.887-3.632-1.269 0.752-2.674 1.299-4.169 1.593-1.198-1.276-2.904-2.073-4.792-2.073-3.626 0-6.565 2.939-6.565 6.565 0 0.515 0.058 1.016 0.17 1.496-5.456-0.274-10.294-2.888-13.532-6.86-0.565 0.97-0.889 2.097-0.889 3.301 0 2.278 1.159 4.287 2.921 5.465-1.076-0.034-2.088-0.329-2.974-0.821-0.001 0.027-0.001 0.055-0.001 0.083 0 3.181 2.263 5.834 5.266 6.437-0.551 0.15-1.131 0.23-1.73 0.23-0.423 0-0.834-0.041-1.235-0.118 0.835 2.608 3.26 4.506 6.133 4.559-2.247 1.761-5.078 2.81-8.154 2.81-0.53 0-1.052-0.031-1.566-0.092 2.905 1.863 6.356 2.95 10.064 2.95 12.076 0 18.679-10.004 18.679-18.68 0-0.285-0.006-0.568-0.030-0.849 1.283-0.926 2.396-2.082 3.276-3.398z" fill="#000000"></path>
    </symbol>
</svg>

<!--<svg class="twitter-icon">
    <use xlink:href="#twitter-icon"></use>
<svg>-->

<nav class="main-nav">

    <div class="container-24">
        <div class="col-24">

            <?php echo $this->render('_navigation'); ?>

        </div>
    </div>
</nav>

<header class="home-header">

    <div class="header-bg home bg-gradient"></div>

    <div class="out">
        <div class="inn">
            <h1>Proizvodnja i prodaja cvijeća</h1>
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
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="header-box">
        <span>Radno vrijeme:</span>
        <div class="home-box-inner">
            <span class="label">pon-pet:</span>
            <span class="val">8h - 18h</span>
            <span class="label">sub:</span>
            <span class="val">8h - 15h</span>
        </div>
    </div>

    <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-1">
        <i></i>
    </a>

</header>

<main id="main-content" class="scroll-1">

    <section class="green-line">
        <h3>
            Najava
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="orange">Dođite</h4>
                        <span class="text">
                            i uvjerite se u kvalitetu uzgojnog procesa
                        </span>
                        </span>
                        <a class="btn classic" href="#">kontakt</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="orange">
                            <strong>Početak 2015.</strong> u vrtlariji Pecina
                        </h4>
                        <span class="text">
                            Ponovno smo započeli našu 104. proljetnu proizvodnju ukrasnog bilja
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="orange">
                            Savjetujte se
                        </h4>
                        <span class="text">
                            i nabavite opremu za vašu vlastitu hobi proizvodnju cvijeća i povrća!
                        </span>
                        <a class="btn classic" href="mailto:info@pecina.hr">info@pecina.hr</a>
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
                        <img src="static/ui/img-1.jpg" alt="" width="auto" height="600">
                    </li>
                    <li>
                        <img src="static/ui/img-2.jpg" alt="" width="auto" height="600">
                    </li>
                </ul>
            </div>

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
                    .. jer možda baš vi dobijete poklon - besplatnu trajnicu po izboru!
                </span>
            </div>

            <!--<div class="navigation">
                <a href="#" class="prev">Previous</a>
                <a href="#" class="next">Next</a>
            </div>
            <div class="pagination"></div>-->
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-2">
            <i></i>
        </a>
    </section>

    <section class="green-line scroll-2">
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
                            naš raznolik asortiman: ljetnica, trajnica i ukorijenjenih reznica.
                        </span>
                        </span>
                        <a class="btn classic" href="#">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>Proljeće</strong>
                        </h4>
                        <span class="text">
                            Proljetna proizvodnja ukrasnog bilja započinje početkom travnja i završava krajem lipnja.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            Naručite
                        </h4>
                        <span class="text">
                            i tako si osigurajte svoje omiljeno bilje!
                        </span>
                        <a class="btn classic" href="#">webshop</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-wrapper">
        <div class="extra-slider no-slider">
            <div class="wrapper">
                <ul>
                    <li>
                        <img src="static/ui/img-1.jpg" alt="" width="1366" height="600">
                    </li>
                    <li>
                        <img src="static/ui/img-2.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-3">
            <i></i>
        </a>
    </section>

    <section class="green-line scroll-3">
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
                            naš raznolik asortiman: raznovrsnih krizantema, maćuhica, thuja i trajnica.
                        </span>
                        </span>
                        <a class="btn classic" href="#">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>Jesen</strong>
                        </h4>
                        <span class="text">
                            Jesenska proizvodnja ukrasnog bilja započinje početkom travnja i završava 1.studenog, na dan Svih Svetih.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            Naručite
                        </h4>
                        <span class="text">
                            i tako si osigurajte svoje omiljeno bilje!
                        </span>
                        <a class="btn classic" href="#">webshop</a>
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
                        <img src="static/ui/img-1.jpg" alt="" width="1366" height="600">
                    </li>
                    <li>
                        <img src="static/ui/img-2.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-4">
            <i></i>
        </a>
    </section>

</main>

