<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Padrinho".
 *
 * @property integer $idPadrinho
 * @property string $dataInicio
 * @property string $dataFim
 * @property double $mensalidade
 * @property integer $Animal_idanimal
 * @property integer $Profile_User_idUser
 *
 * @property Animal $animalIdanimal
 * @property Profile $profileUserIdUser
 */
class Padrinho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Padrinho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dataInicio', 'mensalidade', 'Animal_idanimal', 'Profile_User_idUser'], 'required'],
            [['dataInicio', 'dataFim'], 'safe'],
            [['mensalidade'], 'number'],
            [['Animal_idanimal', 'Profile_User_idUser'], 'integer'],
            [['Animal_idanimal'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['Animal_idanimal' => 'idanimal']],
            [['Profile_User_idUser'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_User_idUser' => 'User_idUser']],
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
            'Profile_User_idUser' => 'Profile  User Id User',
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
    public function getProfileUserIdUser()
    {
        return $this->hasOne(Profile::className(), ['User_idUser' => 'Profile_User_idUser']);
    }
}
