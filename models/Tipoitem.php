<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoitem".
 *
 * @property integer $idTipoItem
 * @property string $nome
 * @property string $unidade
 *
 * @property Item[] $items
 */
class TipoItem extends \yii\db\ActiveRecord
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
            [['nome', 'unidade'], 'required'],
            [['nome'], 'string', 'max' => 100],
            [['unidade'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipoItem' => Yii::t('app', 'Id Tipo Item'),
            'nome' => Yii::t('app', 'Nome'),
            'unidade' => Yii::t('app', 'Unidade'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['tipoitem_idTipoItem' => 'idTipoItem']);
    }
}
