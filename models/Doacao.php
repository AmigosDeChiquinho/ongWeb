<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Doacao".
 *
 * @property integer $idDoacao
 * @property double $valor
 * @property string $dataDoacao
 * @property integer $Profile_User_idUser
 *
 * @property Profile $profileUserIdUser
 */
class Doacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Doacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor', 'dataDoacao', 'Profile_User_idUser'], 'required'],
            [['valor'], 'number'],
            [['dataDoacao'], 'safe'],
            [['Profile_User_idUser'], 'integer'],
            [['Profile_User_idUser'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_User_idUser' => 'User_idUser']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDoacao' => 'Id Doacao',
            'valor' => 'Valor',
            'dataDoacao' => 'Data Doacao',
            'Profile_User_idUser' => 'Profile  User Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileUserIdUser()
    {
        return $this->hasOne(Profile::className(), ['User_idUser' => 'Profile_User_idUser']);
    }
}
