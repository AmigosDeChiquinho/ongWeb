<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apadrinha".
 *
 * @property integer $idPadrinho
 * @property string $dataInicio
 * @property string $dataFim
 * @property double $mensalidade
 * @property integer $Animal_idanimal
 * @property integer $Profile_idProfile
 *
 * @property Animal $animalIdanimal
 * @property Perfil $profileIdProfile
 */
class Apadrinha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apadrinha';
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
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPadrinho' => Yii::t('app', 'Id Padrinho'),
            'dataInicio' => Yii::t('app', 'Data Inicio'),
            'dataFim' => Yii::t('app', 'Data Fim'),
            'mensalidade' => Yii::t('app', 'Mensalidade'),
            'Animal_idanimal' => Yii::t('app', 'Animal Idanimal'),
            'Profile_idProfile' => Yii::t('app', 'Profile Id Profile'),
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
        return $this->hasOne(Perfil::className(), ['idProfile' => 'Profile_idProfile']);
    }
}
