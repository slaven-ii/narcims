<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
$this->title = 'Vrtlarija Pecina | Upit';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('_navigation_mobile');?>

<!--START NAV-->
<nav class="main-nav">

    <?php echo $this->render('_navigation');?>

</nav>

<!--START SECTION-->
<section class="slider-wrapper">
    <div class="extra-slider">
        <div class="wrapper">
            <ul>
                <li>
                    <img src="static/ui/img-1-1-contact.jpg" alt="" width="1920" height="500">
                </li>
            </ul>
        </div>
    </div>
</section>
<!--END SECTION-->

<!--END MAIN-->

<!--START FOOTER-->
<footer class="footer scroll-4" data-animation="on">

    <section class="contact-wrapper">

        <div class="container-12">

            <div class="col-12">
                <h4 class="form-title">
                    Tu smo za Vas.
                </h4>
            </div>

            <div class="col-2 c-item">
                <article class="info">
                    <span class="green">Vrtlarija Pecina</span> <br/>
                    +385 1 3842 892 <br/>
                    <span class="green">Jaroslav Pecina</span> <br/>
                    +385 98 450 666 <br/>
                    <span class="green">Jan Pecina</span> <br/>
                    +385 98 1658 387

                    <ul class="social">
                        <li>
                            <a href="#" class="fb">
                                <img src="static/ui/svg/fb.svg" alt="Facebook"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hr">
                                <img src="static/ui/svg/hr.svg" alt="Hrvatski"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="en">
                                <img src="static/ui/svg/en.svg" alt="Engleski"/>
                            </a>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="col-5 c-item">
                <div id="simple-map-canvas" rel="45.8041251|15.7977075" data-img="static/ui/pecina_pin_google.png"></div>
            </div>

            <div class="col-5 c-item">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <fieldset>
                        <?= $form->field($model, 'name', ['inputOptions'=>['placeholder'=>'Ime i prezime']])->label(false) ?>
                    </fieldset>
                    <fieldset>
                        <?= $form->field($model, 'email', ['inputOptions'=>['placeholder'=>'E-mail']])->label(false) ?>
                    </fieldset>
                    <fieldset>
                        <?= $form->field($model, 'tel', ['inputOptions'=>['placeholder'=>'Broj telefona (po izboru)']])->label(false) ?>
                    </fieldset>
                    <fieldset>
                        <?= $form->field($model, 'body', ['inputOptions'=>['placeholder'=>'Poruka']])->textArea(['rows' => 10])->label(false) ?>
                    </fieldset>
                    <input type="text" name="lastname" style="display: none;">
                    <fieldset class="submit-wrapper">
                        <input type="submit" class="submit" value="Pošalji"/>
                    </fieldset>
                <?php ActiveForm::end(); ?>
            </div>

        </div>

    </section>


    <section class="copy">
        <div class="container-12">
            <div class="col-12">
                &copy; 2015. Pecina d.o.o. All rights reserved.

                <a class="arrow-up" href="#" data-scroll-to="on" data-scroll-to-target="body">
                    <i></i>
                </a>
            </div>
        </div>
    </section>
</footer>
<!--END FOOTER-->