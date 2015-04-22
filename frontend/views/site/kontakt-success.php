<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
$this->title = 'Vrtlarija Pecina | Upit';
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
                    <img src="static/ui/img-1-1.jpg" alt="" width="1920" height="500">
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
                <article class="thank-you">
                    <h4>Hvala</h4>
                    <p>
                        Vaš e-mail je uspješno poslan! <br/>
                        Cijenimo što nas kontaktirate i <br/>
                        uskoro ćemo Vam odgovoriti.
                    </p>

                    <a class="green-btn" href="/">
                        pecina.hr
                    </a>
                </article>
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