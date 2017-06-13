<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Profile".
 *
 * @property integer $idProfile
 * @property string $nome
 * @property string $cpf
 * @property string $dataNascimento
 * @property string $celular
 * @property string $telefone
 *
 * @property Animal[] $animals
 * @property Doacao[] $doacaos
 * @property Endereco $endereco
 * @property Padrinho[] $padrinhos
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'dataNascimento', 'celular'], 'required'],
            [['dataNascimento'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['cpf', 'celular'], 'string', 'max' => 11],
            [['telefone'], 'string', 'max' => 10],
            [['cpf'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProfile' => 'Id Profile',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'dataNascimento' => 'Data Nascimento',
            'celular' => 'Celular',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['Profile_idProfile' => 'idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoacaos()
    {
        return $this->hasMany(Doacao::className(), ['Profile_idProfile' => 'idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEndereco()
    {
        return $this->hasOne(Endereco::className(), ['Profile_idProfile' => 'idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPadrinhos()
    {
        return $this->hasMany(Padrinho::className(), ['Profile_idProfile' => 'idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['Profile_idProfile' => 'idProfile']);
    }
}
