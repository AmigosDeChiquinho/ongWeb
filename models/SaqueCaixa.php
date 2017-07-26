<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "saquecaixa".
 *
 * @property integer $idSaqueCaixinha
 * @property string $dataSaque
 * @property double $valor
 * @property integer $Caixinha_idCaixinha
 *
 * @property Caixadoacao $caixinhaIdCaixinha
 */
class SaqueCaixa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saquecaixa';
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
            [['Caixinha_idCaixinha'], 'exist', 'skipOnError' => true, 'targetClass' => Caixadoacao::className(), 'targetAttribute' => ['Caixinha_idCaixinha' => 'idCaixinha']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSaqueCaixinha' => Yii::t('app', 'Id Saque Caixinha'),
            'dataSaque' => Yii::t('app', 'Data Saque'),
            'valor' => Yii::t('app', 'Valor'),
            'Caixinha_idCaixinha' => Yii::t('app', 'Caixinha Id Caixinha'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixinhaIdCaixinha()
    {
        return $this->hasOne(Caixadoacao::className(), ['idCaixinha' => 'Caixinha_idCaixinha']);
    }
}
