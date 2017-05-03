<?php

namespace app\controllers;

use Yii;
use app\models\Topsale;
use app\models\Categories;
use app\models\Products;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
    {

    public $data;
    private $categories;
    private $categories_acc;
    private $topsales;

    public function __construct($id, $module, $config = [])
        {
        parent::__construct($id, $module, $config);

        $categories = Categories::find()->where('Accomp = 0')->orderBy('CategoryID')->all();
        $categories_acc = Categories::find()->where('Accomp = 1')->orderBy('CategoryID')->all();
        $top = Topsale::find()->asArray()->all();
        $topsales = Products::find()->where(['in', 'ProductID', $top])->all();

        $this->data = [
            'categories' => $categories,
            'categories_acc' => $categories_acc,
            'topsales' => $topsales,
        ];
        }

    /**
     * @inheritdoc
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
     * @inheritdoc
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

        return $this->render('index');
        }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
        {
        if (!Yii::$app->user->isGuest)
            {
            return $this->goHome();
            }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login())
            {
            return $this->goBack();
            }
        return $this->render('login', [
                    'model' => $model,
        ]);
        }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
        {
        Yii::$app->user->logout();

        return $this->goHome();
        }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
        {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']))
            {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
            }
        return $this->render('contact', [
                    'model' => $model,
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

    public function actionProduct($pid = 0, $cid = 0)
        {

        $product = Products::find()->where("ProductID = :pid", [':pid' => $pid])->one();
        $products_in_cat = Products::find()->where("CategoryID = :cid", [':cid' => $cid])->all();

        return $this->render('product', [
                    'product' => $product,
                    'products_in_cat' => $products_in_cat,
        ]);
        }

    public function actionCategory($cid = 0)
        {

        $products_in_cat = Products::find()->where("CategoryID = :cid", [':cid' => $cid])->all();

        return $this->render('category', [
                    'products_in_cat' => $products_in_cat,
        ]);
        }

    }
