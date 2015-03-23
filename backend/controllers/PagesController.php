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
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\narci\Narci;

/**
 * Site controller
 */
class PagesController extends Controller
{
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
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
            $tmp = $template;
            break;
        }

        $path = '@app' . $tmp->path . '/' .$tmp->file;
        //var_dump($path); die();
        return $this->render($path, array('templates' => $templates));
    }

}
