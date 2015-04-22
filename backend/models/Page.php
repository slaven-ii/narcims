<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 16:28
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $guid
 * @property string $slug
 * @property string $type
 * @property string $data
 * @property integer $owner
 * @property string $created
 */
class Page extends \yii\db\ActiveRecord
{
    private $current_attributes = array(
        'id',
        'guid',
        'slug',
        'type',
        'data',
        'owner',
        'created',
    );

    private $custom = array();
    private $items = array();

    private $rules = [
        //[['guid', 'slug', 'type', 'data', 'owner'], 'required'],
        [['data'], 'string'],
        [['owner'], 'integer'],
        [['created'], 'safe'],
        [['guid'], 'string', 'max' => 50],
        [['slug', 'type'], 'string', 'max' => 255]
    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    public function __get($attribute)
    {
        if(in_array($attribute, $this->current_attributes)){
            return parent::__get($attribute);
        }else{
            return $this->custom[$attribute];
        }
    }

    public function __set($attribute, $value)
    {
        if(in_array($attribute, $this->current_attributes)){
            return parent::__set($attribute, $value);
        }else{
            $this->custom[$attribute] = $value;
            return true;
            //return parent::__set($attribute, $value);

        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return $this->rules;
    }

    public function addRules(array $array)
    {
        $this->rules[] = $array;
    }

    public function addItems(array $array)
    {

    }

    public function beforeSave(){
        $this->data = json_encode($this->custom);
        return parent::beforeSave(true);
    }

    public function afterFind(){
        $this->custom = json_decode($this->data, true);
        return parent::afterFind();
    }

    public function loadItems(array $array)
    {
        foreach ($array as $item) {
            //$itemName = $item->getName();
            $this->custom[$item->getName()] = null;
            $this->addRules($item->getValidation());
            $this->items = $item;
        }

    }

    public function getItems()
    {
        return $this->items;
    }

    public function getDataAtributes()
    {
        return array_keys($this->custom);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'guid' => 'Guid',
            'slug' => 'Slug',
            'type' => 'Type',
            'data' => 'Data',
            'owner' => 'Owner',
            'created' => 'Created',
        ];
    }
}