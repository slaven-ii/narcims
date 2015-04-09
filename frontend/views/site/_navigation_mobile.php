<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 29/03/15
 * Time: 10:39
 */

$urlManager = Yii::$app->getUrlManager();
?>
<div id="cd-nav" class="cd-nav">
    <div class="cd-navigation-wrapper">
        <div class="cd-half-block">
            <h2>Izbornik</h2>
            <nav>
                <ul class="cd-primary-nav">
                    <li><a href="/" class="selected">Naslovna</a></li>
                    <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/djelatnosti'); ?>" class="">Djelatnosti</a></li>
                    <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/akcije'); ?>" class="">Akcije</a></li>
                    <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/onama'); ?>" class="">O nama</a></li>
                    <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/galerija'); ?>" class="">Galerija</a></li>
                    <!-- <li><a href="#" class="">Kontakt</a></li> -->
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
