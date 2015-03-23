<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 18:35
 */

namespace common\narci\form;


use yii\base\Exception;

class NarciForm extends \yii\base\Model{

    private $_validators = array();
    private $_myAttributes = array();

    public function __get($name) {

        if(isset($this->_myAttributes[$name])){
            return $this->_myAttributes[$name];
        }

        return null;

    }

    public function __set($name, $value) {

        $this->_myAttributes[$name] = $value;
    }

    public function addAttribute($attr, $validation = array())
    {
        $this->_myAttributes[$attr] = null;
        if(!empty($validation)){
            $_validator[] = $validation;
        }


    }

    /**
     * Returns the list of attribute names.
     * By default, this method returns all public non-static properties of the class.
     * You may override this method to change the default behavior.
     * @return array list of attribute names.
     */
    public function attributes()
    {
        $returnName = array();

        foreach ($this->_myAttributes as $key => $value) {
            $returnName[] = $key;
        }

        return $this->_myAttributes;
    }

    /**
     * Returns attribute values.
     * @param array $names list of attributes whose value needs to be returned.
     * Defaults to null, meaning all attributes listed in [[attributes()]] will be returned.
     * If it is an array, only the attributes in the array will be returned.
     * @param array $except list of attributes whose value should NOT be returned.
     * @return array attribute values (name => value).
     */
    public function getAttributes($names = null, $except = [])
    {
        $values = [];
        if ($names === null) {
            $names = $this->attributes();
        }
        foreach ($names as $name) {
            $values[$name] = $this->_myAttributes[$name];
        }
        foreach ($except as $name) {
            unset($values[$name]);
        }

        return $values;
    }

    /**
     * Sets the attribute values in a massive way.
     * @param array $values attribute values (name => value) to be assigned to the model.
     * @param boolean $safeOnly whether the assignments should only be done to the safe attributes.
     * A safe attribute is one that is associated with a validation rule in the current [[scenario]].
     * @see safeAttributes()
     * @see attributes()
     */
    public function setAttributes($values, $safeOnly = true)
    {
        if (is_array($values)) {
            $attributes = array_flip($safeOnly ? $this->safeAttributes() : $this->attributes());
            foreach ($values as $name => $value) {
                if (isset($attributes[$name])) {
                    $this->_myAttributes[$name] = $value;
                } elseif ($safeOnly) {
                    $this->onUnsafeAttribute($name, $value);
                }
            }
        }
    }

    public function rules()
    {
        return $this->_validators;
    }
}