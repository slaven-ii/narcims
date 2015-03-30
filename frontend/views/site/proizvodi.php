<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 29/03/15
 * Time: 10:36
 */

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
                                    <h4>Ukrasno bilje</h4>
                                    <span class="text">
                                        Proučite naš asortiman i lakše donesite odluku o kupnji <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/proizvodi-1.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Supstrati</h4>
                                    <span class="text">
                                        Proučite koja vrsta supstrataje savršena za vašu biljku <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/proizvodi-2.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Priručnik</h4>
                                    <span class="text">
                                        za odabir, kupovinu i održavanje cvijeća <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/proizvodi-3.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Katalog</h4>
                                    <span class="text">
                                        Prolistajte i budite u toku sa akcijskim cijenama <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/proizvodi-4.jpg" alt="Image"/>
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
            Ukrasno bilje
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Proljeće</h4>
                        <span class="text">
                            pogledajte naš asortiman ...
                        </span>
                        <a class="btn classic" href="#">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>Ukrasno</strong> cvijeće
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="right">
                        <h4 class="green">
                            Jesen
                        </h4>
                        <span class="text">
                            Provjerite naš jesenski asortimanu vemenskom razdoblju od ...
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
                        <img src="static/ui/img-7.jpg" alt="" width="1366" height="600">
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
            Supstrati
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Provjerena kvaliteta</h4>
                        <span class="text">
                            Garantiramo Vam kvalitetne supstrate, koje i sami koristimo u vlastitoj proizdvodnji
                        </span>
                        </span>
                        <a class="btn classic" href="#">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>Vrste supstrata</strong>
                        </h4>
                        <span class="text">
                            dijelimo, ovisno potrebama klijenata, na: <br/>
                            STENDER PRO <br/>
                            STENDER HOBBY
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            Lorem
                        </h4>
                        <span class="text">
                            ispum
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
                        <img src="static/ui/img-8.jpg" alt="" width="1366" height="600">
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
            Priručnik
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Korisno</h4>
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
                            <strong>Priručnik</strong>
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            Pitanja?
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh
                        </span>
                        <a class="btn classic" href="#">info@pecina.hr</a>
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
                        <img src="static/ui/img-9.jpg" alt="" width="1366" height="600">
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
            Katalog
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Pogledajte</h4>
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
                            <strong>Katalog</strong>
                        </h4>
                        <span class="text">
                            u izradi
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            Lorem ipsum
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh
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
                        <img src="static/ui/img-10.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-5">
            <i></i>
        </a>
    </section>

</main>