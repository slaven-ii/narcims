<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<nav class="main-nav">

    <div class="container-24">
        <div class="col-24">

            <?php echo $this->render('_navigation'); ?>


        </div>
    </div>
</nav>

<header class="work-header">

    <div class="header-bg home"></div>

    <div class="out">
        <div class="inn">
            <div class="container-8">
                <div class="col-8">
                    <figure>
                        <span class="itemblock-header-grid two">
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Proizvodnja ukrasnog bilja</h4>
                                    <span class="text">
                                        Proučite kako izgleda rast biljke od sjemenke do prekrasnog šarenog cvijeća
                                        <br/>
                                        ...
                                    </span>
                                </span>
                                <img src="static/ui/djelatnosti-1.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Prodaja supstrata</h4>
                                    <span class="text">
                                        Kod nas možete kupiti raznovrsne supstrate, ovisno o Vašim potrebama
                                        <br/>
                                        ...
                                    </span>
                                </span>
                                <img src="static/ui/djelatnosti-2.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>SAVJETOVANJE U ZAŠTITI BILJA</h4>
                                    <span class="text">
                                        Posjetite nas ili nazovite
                                        <br/>
                                        ...
                                    </span>
                                </span>
                                <img src="static/ui/djelatnosti-3.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Uređenje vrtova</h4>
                                    <span class="text">
                                        Svaku vanjsku i unutarnju lokaciju pretvaramo u ozelenjeni raj!
                                        <br/>
                                        ...
                                    </span>
                                </span>
                                <img src="static/ui/djelatnosti-4.jpg" alt="Image"/>
                            </span>
                        </span>
                    </figure>
                </div>
            </div>
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
            Proizvodnja ukrasnog bilja
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Zavirite</h4>
                        <span class="text">
                            u tijek proizvodnje ukrasnog bilja <br/>  ...
                        </span>
                        </span>
                        <a class="btn classic" href="#">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>proizvodnja</strong> U VRTLARIJI PECINA
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="right">
                        <h4 class="green">
                            lorem ipsum
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                        </span>
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
                        <img src="static/ui/img-3.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-2">
            <i></i>
        </a>
    </section>

    <section class="green-line scroll-2">
        <h3>
            prodaja supstrata
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">stender pro</h4>
                        <span class="text">
                            za profesionalce
                        </span>
                        </span>
                        <a class="btn classic" href="#">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>supstrati</strong>
                        </h4>
                        <span class="text">
                            Proljetna proizvodnja ukrasnog bilja započinje početkom travnja i završava krajem lipnja.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            stender hobby
                        </h4>
                        <span class="text">
                            za ljubitelje prirode i uređenja vrtova.
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
                        <img src="static/ui/img-4.jpg" alt="" width="1366" height="600">
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
            savjetovanje o zaštiti bilja
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">posjetite nas!</h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh
                        </span>
                        <a class="btn classic" href="#">kontakt</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>zaštita bilja</strong>
                        </h4>
                        <span class="text">
                            Jesenska proizvodnja ukrasnog bilja započinje početkom travnja i završava 1.studenog, na dan Svih Svetih.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            kontaktirajte nas!
                        </h4>
                        <span class="text">
                            i tako si osigurajte svoje omiljeno bilje!
                        </span>
                        <a class="btn classic" href="mailto:info@pecina.hr">info@pecina.hr</a>
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
                        <img src="static/ui/img-5.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-4">
            <i></i>
        </a>
    </section>

    <section class="green-line scroll-4">
        <h3>
            Uređenje vrtova
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">posjetite nas!</h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh
                        </span>
                        <a class="btn classic" href="#">kontakt</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>uređenje okućnica
                            </strong>
                        </h4>
                        <span class="text">
                            je jako bitno jer...
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            kontaktirajte nas!
                        </h4>
                        <span class="text">
                            i tako si osigurajte svoje omiljeno bilje!
                        </span>
                        <a class="btn classic" href="mailto:info@pecina.hr">info@pecina.hr</a>
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
                        <img src="static/ui/img-6.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-5">
            <i></i>
        </a>
    </section>

</main>
