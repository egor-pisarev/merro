<?php

namespace app\controllers;

use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\models\Page;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\gallery\api\Gallery;
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionArticle()
    {
        if(Yii::$app->request->get('slug')){
            return $this->render('article-item',['slug'=>Yii::$app->request->get('slug')]);
        }
        if(Yii::$app->request->get('category')){

            $category = Article::cat(Yii::$app->request->get('category'));
            $menuItems = [];
            foreach($category->model->getBehavior('tree')->parents(1)->one()->children(1)->all() as $item){
                $menuItems[] = [
                    'label'=>$item->title,
                    'url'=>['site/article','category'=>$item->slug]
                ];
            }
            return $this->render('article-category',[
                'category'=>$category,
                'menuItems'=>$menuItems,
            ]);
        }
        return $this->render('article-category');
    }

    public function actionPage($slug)
    {
        $menuItems = [];

        foreach(Page::find()->all() as $model){
            $menuItems[] = [
                'label'=>$model->title,
                'url'=>['site/page','slug'=>$model->slug]
            ];
        }

        $page = Page::findOne(['slug'=>$slug]);
        if(!$page){
            throw new NotFoundHttpException();
        }
        return $this->render('page',['page'=>$page,'menuItems'=>$menuItems]);
    }

    public function actionNews()
    {
        if(!Yii::$app->request->get('slug')){
            return $this->render('news',['slug'=>Yii::$app->request->get('slug')]);
        }

        $news = News::get(Yii::$app->request->get('slug'));
        if(!$news){
            throw new NotFoundHttpException();
        }
        return $this->render('news-item',['news'=>$news]);
    }

    public function actionGallery()
    {
        if(!Yii::$app->request->get('slug')){
            return $this->render('gallery');
        }
        $category = Gallery::cat(Yii::$app->request->get('slug'));
        return $this->render('gallery-item',['category'=>$category]);
    }

    public function actionContact()
    {

        return $this->render('contact');
    }
}