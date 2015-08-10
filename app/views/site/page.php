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
            <h1><?=$page->title?></h1>
            <div class="content">
                <?=$page->text?>
            </div>
        </div>
    </div>
</div>