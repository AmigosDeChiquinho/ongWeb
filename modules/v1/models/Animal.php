<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Animal".
 *
 * @property integer $idanimal
 * @property string $nome
 * @property integer $idade
 * @property string $raca
 * @property string $caracteristicas
 * @property string $cor
 * @property string $sexo
 * @property string $pelagem
 * @property string $brevehistorico
 * @property integer $Profile_User_idUser
 *
 * @property Profile $profileUserIdUser
 * @property Padrinho[] $padrinhos
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'sexo', 'Profile_User_idUser'], 'required'],
            [['idade', 'Profile_User_idUser'], 'integer'],
            [['pelagem'], 'string'],
            [['nome'], 'string', 'max' => 100],
            [['raca', 'cor'], 'string', 'max' => 45],
            [['caracteristicas'], 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 20],
            [['brevehistorico'], 'string', 'max' => 500],
            [['Profile_User_idUser'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_User_idUser' => 'User_idUser']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idanimal' => 'Idanimal',
            'nome' => 'Nome',
            'idade' => 'Idade',
            'raca' => 'Raca',
            'caracteristicas' => 'Caracteristicas',
            'cor' => 'Cor',
            'sexo' => 'Sexo',
            'pelagem' => 'Pelagem',
            'brevehistorico' => 'Brevehistorico',
            'Profile_User_idUser' => 'Profile  User Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileUserIdUser()
    {
        return $this->hasOne(Profile::className(), ['User_idUser' => 'Profile_User_idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPadrinhos()
    {
        return $this->hasMany(Padrinho::className(), ['Animal_idanimal' => 'idanimal']);
    }
}
