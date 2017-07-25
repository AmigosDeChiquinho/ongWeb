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
 * @property integer $Profile_User_idUser
 *
 * @property Itemrecolher[] $itemrecolhers
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
            [['local', 'valor', 'dataSolicitacao', 'dataRecolhimento', 'Profile_User_idUser'], 'required'],
            [['valor'], 'number'],
            [['dataSolicitacao', 'dataRecolhimento'], 'safe'],
            [['Profile_User_idUser'], 'integer'],
            [['local'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRecolhimento' => 'Id Recolhimento',
            'local' => 'Local',
            'valor' => 'Valor',
            'dataSolicitacao' => 'Data Solicitacao',
            'dataRecolhimento' => 'Data Recolhimento',
            'Profile_User_idUser' => 'Profile  User Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemrecolhers()
    {
        return $this->hasMany(Itemrecolher::className(), ['Recolhimento_idRecolhimento' => 'idRecolhimento']);
    }
}
