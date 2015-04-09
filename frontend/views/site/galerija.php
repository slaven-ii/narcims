<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 29/03/15
 * Time: 10:31
 */

/* @var $this yii\web\View */
$this->title = 'Pecina | Galerija';

function get_files($path){
    $pathFr = Yii::getAlias('@frontend');
    $pathFull = $pathFr . "/web/static/images/gallery/".$path;
    $files = scandir($pathFull);
    $paths = array();
    foreach ($files as $key => $file) {
        if($file == '.' || $file == '..' ){
            unset($files[$key]);
        }else{
            $paths[] = "/static/images/gallery/" . $path . "/". $file;
        }
    }

    return $paths;
}

?>

<?php echo $this->render('_navigation_mobile');?>


<!--START NAV-->
<nav class="main-nav">

    <?php echo $this->render('_navigation');?>

</nav>
<!--END NAV-->

<!--START HEADER-->
<header class="work-header">

    <div class="header-bg home"></div>

    <div class="out">
        <div class="inn">
            <div class="container-8">
                <div class="col-8">
                    <figure>
                        <span class="itemblock-header-grid two">
                            <span class="i-block">
                                <?php $image = get_files('proljece'); ?>
                                <a href="<?php echo $image[0]; ?>" data-lightbox="gallery-1">
                                    <img src="static/ui/galerija-1.jpg" alt="Image"/>
                                </a>
                                <span class="gallery-list">
                                    <?php
                                    unset($image[0]);
                                    foreach($image as $img) { ?>
                                        <a href="<?php echo $img; ?>" data-lightbox="gallery-1"></a>
                                    <?php } ?>

                                </span>
                                <span class="desc">
                                    <h4>Proljeće</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju proljetnog cvijeća <br/>  ...
                                    </span>
                                </span>
                            </span>
                            <span class="i-block">
                                <?php $image = get_files('jesen'); ?>
                                <a href="<?php echo $image[0]; ?>" data-lightbox="gallery-2">
                                    <img src="static/ui/galerija-2.jpg" alt="Image"/>
                                </a>
                                <span class="gallery-list">
                                    <?php
                                    unset($image[0]);
                                    foreach($image as $img) { ?>
                                        <a href="<?php echo $img; ?>" data-lightbox="gallery-2"></a>
                                    <?php } ?>

                                </span>
                                <span class="desc">
                                    <h4>Jesen</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju jesenskog cvijeća <br/>  ...
                                    </span>
                                </span>
                            </span>
                            <span class="i-block">
                                <?php $image = get_files('supstrati'); ?>
                                <a href="<?php echo $image[0]; ?>" data-lightbox="gallery-3">
                                    <img src="static/ui/galerija-3.jpg" alt="Image"/>
                                </a>
                                <span class="gallery-list">
                                    <?php
                                    unset($image[0]);
                                    foreach($image as $img) { ?>
                                        <a href="<?php echo $img; ?>" data-lightbox="gallery-3"></a>
                                    <?php } ?>

                                </span>
                                <span class="desc">
                                    <h4>Supstrati</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju supstrata <br/>  ...
                                    </span>
                                </span>
                            </span>
                            <span class="i-block">
                                <?php $image = get_files('proizvodnja'); ?>
                                <a href="<?php echo $image[0]; ?>" data-lightbox="gallery-4">
                                    <img src="static/ui/galerija-4.jpg" alt="Image"/>
                                </a>
                                <span class="gallery-list">
                                    <?php
                                    unset($image[0]);
                                    foreach($image as $img) { ?>
                                        <a href="<?php echo $img; ?>" data-lightbox="gallery-4"></a>
                                    <?php } ?>

                                </span>
                                <span class="desc">
                                    <h4>Proizvodnja</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju proizvodnje cvijeća <br/>  ...
                                    </span>
                                </span>
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
<!--END HEADER-->

<!--START SECTION-->
<section data-section class="section scroll-1" data-animation="on">

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
                                <?php $image = get_files('uredjenje_vrtova'); ?>
                                <a href="<?php echo $image[0]; ?>" data-lightbox="gallery-4">
                                    <img src="static/ui/galerije-5.jpg" alt="Image"/>
                                </a>
                                <span class="gallery-list">
                                    <?php
                                    unset($image[0]);
                                    foreach($image as $img) { ?>
                                        <a href="<?php echo $img; ?>" data-lightbox="gallery-4"></a>
                                    <?php } ?>

                                </span>
                                <span class="desc">
                                    <h4>Uređenje vrtova</h4>
                                    <span class="text">
                                        Zavirite u našu galerijuuređenja vrtova <br/>  ...
                                    </span>
                                </span>
                            </span>
                            <span class="i-block">
                                <?php $image = get_files('vrtlarija'); ?>
                                <a href="<?php echo $image[0]; ?>" data-lightbox="gallery-4">
                                    <img src="static/ui/galerija-6.jpg" alt="Image"/>
                                </a>
                                <span class="gallery-list">
                                    <?php
                                    unset($image[0]);
                                    foreach($image as $img) { ?>
                                        <a href="<?php echo $img; ?>" data-lightbox="gallery-4"></a>
                                    <?php } ?>

                                </span>
                                <span class="desc">
                                    <h4>Vrtlarija</h4>
                                    <span class="text">
                                        Zavirite u našu galeriju staklenika moderne tehnologije <br/>  ...
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

    <a class="arrow-down" href="#" data-scroll-to="on" data-scroll-to-target=".scroll-5">
        <i></i>
    </a>
</section>
<!--END SECTION-->