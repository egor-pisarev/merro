<?php use yii\easyii\modules\gallery\api\Gallery; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="breadcrumbs">
                <li><a href="/"></a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['site/news'])?>">> Фотогалерея</a></li>
                <li><span>> <?=$category->title?></span></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-7 news-content">
            <h1><?=$category->title?></h1>

            <div class="content">
                <ul id="slideshow">
                    <?php foreach($category->photos() as $photo): ?>
                    <li>
                        <h3><?=$photo->description ?></h3>
                        <p>photo2</p>
                        <a href="#"><img src="<?=$photo->image ?>" alt=""/></a>
                        <img src="<?=$photo->thumb(120,80) ?>" class="thumbnail" height="80"/>
                    </li>
                    <?php endforeach; ?>

                </ul>
                <div id="wrapper">
                    <div id="fullsize">
                        <div id="imgprev" class="imgnav" title="Previous Image"></div>
                        <div id="imglink"></div>
                        <div id="imgnext" class="imgnav" title="Next Image"></div>
                        <div id="image"></div>
                        <div id="information">
                            <h3></h3>

                            <p></p>
                        </div>
                    </div>
                    <div id="thumbnails">
                        <div id="slideleft" title="Slide Left"></div>
                        <div id="slidearea">
                            <div id="slider"></div>
                        </div>
                        <div id="slideright" title="Slide Right"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col col-3">
            <div class="right-gallery">
                <div class="block">
                    <div class="block-head">
                        <h3>Лучшие фотографии</h3>
                        <span class="eng-title">Newest Specials</span>
                    </div>

                    <div class="gallery">
                        <?php foreach(\yii\easyii\modules\gallery\models\Category::find()->limit(4)->all() as $cat): ?>
                            <a class="photo" href="<?=Yii::$app->urlManager->createUrl(['site/gallery','slug'=>$cat->slug])?>">
                                <img src="<?=$cat->image?>" style="width: 200px" />
                                <div class="title"><?=$cat->title?></div>
                            </a>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->registerJs('
 $T("slideshow").style.display = "none";
    $T("wrapper").style.display = "block";
    var slideshow = new TINY.slideshow("slideshow");
    window.onload = function () {
        slideshow.auto = true;
        slideshow.speed = 5;
        slideshow.link = "linkhover";
        slideshow.info = "information";
        slideshow.thumbs = "slider";
        slideshow.left = "slideleft";
        slideshow.right = "slideright";
        slideshow.scrollSpeed = 4;
        slideshow.spacing = 5;
        slideshow.active = "#fff";
        slideshow.init("slideshow", "image", "imgprev", "imgnext", "imglink", "slidearea");
    }
',\yii\web\View::POS_END);?>