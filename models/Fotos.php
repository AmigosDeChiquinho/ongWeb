<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fotos".
 *
 * @property integer $Animal_idanimal
 * @property integer $idfotos
 * @property string $imagem
 *
 * @property Animal $animalIdanimal
 */
class Fotos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fotos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Animal_idanimal', 'idfotos', 'imagem'], 'required'],
            [['Animal_idanimal', 'idfotos'], 'integer'],
            [['imagem'], 'string'],
            [['Animal_idanimal'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['Animal_idanimal' => 'idanimal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Animal_idanimal' => 'Animal Idanimal',
            'idfotos' => 'Idfotos',
            'imagem' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimalIdanimal()
    {
        return $this->hasOne(Animal::className(), ['idanimal' => 'Animal_idanimal']);
    }
}
