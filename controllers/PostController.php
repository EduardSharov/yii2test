<?php

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;
use yii\db\Query;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PostController extends Controller
{
    public function actionIndex()
    {
        //$posts = Post::find()->all();
        $query = Post::find()->with('category');
        $pages = new Pagination(['totalCount' => $query->count(), 'defaultPageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('posts', 'pages'));
    }

    public function actionView($id)
    {

        var_dump($id);
        die;
    }
}