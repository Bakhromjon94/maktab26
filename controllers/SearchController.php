<?php

namespace app\controllers;
use app\models\About;
class SearchController extends \yii\web\Controller
{
        public function actionSearch()
        {   
            $q = Yii::$app->request->get('q');       
            $qoshimchadarslar=\app\models\Qoshimchadarslar::find()
                ->where(['LIKE','nomi',$q])
                ->orWhere(['LIKE','matn',$q])
                ->all();
            $yangiliklar=\app\models\Yangiliklar::find()
                ->where(['LIKE','title',$q])
                ->orWhere(['LIKE','content',$q])
                ->all();
            $about=About::find()->where(['LIKE','haqida',$q])->all();
             // $pagination = new Pagination([
             // 'defaultPageSize'=> 4,
             // 'totalCount '=>$maqola->count(),
             // ]);
             // $maqola = $maqola->offset($pagination->offset)
             // ->limit($pagination->limit)
             // ->all();
            return $this->render('search',[
                'qoshimchadarslar'=>$qoshimchadarslar,
                'yangiliklar' => $yangiliklar,
                'about'=>$about
             //   'pagination' =>$pagination,
            ]);
    }
}
