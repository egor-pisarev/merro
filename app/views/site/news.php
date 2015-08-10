<?php
use yii\easyii\modules\news\api\News;
use yii\helpers\Html;
use yii\easyii\modules\gallery\api\Gallery;
?>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="breadcrumbs">
                <li><a href="/"></a>  </li>
                <li><span> > Новости</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-9">
            <div class="last-news">
                <?php $lastNews = News::last(); ?>
                <img src="<?=$lastNews->image?>" class="left-image" width="50%"/>
                <h2><?=$lastNews->title?></h2>
                <p>
                    <?=$lastNews->short?>
                    <?=Html::a('[Подробно]',['site/news','slug'=>$lastNews->slug],['class'=>'more-link'])?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-4 news-content news-block">
            <h2>Свежие новости</h2>
            <?php foreach(News::items() as $newsItem): ?>
                <?=Html::a($newsItem->title,['site/news','slug'=>$newsItem->slug])?>
                <small>[<?=date('Y-m-d',$newsItem->time)?>]</small>
            <?php endforeach; ?>
        </div>
        <div class="col col-4 news-content news-block">
            <h2>Свежие новости</h2>
            <?php foreach(News::items() as $newsItem): ?>
                <?=Html::a($newsItem->title,['site/news','slug'=>$newsItem->slug])?>
                <small>[<?=date('Y-m-d',$newsItem->time)?>]</small>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-9 news-content news-block">
            <h2>Свежие фотографии</h2>
            <div class="container">
                <div class="row">
                    <?php foreach(Gallery::cats()  as $cat): ?>
                        <div class="col col-2">
                            <img src="<?=$cat->image?>"/>
                            <?=Html::a($cat->title,['site/gallery','slug'=>$cat->slug])?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>