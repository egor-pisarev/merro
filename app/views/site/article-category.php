<?php use yii\helpers\Html; ?>

<div class="container content-page">
    <div class="row">
        <div class="col col-3 left-col">
            <?=\yii\widgets\Menu::widget([
                'items'=>$menuItems,
                'options'=>[
                    'id'=>'left-menu',
                ]
            ])?>
        </div>
        <div class="col col-7 right-col">
            <h1><?=$category->title?></h1>
            <div class="content">
                <ul>
                    <?php foreach($category->items() as $item): ?>
                        <li><?=Html::a($item->title,['site/article','slug'=>$item->slug])?> [<?=date('Y-m-d H:i:s',$item->time)?>]</li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>