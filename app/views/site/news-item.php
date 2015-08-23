<?php
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\gallery\api\Gallery;

?>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="breadcrumbs">
                <li><a href="/"></a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['site/news'])?>">> Новости</a></li>
                <li><span>> <?=$news->title?></span></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-6 news-content">
            <h1> <?=$news->title?></h1>
            <div class="content">
                <?=$news->text?>
            </div>
        </div>

        <div class="col col-4">
            <div class="right-news">
                <div class="block">
                    <div class="block-head">
                        <h3>Новости</h3>
                        <span class="eng-title">Корпоративная информация</span>
                    </div>
                    <div class="news">
                        <ul>
                            <?php foreach(News::items() as $newsItem):?>
                            <li>
                                <span class="icon">●</span>
                                <a class="title" href="<?=Yii::$app->urlManager->createUrl(['site/news','slug'=>$newsItem->slug])?>"><?=$newsItem->title?></a>
                                <span class="date">[<?=date('Y-m-d',$newsItem->time)?>]</span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <div class="block-head">
                        <h3>Свежие фотографии</h3>
                        <span class="eng-title">Фотоальбомы событий</span>
                    </div>
                    <div class="photogallery">
                        <?php foreach(Gallery::cats()  as $cat): ?>
                            <a class="preview" href="<?=Yii::$app->urlManager->createUrl(['site/gallery','slug'=>$cat->slug])?>">
                                <img src="<?=$cat->image?>"/>
                                <div class="title"><?=$cat->title?></div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>