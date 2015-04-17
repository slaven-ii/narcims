<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 29/03/15
 * Time: 10:39
 */

$urlManager = Yii::$app->getUrlManager();
function setActive($action){
    $currentAction = (Yii::$app->controller->action->id);

    if($currentAction == $action){
        echo 'active';
    }
}
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
                    <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/kontakt'); ?>" class="">Kontakt</a></li>
                    <!-- list items here -->
                </ul>
            </nav>
        </div><!-- .cd-half-block -->

    </div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->
<div class="container-24">
    <div class="col-24">

        <ul class="menu">
            <li><a class="<?php setActive('index'); ?>" href="/">Naslovna</a></li>
            <li><a class="<?php setActive('djelatnosti'); ?>" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/djelatnosti'); ?>">Djelatnosti</a></li>
            <li><a class="<?php setActive('akcije'); ?>" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/akcije'); ?>">Akcije</a></li>
            <li class="logo">
                <a href="#">
                    <img width="114" height="28" src="static/ui/svg/logo.svg" alt=""/>
                </a>
            </li>
            <li><a class="<?php setActive('onama'); ?>" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/onama'); ?>">O nama</a></li>
            <li><a class="<?php setActive('galerija'); ?>" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/galerija'); ?>">Galerija</a></li>
            <li><a class="<?php setActive('kontakt'); ?>" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/kontakt'); ?>" >Kontakt</a></li>
        </ul>

    </div>
</div>