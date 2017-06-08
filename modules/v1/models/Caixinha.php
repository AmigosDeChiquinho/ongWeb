<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "Caixinha".
 *
 * @property integer $idCaixinha
 * @property string $nomeEstabelecimento
 * @property string $endereco
 * @property string $dataCriacao
 * @property string $dataRetirada
 *
 * @property SaqueCaixinha[] $saqueCaixinhas
 */
class Caixinha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Caixinha';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomeEstabelecimento', 'endereco', 'dataCriacao'], 'required'],
            [['dataCriacao', 'dataRetirada'], 'safe'],
            [['nomeEstabelecimento'], 'string', 'max' => 100],
            [['endereco'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCaixinha' => 'Id Caixinha',
            'nomeEstabelecimento' => 'Nome Estabelecimento',
            'endereco' => 'Endereco',
            'dataCriacao' => 'Data Criacao',
            'dataRetirada' => 'Data Retirada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaqueCaixinhas()
    {
        return $this->hasMany(SaqueCaixinha::className(), ['Caixinha_idCaixinha' => 'idCaixinha']);
    }
}
