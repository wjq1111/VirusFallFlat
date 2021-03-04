<?php


/**
 *  Team : VirusFallFlat
 *  Coding by 吕明昊 吴继强 邱一帆 李世阳
 *  Debug人员：吕明昊 吴继强
 *  This is SiteController.php
**/


namespace frontend\controllers;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\SignupForm;
use frontend\models\AdminForm;
use frontend\models\UserForm;
use frontend\models\CommentForm;
use frontend\models\PassageForm;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = "main_layout";
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /** 
     * Displays teamwork page.
     */
    public function actionTeamwork()
    {
        return $this->render('teamwork');
    }

    /** 
     * Displays personal work page.
    **/
    /**
     * Team:VirusFallFlat
     * Code by 吴继强
     * 个人作业展示栏
    **/
    public function actionStudent1()
    {
        return $this->render('student1');
    }

    public function actionStudent2()
    {
        return $this->render('student2');
    }

    public function actionStudent3()
    {
        return $this->render('student3');
    }

    public function actionStudent4()
    {
        return $this->render('student4');
    }

    /**
     * 管理员登录界面对应action
    **/
    /**
     * Team:VirusFallFlat
     * Code by 李世阳
     * 这是管理员登录的mvc三层的controller层.
    **/
    public function actionAdmin()
    {
        $model = new AdminForm();
        if($model->load(Yii::$app->request->post())){

            $admin_name = $_POST["AdminForm"]["admin_name"];
            $admin_password = $_POST["AdminForm"]["admin_password"];
            if($model->validatecheck($admin_name, $admin_password))
            {
                /*
                此处编写管理员验证成功代码
                然后进入管理员可以修改数据的界面
                */
                return $this->render('adminshow');
            }
            else
                echo "<script>alert('密码错误，请重新输入');location='index.php?r=site/admin'</script>";
        }
        return $this->render('admin', [
                'model' => $model,
            ]);
    }

    /**
     * Team:VirusFallFlat
     * Code by 吕明昊
     * 这是用户注册的mvc三层的controller层.
    **/
    public function actionRegister()
    {
        $model = new UserForm();
        if($model->load(Yii::$app->request->post())){

            $username = $_POST["UserForm"]["username"];
            $userpswd = $_POST["UserForm"]["userpswd"];
            if($model->registercheck($username, $userpswd))
            {
                $model->register($username, $userpswd);
                /*
                此处编写注册成功代码
                然后进入用户可查看的界面
                */
                return $this->render('index');
            }
        }
        $model->username = '';
        return $this->render('register', [
                'model' => $model,
            ]);
    }
    

    /**
     * Team:VirusFallFlat
     * Code by 邱一帆
     * 这是用户登录的mvc三层的controller层.
    **/
    public function actionLogin()
    {
        $model = new UserForm();
        if($model->load(Yii::$app->request->post()))
        {

            $username = $_POST["UserForm"]["username"];
            $userpswd = $_POST["UserForm"]["userpswd"];
            if($model->validatecheck($username, $userpswd))
            {   
                /*
                此处编写登录成功代码
                然后进入用户可查看的界面
                */
                setcookie("user",$username);
                return $this->render('usershow');
            }
            else
                echo "<script>alert('密码错误，请重新输入');location='index.php?r=site/login'</script>";
        }
        $model->username = '';
        $model->userpswd = '';
        return $this->render('login', [
                'model' => $model,
            ]);
    }

    /**
     * 跳转各种页面的action
     * Code by:吕明昊 吴继强
    **/
    public function actionUsershow()
    {
        return $this->render('usershow');
    }

    /**
     * Team:VirusFallFlat
     * Code by 吴继强
     * 这是管理员删除文章的mvc三层的controller层.
    **/
    public function actionPassagedelete()
    {
        $model = new PassageForm();
        if($model->load(Yii::$app->request->post()))
        {

            $passageid = $_POST["PassageForm"]["passageid"];
            if($model->delPassage($passageid))
            {
                //return $this->redirect('index.php?r=site/adminshow');
                return $this->render('adminshow');
            }
        }
        return $this->render('passagedelete', [
                'model' => $model,
            ]);
    }
    /**
     * Team:VirusFallFlat
     * Code by 吕明昊
     * 这是用户添加评论的mvc三层的controller层.
    **/
    public function actionAddcomment()
    {
        $model = new CommentForm();
        if($model->load(Yii::$app->request->post()))
        {
            $passageid = $_COOKIE["passageid"];
            $discuss = $_POST["CommentForm"]["discuss"];
            $userid = PassageForm::getID($_COOKIE["user"]);
            if($model->addComment($passageid, $userid, $discuss))
            {
                setcookie("passageid",0,time()-3600);
                //return $this->redirect('index.php?r=site/usershow');
                return $this->render('usershow');
            }
        }
        return $this->render('addComment', [
                'model' => $model,
            ]);
    }
    /**
     * Team:VirusFallFlat
     * Code by 吴继强
     * 这是管理员删除评论的mvc三层的controller层.
    **/
    public function actionDelcomment()
    {
        $model = new CommentForm();
        if($model->load(Yii::$app->request->post()))
        {
            $discuss = $_POST["CommentForm"]["discuss"];
            if($model->delComment($discuss))
            {
                //return $this->redirect('index.php?r=site/usershow');
                return $this->render('adminshow');
            }
        }
        return $this->render('delComment', [
                'model' => $model,
            ]);
    }
    /**
     * Team:VirusFallFlat
     * Code by 吕明昊
     * 这是用户点击“喜欢”的mvc三层的controller层.
    **/
    public function actionLike()
    {
        $model = new PassageForm();
        if(isset($_COOKIE["likeid"]))
        {   
            $passageid = $_COOKIE["likeid"];
            if($model->like($passageid))
            {
                setcookie("likeid",0,time()-3600);
                //return $this->redirect('index.php?r=site/usershow');
                return $this->render('usershow');
            }
            return $this->render('like', [
                        'model' => $model,
                    ]);
        }
        return $this->render('usershow');
    }
}
