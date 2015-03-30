<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 29/03/15
 * Time: 10:31
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
                                    <h4>Proljeće</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju proljetnog cvijeća <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/galerija-1.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Jesen</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju jesenskog cvijeća <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/galerija-2.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Supstrati</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju supstrata <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/galerija-3.jpg" alt="Image"/>
                            </span>
                            <span class="i-block">
                                <span class="desc">
                                    <h4>Proizvodnja</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju proizvodnje cvijeća <br/>  ...
                                    </span>
                                </span>
                                <img src="static/ui/galerija-4.jpg" alt="Image"/>
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
            Ostale galerije
        </h3>
    </section>

    <section class="gallery-list">

        <div class="header-bg home"></div>

        <div class="out-w">
            <div class="out">
                <div class="inn">
                    <div class="container-8">
                        <div class="col-8">
                            <figure>
                        <span class="itemblock-header-grid two">
                            <span class="i-block">
                                <img src="static/ui/galerija-1.jpg" alt="Image"/>
                                <span class="desc">
                                    <h4>Uređenje vrtova</h4>
                                    <span class="text">
                                        Zavirite u našu galerijuuređenja vrtova <br/>  ...
                                    </span>
                                </span>
                            </span>
                            <span class="i-block">
                                <img src="static/ui/galerija-2.jpg" alt="Image"/>
                                <span class="desc">
                                    <h4>Vrtlarija</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju staklenika moderne tehnologije <br/>  ...
                                    </span>
                                </span>
                            </span>
                            <span class="i-block">
                                <img src="static/ui/galerija-3.jpg" alt="Image"/>
                                <span class="desc">
                                    <h4>Galerija</h4>
                                    <span class="text">

                                    </span>
                                </span>
                            </span>
                            <span class="i-block">
                                <img src="static/ui/galerija-4.jpg" alt="Image"/>
                                <span class="desc">
                                    <h4>Galerija</h4>
                                    <span class="text">

                                    </span>
                                </span>
                            </span>
                        </span>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>