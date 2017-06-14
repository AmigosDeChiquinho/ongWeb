<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoitem".
 *
 * @property integer $idTipoItem
 * @property string $nome
 *
 * @property Itemrecolher[] $itemrecolhers
 */
class Tipoitem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoitem';
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
    public function getItemrecolhers()
    {
        return $this->hasMany(Itemrecolher::className(), ['TipoItem_idTipoItem' => 'idTipoItem']);
    }
}
