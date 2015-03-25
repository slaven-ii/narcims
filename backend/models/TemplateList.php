<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 24/03/15
 * Time: 18:55
 */

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class TemplateList extends Model
{
    public $template;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['template'], 'required'],
            // rememberMe must be a boolean value
        ];
    }

}
