<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 29/03/15
 * Time: 10:39
 */
?>
<ul class="menu">
    <li><a class="" href="/">Naslovna</a></li>
    <li><a class="" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/djelatnosti'); ?>">Djelatnosti</a></li>
    <li><a class="" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/proizvodi'); ?>">Proizvodi</a></li>
    <li class="logo">
        <a href="/">
            <img width="114" height="28" src="static/ui/svg/logo.svg" alt=""/>
        </a>
    </li>
    <!--<li><a class="active" href="webshop.html">Web shop</a></li>-->
    <li><a class="" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/onama'); ?>">O nama</a></li>
    <li><a class="" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/galerija'); ?>">Galerija</a></li>
    <li><a class="" href="#" data-scroll-to="on" data-scroll-to-target=".footer">Kontakt</a></li>
</ul>