<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $Profile_idProfile
 * @property string $login
 * @property string $email
 * @property string $senha
 *
 * @property Profile $profileIdProfile
 */
class Usuario extends \yii\db\ActiveRecord
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
            [['Profile_idProfile', 'login', 'email', 'senha'], 'required'],
            [['Profile_idProfile'], 'integer'],
            [['login', 'senha'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['email'], 'unique'],
            [['login'], 'unique'],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Profile_idProfile' => 'Profile Id Profile',
            'login' => 'Login',
            'email' => 'Email',
            'senha' => 'Senha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Profile::className(), ['idProfile' => 'Profile_idProfile']);
    }
}
