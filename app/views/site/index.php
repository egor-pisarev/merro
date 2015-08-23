<?php
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\text\api\Text;
$this->title = 'Merro - Home';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div id="front-slider">
                <div class="slides">
                    <ul>
                        <?php foreach(Carousel::items() as $carouselItem): ?>
                        <li>
                            <img src="<?=$carouselItem->image?>" alt="slide1">
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="navigation">
                    <ul>
                        <?php foreach(Carousel::items() as $carouselItem): ?>
                            <li><a href="#" title="<?=$carouselItem->title?>"></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="#" class="prev"><</a>
                <a href="#" class="next">></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-4">
            <div class="block-head">
                <h3>Корпоративные новости</h3>
                <span class="eng-title">Corporate Information</span>
                <a href="/">посмотреть все >></a>
            </div>
            <div class="news">
                <ul>
                    <?php foreach(News::last(5) as $news ):?>
                        <li>
                            <span class="icon">●</span>
                            <a class="title" href="<?=Yii::$app->urlManager->createUrl(['site/news','slug'=>$news->slug])?>"><?=$news->title ?></a>
                            <span class="date">[<?=$news->date ?>]</span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col col-5">
            <div class="photogallery">
                <?php foreach(Gallery::cats()  as $cat): ?>
                    <a class="preview" href="<?=Yii::$app->urlManager->createUrl(['site/gallery','slug'=>$cat->slug])?>">
                        <img src="<?=$cat->image?>">
                        <div class="title"><?=$cat->title?></div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<div class="section-line"></div>

<div class="container">
    <div class="row">
        <div class="col col-4">
            <div class="review">
                <div class="photo">
                    <img src="/uploads/data/bossphoto.png">
                </div>
                <div class="block-head">
                    <h3>Слова основателей</h3>
                    <span class="eng-title">Founder of a speech</span>
                </div>
                <div class="text">
                    <?=Text::get('words')?>
                </div>
            </div>

        </div>
        <div class="col col-2">
            <div id="qr-code">
                <img src="/uploads/data/qr.jpg">
            </div>
        </div>
    </div>
</div>

<div class="section-line"></div>
