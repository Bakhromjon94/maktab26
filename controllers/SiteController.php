<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\About;
use app\models\Slider;
use app\models\Bitiruvchilar;
use app\models\Biznesmaktab;
use app\models\Boglanishform;



class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */



    public function actionIndex()
    {
        $slider = \app\models\Slider::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(2)
            ->all();
        $rahbariyat = \app\models\Rahbariyat::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(4)
            ->all();
        $model=new Boglanishform();  
        if ($model->load(Yii::$app->request->post() ))
         {
             $model->save();
        return $this->redirect(Yii::$app->request->referrer);
        }   
        return $this->render('index',[
            'slider'=>$slider,
            'rahbariyat'=>$rahbariyat,
            'model'=>$model
        ]);
    }
    public function actionBatafsil($id)
    {
        // $model = new Maqola();
        // $model = Maqola::find()->where(['id'=>$id])->one();
        $slider = Slider::findOne($id);
        return $this->render('batafsil',[
            's'=>$slider,
        ]);   
    }
    public function actionDarsliklar()
    {
        return $this->render('darsliklar');
    }
    public function actionBiznesmaktab()
    {
        $biznesmaktab=\app\models\Biznesmaktab::find()->all();
        return $this->render('biznesmaktab',[
            'biznesmaktab'=>$biznesmaktab
        ]);
    }

    public function actionMarketing()
    {
        $marketing=\app\models\Marketing::find()->all();
        return $this->render('marketing',[
            'marketing'=>$marketing
        ]);
    }

    public function actionRasmlar()
    {
        $rasmlar=\app\models\Rasmlar::find()->all();
        return $this->render('rasmlar',[
            'rasmlar'=>$rasmlar
        ]);
    }
    public function actionIqtidorlilar()
        {
            $iqtidorlilar=\app\models\Iqtidorlilar::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(4)
            ->all();
            return $this->render('iqtidorlilar',[
                'iqtidorlilar'=>$iqtidorlilar
            ]);
        }
    public function actionRivojlanish()
        {
            $rivojlanish=\app\models\rivojlanish::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(2)
            ->all();
            return $this->render('rivojlanish',[
                'rivojlanish'=>$rivojlanish
            ]);
        }
     public function actionKorinish()
        {
        
        }
    public function actionBitiruvchilar()
        {
            $bitiruvchilar=\app\models\Bitiruvchilar::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(6)
            ->all();
            return $this->render('bitiruvchilar',[
                'bitiruvchilar'=>$bitiruvchilar
            ]);
        }

        public function actionTalimnidavomi()
        {
            $talimnidavomi=\app\models\Talimnidavomi::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(6)
            ->all();
            return $this->render('talimnidavomi',[
                'talimnidavomi'=>$talimnidavomi
            ]);
        }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $form=new Boglanishform();  
        if ($form->load(Yii::$app->request->post() ))
         {
             $form->save();
        return $this->redirect(Yii::$app->request->referrer);
        }
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'form'=>$form
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

     public function actionBlog()
    {
        $yangiliklar=\app\models\Yangiliklar::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(6)
            ->all();
        return $this->render('blog',[
            'yangiliklar'=>$yangiliklar,
        ]);
    }
    public function actionAboutus()
    {
        $about=\app\models\About::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(2)
            ->all();
         $rasmlar=\app\models\Rasmlar::find()
            ->orderBy(['id'=>SORT_DESC])
            ->all();
           
        $rahbariyat=\app\models\Rahbariyat::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(4)
            ->all();
        return $this->render('aboutus',[
            'about'=>$about,
            'rasmlar'=>$rasmlar,
            'rahbariyat'=>$rahbariyat
        ]);
    }
    public function actionOqtuvchilar()
    {
        $oqtuvchilar=\app\models\Rahbariyat2::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(4)
            ->all();
        return $this->render('oqtuvchilar',[
            'oqtuvchilar'=>$oqtuvchilar
        ]);
    }
    public function actionElements()
    {
        return $this->render('elements');
    }
    public function actionCourse()
    {
        $kurslar=\app\models\Qoshimchadarslar::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(6)
            ->all();
        $ixtirochilar=\app\models\Ixtirochilar::find()
            ->orderBy(['id'=>SORT_DESC])
            ->limit(1)
            ->all();
        return $this->render('course',[
            'kurslar'=>$kurslar,
            'ixtirochilar'=>$ixtirochilar
        ]);
    }
    public function actionKurslar($id)
    {
        $kurs=\app\models\Qoshimchadarslar::findOne($id);
        return $this->render('kurslar',[
            'kurs'=>$kurs
        ]);
    }
    public function actionYangilik($id)
    {
        $yangilik=\app\models\Yangiliklar::findOne($id);
        return $this->render('yangilik',[
            'y'=>$yangilik
        ]);
    }
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
