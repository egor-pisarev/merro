<?php
use yii\easyii\modules\carousel\api\Carousel;

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
        <div class="col col-2">
            <div class="news promo-news">
                <div class="element">
                    <a href="/" class="image">
                        <img src="/uploads/data/promonew1.jpg"/>
                    </a>
                    <a href="/" class="title">Я благодарен вам выиграть будущее</a>
                </div>
                <div class="element">
                    <a href="/" class="image">
                        <img src="/uploads/data/promonew1.jpg"/>
                    </a>
                    <a href="/" class="title">Я благодарен вам выиграть будущее</a>
                </div>
            </div>
        </div>
        <div class="col col-3">
            <div class="block-head">
                <h3>Корпоративные новости</h3>
                <span class="eng-title">Corporate Information</span>
                <a href="/">посмотреть все >></a>
            </div>
            <div class="news">
                <ul>
                    <li>
                        <span class="icon">●</span>
                        <a class="title" href="/">Третий Корея бесплатно круизное судно тур замечательный ... </a>
                        <span class="date">[2015-07-18]</span>
                    </li>
                    <li>
                        <span class="icon">●</span>
                        <a class="title" href="/">метро Департамент летней работы управления конференции ... </a>
                        <span class="date">[2015-07-18]</span>
                    </li>
                    <li>
                        <span class="icon">●</span>
                        <a class="title" href="/">Агрегации герой власть гордость Merro Международный ... </a>
                        <span class="date">[2015-07-18]</span>
                    </li>
                    <li>
                        <span class="icon">●</span>
                        <a class="title" href="/">Агрегации герой власть гордость Merro Международный ...</a>
                        <span class="date">[2015-07-18]</span>
                    </li>
                    <li>
                        <span class="icon">●</span>
                        <a class="title" href="/">Агрегации герой власть гордость Merro Международный ...</a>
                        <span class="date">[2015-07-18]</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-5">
            <div class="photogallery">
                <a class="preview" href="/">
                    <img src="/uploads/data/photo1.jpg">
                    <div class="title">подпись1</div>
                </a>
                <a class="preview" href="/">
                    <img src="/uploads/data/photo1.jpg">
                    <div class="title">подпись1</div>
                </a>
                <a class="preview" href="/">
                    <img src="/uploads/data/photo1.jpg">
                    <div class="title">подпись1</div>
                </a>
                <a class="preview" href="/">
                    <img src="/uploads/data/photo1.jpg">
                    <div class="title">подпись1</div>
                </a>
                <a class="preview" href="/">
                    <img src="/uploads/data/photo1.jpg">
                    <div class="title">подпись1</div>
                </a>
                <a class="preview" href="/">
                    <img src="/uploads/data/photo1.jpg">
                    <div class="title">подпись1</div>
                </a>
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
                    Metro International отстаивать "существует только для здоровья," компании направлены на
                    песчаный, последовательное дух, чтобы достичь амбициозной давнюю желание: переносить культуры
                    здоровья тысячелетия
                </div>
            </div>

        </div>
        <div class="col col-4">
            <div class="block-head">
                <h3>Новые продукты</h3>
                <span class="eng-title">New Products</span>
                <a href="/">посмотреть все >></a>
            </div>
            <div class="preview-products">
                <a class="element" href="/">
                    <img src="/uploads/data/product1.jpg">
                </a>
                <a class="element" href="/">
                    <img src="/uploads/data/product2.jpg">
                </a>
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
