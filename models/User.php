<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $idUser
 * @property string $login
 * @property string $email
 * @property string $senha
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'email', 'senha'], 'required'],
            [['login', 'senha'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['email'], 'unique'],
            [['login'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUser' => Yii::t('app', 'Id User'),
            'login' => Yii::t('app', 'Login'),
            'email' => Yii::t('app', 'Email'),
            'senha' => Yii::t('app', 'Senha'),
        ];
    }
}
