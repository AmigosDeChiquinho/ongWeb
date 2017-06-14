<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "padrinho".
 *
 * @property integer $idPadrinho
 * @property string $dataInicio
 * @property string $dataFim
 * @property double $mensalidade
 * @property integer $Animal_idanimal
 * @property integer $Profile_idProfile
 *
 * @property Animal $animalIdanimal
 * @property Profile $profileIdProfile
 */
class Padrinho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'padrinho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dataInicio', 'mensalidade', 'Animal_idanimal', 'Profile_idProfile'], 'required'],
            [['dataInicio', 'dataFim'], 'safe'],
            [['mensalidade'], 'number'],
            [['Animal_idanimal', 'Profile_idProfile'], 'integer'],
            [['Animal_idanimal'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['Animal_idanimal' => 'idanimal']],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPadrinho' => 'Id Padrinho',
            'dataInicio' => 'Data Inicio',
            'dataFim' => 'Data Fim',
            'mensalidade' => 'Mensalidade',
            'Animal_idanimal' => 'Animal Idanimal',
            'Profile_idProfile' => 'Profile Id Profile',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimalIdanimal()
    {
        return $this->hasOne(Animal::className(), ['idanimal' => 'Animal_idanimal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Profile::className(), ['idProfile' => 'Profile_idProfile']);
    }
}
