<?php
use yii\helpers\Html;

if(Yii::$app->controller->action->id == 'gallery'){
    $asset = \app\assets\GalleryAsset::register($this);
}else{
    $asset = \app\assets\AppAsset::register($this);
}

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <header>
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul id="top-menu">
                            <li><a href="">Войти</a></li>
                            <li><a href="">Официальный сайт</a></li>
                            <li><a href="/site/contact">Обратная связь</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="row-logo">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a id="logo" href="/" title="Merro International">
                            <img src="/uploads/data/logo.png" alt="Merro International">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="nav-line"></div>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="main-menu">
                        <?=\app\widgets\MainMenu::widget()?>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <div class="nav-line"></div>
    <main>

  <?=$content ?>

    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a id="footer-logo" href="/"></a>

                    <div class="footer-text">
                        ©Copyright 2015 www.merroint.com All right reserved
                    </div>
                    <div class="footer-text" style="float: right">
                        <a title="Создание и продвижение сайта siss-cms" href="http://www.siss-cms.ru/"><img border="0" alt="" style="margin: 0px; padding: 0px; border: 0px none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit;" src="http://www.siss-cms.ru/uploads/11/sc_white.png" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>