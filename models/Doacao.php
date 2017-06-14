<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doacao".
 *
 * @property integer $idDoacao
 * @property double $valor
 * @property string $dataDoacao
 * @property integer $Profile_idProfile
 *
 * @property Profile $profileIdProfile
 */
class Doacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor', 'dataDoacao', 'Profile_idProfile'], 'required'],
            [['valor'], 'number'],
            [['dataDoacao'], 'safe'],
            [['Profile_idProfile'], 'integer'],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
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
            'Profile_idProfile' => 'Profile Id Profile',
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
