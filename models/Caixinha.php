<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixinha".
 *
 * @property integer $idCaixinha
 * @property string $nomeEstabelecimento
 * @property string $nomeResposavel
 * @property string $telefone
 * @property string $endereco
 * @property string $dataCriacao
 * @property string $dataRetirada
 * @property integer $aprovado
 *
 * @property Saquecaixinha[] $saquecaixinhas
 */
class Caixinha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caixinha';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomeEstabelecimento', 'nomeResposavel', 'telefone', 'endereco', 'dataCriacao'], 'required'],
            [['dataCriacao', 'dataRetirada'], 'safe'],
            [['aprovado'], 'integer'],
            [['nomeEstabelecimento', 'nomeResposavel'], 'string', 'max' => 100],
            [['telefone'], 'string', 'max' => 45],
            [['endereco'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCaixinha' => Yii::t('app', 'Id Caixinha'),
            'nomeEstabelecimento' => Yii::t('app', 'Nome Estabelecimento'),
            'nomeResposavel' => Yii::t('app', 'Nome Resposavel'),
            'telefone' => Yii::t('app', 'Telefone'),
            'endereco' => Yii::t('app', 'Endereco'),
            'dataCriacao' => Yii::t('app', 'Data Criacao'),
            'dataRetirada' => Yii::t('app', 'Data Retirada'),
            'aprovado' => Yii::t('app', 'Aprovado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaquecaixinhas()
    {
        return $this->hasMany(Saquecaixinha::className(), ['Caixinha_idCaixinha' => 'idCaixinha']);
    }
}
