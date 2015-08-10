<?php
use yii\easyii\modules\feedback\api\Feedback;
?>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="breadcrumbs">
                <li><a href="/"></a>  </li>
                <li><span> > Обратная связь</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-9 news-content news-block">
            <h2>Обратная связь</h2>
            <?php if(Yii::$app->request->get('feedback_sent')==1):?>
            <div class="flash-message">Спасибо за ваше сообщение!</div>
            <?php else: ?>
            <?=Feedback::form()?>
            <?php endif; ?>
        </div>
    </div>
</div>
