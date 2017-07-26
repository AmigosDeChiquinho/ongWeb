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
 * @property string $nomeDoador
 *
 * @property Perfil $profileIdProfile
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
            [['valor', 'dataDoacao'], 'required'],
            [['valor'], 'number'],
            [['dataDoacao'], 'safe'],
            [['Profile_idProfile'], 'integer'],
            [['nomeDoador'], 'string', 'max' => 100],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDoacao' => Yii::t('app', 'Id Doacao'),
            'valor' => Yii::t('app', 'Valor'),
            'dataDoacao' => Yii::t('app', 'Data Doacao'),
            'Profile_idProfile' => Yii::t('app', 'Profile Id Profile'),
            'nomeDoador' => Yii::t('app', 'Nome Doador'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Perfil::className(), ['idProfile' => 'Profile_idProfile']);
    }
}
