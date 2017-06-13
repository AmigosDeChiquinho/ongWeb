<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TipoItem".
 *
 * @property integer $idTipoItem
 * @property string $nome
 *
 * @property ItemRecolher[] $itemRecolhers
 */
class TipoItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TipoItem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipoItem' => 'Id Tipo Item',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemRecolhers()
    {
        return $this->hasMany(ItemRecolher::className(), ['TipoItem_idTipoItem' => 'idTipoItem']);
    }
}
