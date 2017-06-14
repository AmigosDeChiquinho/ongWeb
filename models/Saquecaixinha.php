<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "saquecaixinha".
 *
 * @property integer $idSaqueCaixinha
 * @property string $dataSaque
 * @property double $valor
 * @property integer $Caixinha_idCaixinha
 *
 * @property Caixinha $caixinhaIdCaixinha
 */
class Saquecaixinha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saquecaixinha';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dataSaque', 'valor', 'Caixinha_idCaixinha'], 'required'],
            [['dataSaque'], 'safe'],
            [['valor'], 'number'],
            [['Caixinha_idCaixinha'], 'integer'],
            [['Caixinha_idCaixinha'], 'exist', 'skipOnError' => true, 'targetClass' => Caixinha::className(), 'targetAttribute' => ['Caixinha_idCaixinha' => 'idCaixinha']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSaqueCaixinha' => 'Id Saque Caixinha',
            'dataSaque' => 'Data Saque',
            'valor' => 'Valor',
            'Caixinha_idCaixinha' => 'Caixinha Id Caixinha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixinhaIdCaixinha()
    {
        return $this->hasOne(Caixinha::className(), ['idCaixinha' => 'Caixinha_idCaixinha']);
    }
}
