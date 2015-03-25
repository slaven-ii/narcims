<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 16:23
 */

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\TemplateList;
use yii\filters\VerbFilter;
use common\narci\Narci;
use yii\helpers\Url;


/**
 * Site controller
 */
class PagesController extends Controller
{
    public $layout = 'pages';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'page'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'page'],
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
        ];
    }

    public function actionIndex()
    {
        $templates = Narci::getTemplatesList();
        foreach ($templates as $template) {
            $templates[$template->name] = $template;
        }
        $model = new TemplateList();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $route = Yii::$app->urlManager->createUrl(['pages/page', 'template' => $model->template]);
            return $this->redirect($route,302);
        }

        return $this->render('choose', ['model' => $model]);
    }

    public function actionPage()
    {
        $templates = Narci::getTemplatesList();
        foreach ($templates as $template) {
            $templates[$template->name] = $template;
        }

        $template = Yii::$app->getRequest()->getQueryParam('template');

        $path = '@app' . $templates[$template]->path . '/' .$templates[$template]->file;

        $viewData = $this->renderPartial($path);

        $items = $this->getView()->getItems();
        var_dump($items);


    }

}
