<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>

<main class="error">
    <div class="out-w">
        <div class="out">
            <div class="inn">
                <div class="container-12">
                    <div class="col-12">
                        <header>
                            <a class="error-logo" href="/">
                                <img src="static/ui/svg/logo.png" alt="Pecina"/>
                            </a>
                        </header>
                    </div>
                    <div class="col-12">
                        <div class="col-6">
                            <figure>
                                <img src="static/ui/404.png" alt="404"/>
                            </figure>
                        </div>
                        <div class="col-6 right-text">
                            <div class="out-w">
                                <div class="out">
                                    <div class="inn">
                                        <article>
                                            <h1>
                                                404 error
                                                <span>
                                                 page not found
                                                </span>
                                            </h1>

                                            <p class="strong">
                                                Pričekajte trenutak ... <br/>
                                                za to vrijeme provjerite - Je li Vaše cvijeće zaliveno? <br/>
                                                <br/>
                                            </p>
                                            <p>
                                                Please wait ... <br/>
                                                in the meantime - Check if your flowers are watered!
                                            </p>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php if(false){ ?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
<?php } ?>
