<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 29/03/15
 * Time: 10:32
 */
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div id="cd-nav" class="cd-nav">
    <div class="cd-navigation-wrapper">
        <div class="cd-half-block">
            <h2>Izbornik</h2>
            <nav>
                <ul class="cd-primary-nav">
                    <li><a href="#" class="selected">Naslovna</a></li>
                    <li><a href="#" class="">Djelatnosti</a></li>
                    <li><a href="#" class="">Proizvodi</a></li>
                    <li><a href="#" class="">O nama</a></li>
                    <li><a href="#" class="">Galerija</a></li>
                    <li><a href="#" class="">Kontakt</a></li>
                    <!-- list items here -->
                </ul>
            </nav>
        </div><!-- .cd-half-block -->

    </div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->


<a href="#cd-nav" class="cd-nav-trigger">Menu
    <span class="cd-nav-icon"></span>

    <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
        <circle fill="transparent" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
    </svg>
</a>


<nav class="main-nav">

    <div class="container-24">
        <div class="col-24">

            <?php echo $this->render('_navigation'); ?>


        </div>
    </div>

    <div class="subnav">
        <div class="container-12">
            <div class="col-12">
                <div class="col-3">
                    <article>
                        <a href="" class="gridblock two" data-scroll-to="on" data-scroll-to-target=".scroll-1">
                            <figure>
                                <img src="static/ui/about-1.jpg" alt="Image"/>
                            </figure>
                            <h4>Misija i vizija</h4>
                        </a>
                    </article>
                </div>
                <div class="col-3">
                    <article>
                        <a href="" class="gridblock two" data-scroll-to="on" data-scroll-to-target=".scroll-2">
                            <figure>
                                <img src="static/ui/about-2.jpg" alt="Image"/>
                            </figure>
                            <h4>Povijest</h4>
                        </a>
                    </article>
                </div>
                <div class="col-3">
                    <article>
                        <a href="" class="gridblock two" data-scroll-to="on" data-scroll-to-target=".scroll-3">
                            <figure>
                                <img src="static/ui/about-3.jpg" alt="Image"/>
                            </figure>
                            <h4>Društvena odgovornost</h4>
                        </a>
                    </article>
                </div>
                <div class="col-3">
                    <article>
                        <a href="" class="gridblock two" data-scroll-to="on" data-scroll-to-target=".scroll-4">
                            <figure>
                                <img src="static/ui/about-4.jpg" alt="Image"/>
                            </figure>
                            <h4>Praksa</h4>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>

</nav>

<header class="work-header">

    <div class="header-bg home"></div>

    <div class="out-w">
        <div class="out">
            <div class="inn">
                <div class="container-8">
                    <div class="col-8">
                        <figure>
                        <span class="itemblock-header-grid two">
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Misija i vizija</h4>
                                    <span class="text">
                                        naši ciljevi i planovi za budućnost ...
                                    </span>
                                </span>
                                <img src="static/ui/about-1.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Povijest</h4>
                                    <span class="text orange-dark">
                                        Vrtlarije Pecina od 1911. do danas. Stoljetna tradicija ...
                                    </span>
                                </span>
                                <img src="static/ui/about-2.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Društvena odgovornost</h4>
                                    <span class="text">
                                        donacije, briga za okoliš, nagrade i priznanja ...
                                    </span>
                                </span>
                                <img src="static/ui/about-3.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Praksa</h4>
                                    <span class="text">
                                        kod nas ...
                                    </span>
                                </span>
                                <img src="static/ui/about-4.jpg" alt="Image"/>
                            </span>
                        </span>
                        </figure>
                    </div>
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

<main id="main-content">

    <section class="green-line scroll-1">
        <h3>
            Misija i vizija
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text">
                    <article class="left">
                        <h4 class="green">Misija</h4>
                        <span class="text">
                            u tijek proizvodnje ukrasnog bilja ...
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="middle">
                        <h4 class="green">
                            <strong>Vrtlarija Pecina</strong>
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.
                        </span>
                        <a class="btn classic" href="#">povijest</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="right">
                        <h4 class="green">
                            Vizija
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
            Povijest
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Drvo života</h4>
                        <span class="text orange-dark">
                            od pradjeda do unuka
                        </span>
                        </span>
                        <a class="btn classic" href="#">galerija</a>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="middle">
                        <h4 class="green">
                            <strong>povijest</strong>
                        </h4>
                        <span class="text orange-dark">
                            Proljetna proizvodnja ukrasnog bilja započinje početkom travnja i završava krajem lipnja.
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text has-button">
                    <article class="right">
                        <h4 class="green">
                            stender hobby
                        </h4>
                        <span class="text orange-dark">
                            za ljubitelje prirode i uređenja vrtova.
                        </span>
                        <a class="btn classic" href="#">webshop</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="tree-wrapper">

        <div class="container-12">
            <div class="col-12">
                <div class="tree">
                    <div id="tree">

                    </div>
                    <div id="tree-original" style="opacity: 0;">
                        <img src="static/ui/tree.svg" alt=""/>
                    </div>
                </div>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-3">
            <i></i>
        </a>
    </section>

    <section class="green-line scroll-3">
        <h3>
            Društvena odgovornost
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Donacije</h4>
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
                            <strong>Društvena odgovornost</strong>
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh
                        </span>
                    </article>
                </div>
                <div class="col-4 one-col-text">
                    <article class="right">
                        <h4 class="green">
                            Briga za okoliš
                        </h4>
                        <span class="text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh
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
                        <img src="static/ui/img-1.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <div class="inner-cols">
            <div class="out">
                <div class="inn">
                    <div class="container-12">
                        <div class="col-12 itemblock-cols-wrapper three">
                            <div class="inner-col">
                                <figure>
                                    <img src="static/ui/about-5.jpg" alt="Image"/>
                                </figure>
                                <span class="text">
                                    Vrtlarija 'Pecina' dugogodišnji je pomagatelj hvalevrijednih akcija Zagrebačke udruge <span class="green">'Bokci'</span>, koja brine o starijima, čistoći i ljepoti grada Zagreba.
                                    <br/>
Također, kao donatori cvijeća, redovito sudjelujemo na <span class="green">'Flora Art-u'</span>, sajmu cvijeća Grada Zagreba.
                                    <br/>
Prošlogodišnjim sudjelovanjem u projektima <span class="green">TZ Grada Sveta Nedelja</span>, započeli smo, nadamo se, dugu i uspješnu suradnju.
                                </span>
                            </div>
                            <div class="inner-col">
                                <figure>
                                    <img src="static/ui/about-6.jpg" alt="Image"/>
                                </figure>
                                <span class="text">
                                    Kako je Vrtlarija 'Pecina', planski projektirana upravo za proizvodnju cvijeća, upravo je okolišu posvećena
velika pažnja prilikom izgradnje.

Kako je danas svaka, pa tako i cvjećarska proizvodnja, ovisna o preparatima kemijske industrije, bilo je važno moguća zagađenja svesti na
najmanju moguću mjeru.
                                </span>
                            </div>
                            <div class="inner-col">
                                <figure>
                                    <img src="static/ui/about-7.jpg" alt="Image"/>
                                </figure>
                                <span class="text">
                                    To smo postigli ugradnjom posebnih filtera koji adsorbiraju sve, ekološki štetne ione kemijskih supstanci.
<br/>
Također, u skladu sa današnjim načelima smanjene potrošnje i zagađenja, za glavni energent Vrtlarije odabran je <span class="green">plin</span>.
<br/>
Time se izbjeglo veliko onečišćenje i potrošnja lož
ulja ili vrijednog drveta.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-4">
            <i></i>
        </a>
    </section>

    <section class="green-line scroll-4">
        <h3>
            Praksa
        </h3>
    </section>

    <section class="three-col-text">
        <div class="container-12">
            <div class="col-12">
                <div class="col-4 one-col-text has-button">
                    <article class="left">
                        <h4 class="green">Posao kod nas</h4>
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
                            <strong>Dobrodošli</strong>
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
                            Praksa kod nas
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
                        <img src="static/ui/img-11.jpg" alt="" width="1366" height="600">
                    </li>
                </ul>
            </div>
        </div>

        <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-5">
            <i></i>
        </a>
    </section>

</main>