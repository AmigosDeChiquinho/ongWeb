<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ItemRecolher".
 *
 * @property integer $idItemRecolher
 * @property integer $quantidade
 * @property string $unidade
 * @property integer $TipoItem_idTipoItem
 * @property integer $Recolhimento_idRecolhimento
 *
 * @property Recolhimento $recolhimentoIdRecolhimento
 * @property TipoItem $tipoItemIdTipoItem
 */
class ItemRecolher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ItemRecolher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantidade', 'unidade', 'TipoItem_idTipoItem', 'Recolhimento_idRecolhimento'], 'required'],
            [['quantidade', 'TipoItem_idTipoItem', 'Recolhimento_idRecolhimento'], 'integer'],
            [['unidade'], 'string', 'max' => 45],
            [['Recolhimento_idRecolhimento'], 'exist', 'skipOnError' => true, 'targetClass' => Recolhimento::className(), 'targetAttribute' => ['Recolhimento_idRecolhimento' => 'idRecolhimento']],
            [['TipoItem_idTipoItem'], 'exist', 'skipOnError' => true, 'targetClass' => TipoItem::className(), 'targetAttribute' => ['TipoItem_idTipoItem' => 'idTipoItem']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idItemRecolher' => 'Id Item Recolher',
            'quantidade' => 'Quantidade',
            'unidade' => 'Unidade',
            'TipoItem_idTipoItem' => 'Tipo Item Id Tipo Item',
            'Recolhimento_idRecolhimento' => 'Recolhimento Id Recolhimento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecolhimentoIdRecolhimento()
    {
        return $this->hasOne(Recolhimento::className(), ['idRecolhimento' => 'Recolhimento_idRecolhimento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoItemIdTipoItem()
    {
        return $this->hasOne(TipoItem::className(), ['idTipoItem' => 'TipoItem_idTipoItem']);
    }
}
