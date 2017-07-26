<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recolhimento".
 *
 * @property integer $idRecolhimento
 * @property string $local
 * @property double $valor
 * @property string $dataSolicitacao
 * @property string $dataRecolhimento
 * @property integer $profile_idProfile
 *
 * @property Item[] $items
 * @property Perfil $profileIdProfile
 */
class Recolhimento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recolhimento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['local', 'valor', 'dataSolicitacao', 'profile_idProfile'], 'required'],
            [['valor'], 'number'],
            [['dataSolicitacao', 'dataRecolhimento'], 'safe'],
            [['profile_idProfile'], 'integer'],
            [['local'], 'string', 'max' => 50],
            [['profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRecolhimento' => Yii::t('app', 'Id Recolhimento'),
            'local' => Yii::t('app', 'Local'),
            'valor' => Yii::t('app', 'Valor'),
            'dataSolicitacao' => Yii::t('app', 'Data Solicitacao'),
            'dataRecolhimento' => Yii::t('app', 'Data Recolhimento'),
            'profile_idProfile' => Yii::t('app', 'Profile Id Profile'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['recolhimento_idRecolhimento' => 'idRecolhimento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Perfil::className(), ['idProfile' => 'profile_idProfile']);
    }
}
