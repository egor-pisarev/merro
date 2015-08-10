<?php use yii\easyii\modules\article\api\Article; ?>
<?php $article = Article::get($slug); $category = Article::cat($article->cat->slug)?>

<div class="container content-page">
    <div class="row">
        <div class="col col-3 left-col">

            <?php
            $items = [];
            foreach($category->items() as $item){
                $items[] = [
                    'label'=>$item->title,
                    'url'=>['site/article','slug'=>$item->slug]
                ];
            }
            ?>
            <?=\yii\widgets\Menu::widget([
                'items'=>$items,
                'options'=>[
                    'id'=>'left-menu',
                ]
            ])?>
        </div>
        <div class="col col-7 right-col">
            <h1><?=$article->title?></h1>

            <div class="content">
                <?=$article->text?>
            </div>
        </div>
    </div>
</div>