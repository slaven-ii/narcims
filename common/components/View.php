<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 14:30
 *
 * Custom view class for enabling items
 */

namespace common\components;

use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use common\narci\view\ViewItem;
use common\narci\form\NarciForm;

class View extends \yii\web\View {

    public $bodyId;
    public $items = array();

    private $formModel;
    private $form;

    /* Yii allows you to add magic getter methods by prefacing method names with "get" */

    public function init()
    {
        $formModel = new NarciForm();
        $this->formModel = $formModel;
        parent::init();
    }

    /**
     * This method is invoked right before [[renderFile()]] renders a view file.
     * The default implementation will trigger the [[EVENT_BEFORE_RENDER]] event.
     * If you override this method, make sure you call the parent implementation first.
     * @param string $viewFile the view file to be rendered.
     * @param array $params the parameter array passed to the [[render()]] method.
     * @return boolean whether to continue rendering the view file.
     */
    public function beforeRender($viewFile, $params)
    {
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]);

        $this->form = $form;
        return parent::beforeRender($viewFile, $params);
    }

    /**
     * This method is invoked right after [[renderFile()]] renders a view file.
     * The default implementation will trigger the [[EVENT_AFTER_RENDER]] event.
     * If you override this method, make sure you call the parent implementation first.
     * @param string $viewFile the view file being rendered.
     * @param array $params the parameter array passed to the [[render()]] method.
     * @param string $output the rendering result of the view file. Updates to this parameter
     * will be passed back and returned by [[renderFile()]].
     */
    public function afterRender($viewFile, $params, &$output)
    {
        parent::afterRender($viewFile, $params, $output);
        ActiveForm::end();
    }

    public function getBodyIdAttribute() {
        return ($this->bodyId != '') ? 'id="' . $this->bodyId . '"' : '';
    }

    public function item($array){
        $item = new ViewItem($array);
        $this->items[] = $item;

        $this->formModel->addAttribute($array['label']);
        $obj =  $this->form->field($this->formModel, $array['label']);

        echo $obj;
        //$item->render();

    }

}