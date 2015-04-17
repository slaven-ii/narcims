<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $tel;
    public $body;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required', 'message' => '{attribute} je obavezo polje'],
            // email has to be a valid email address
            ['email', 'email', 'message' => 'E-mail nije ispravan'],
            [['tel'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Ime i prezime',
            'email' => 'E-mail',
            'tel' => '',
            'body' => 'Poruka'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject('Novi upid od ' . $this->email)
            ->setTextBody(
                $this->name . "\n".
                $this->email . "\n".
                $this->tel . "\n".
                $this->body
            )
            ->send();
    }
}
