<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $idProfile
 * @property string $nome
 * @property string $cpf
 * @property string $dataNascimento
 * @property string $celular
 * @property string $telefone
 * @property string $endereco
 *
 * @property Animal[] $animals
 * @property Doacao[] $doacaos
 * @property Endereco $endereco0
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
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'celular', 'telefone', 'endereco'], 'required'],
            [['dataNascimento'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['cpf', 'celular'], 'string', 'max' => 11],
            [['telefone'], 'string', 'max' => 10],
            [['endereco'], 'string', 'max' => 100],
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
            'endereco' => 'Endereco',
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
    public function getEndereco0()
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
