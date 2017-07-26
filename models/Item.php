<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $idItemRecolher
 * @property integer $quantidade
 * @property integer $recolhimento_idRecolhimento
 * @property integer $tipoitem_idTipoItem
 *
 * @property Recolhimento $recolhimentoIdRecolhimento
 * @property Tipoitem $tipoitemIdTipoItem
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantidade', 'recolhimento_idRecolhimento', 'tipoitem_idTipoItem'], 'required'],
            [['quantidade', 'recolhimento_idRecolhimento', 'tipoitem_idTipoItem'], 'integer'],
            [['recolhimento_idRecolhimento'], 'exist', 'skipOnError' => true, 'targetClass' => Recolhimento::className(), 'targetAttribute' => ['recolhimento_idRecolhimento' => 'idRecolhimento']],
            [['tipoitem_idTipoItem'], 'exist', 'skipOnError' => true, 'targetClass' => Tipoitem::className(), 'targetAttribute' => ['tipoitem_idTipoItem' => 'idTipoItem']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idItemRecolher' => Yii::t('app', 'Id Item Recolher'),
            'quantidade' => Yii::t('app', 'Quantidade'),
            'recolhimento_idRecolhimento' => Yii::t('app', 'Recolhimento Id Recolhimento'),
            'tipoitem_idTipoItem' => Yii::t('app', 'Tipoitem Id Tipo Item'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecolhimentoIdRecolhimento()
    {
        return $this->hasOne(Recolhimento::className(), ['idRecolhimento' => 'recolhimento_idRecolhimento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoitemIdTipoItem()
    {
        return $this->hasOne(Tipoitem::className(), ['idTipoItem' => 'tipoitem_idTipoItem']);
    }
}
