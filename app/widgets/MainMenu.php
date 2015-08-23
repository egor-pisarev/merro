<?php
/**
 * Created by JetBrains PhpStorm.
 * User: egor
 * Date: 08.08.15
 * Time: 18:40
 * To change this template use File | Settings | File Templates.
 */

namespace app\widgets;

use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\page\models\Page;

class MainMenu extends \yii\widgets\Menu{

    public function init()
    {
        $items = [
            [
                'label'=>'Главная',
                'url'=>'/',
            ],
        ];

        $page = Page::find()->one();
        if($page){
            $items[] = [
                'label'=>'Профиль группа',
                'url'=>['site/page','slug'=>$page->slug],
            ];
        }

        foreach(Article::tree() as $articleCategory){
            $item['label'] = $articleCategory->title;

            if(count($articleCategory->children)>0){
                $item['url'] = ['site/article','category'=>$articleCategory->children[0]->slug];
            }else{
                $item['url'] = ['site/article','category'=>$articleCategory->slug];
            }
            $items[] = $item;
        }

        $items[] =
            [
                'label'=>'Новостная лента',
                'url'=>['site/news'],
            ];
        $this->items = $items;
    }
}