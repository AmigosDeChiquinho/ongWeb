<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property integer $idProfile
 * @property string $email
 * @property string $nome
 * @property string $cpf
 * @property string $dataNascimento
 * @property string $celular
 * @property string $telefone
 *
 * @property Animal[] $animals
 * @property Apadrinha[] $apadrinhas
 * @property Caixadoacao[] $caixadoacaos
 * @property Doacao[] $doacaos
 * @property Endereco $endereco
 * @property Recolhimento[] $recolhimentos
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'nome', 'celular'], 'required'],
            [['dataNascimento'], 'safe'],
            [['email'], 'string', 'max' => 100],
            [['nome'], 'string', 'max' => 200],
            [['cpf', 'celular'], 'string', 'max' => 11],
            [['telefone'], 'string', 'max' => 10],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProfile' => Yii::t('app', 'Id Profile'),
            'email' => Yii::t('app', 'Email'),
            'nome' => Yii::t('app', 'Nome'),
            'cpf' => Yii::t('app', 'Cpf'),
            'dataNascimento' => Yii::t('app', 'Data Nascimento'),
            'celular' => Yii::t('app', 'Celular'),
            'telefone' => Yii::t('app', 'Telefone'),
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
    public function getApadrinhas()
    {
        return $this->hasMany(Apadrinha::className(), ['Profile_idProfile' => 'idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixadoacaos()
    {
        return $this->hasMany(Caixadoacao::className(), ['profile_idProfile' => 'idProfile']);
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
    public function getRecolhimentos()
    {
        return $this->hasMany(Recolhimento::className(), ['profile_idProfile' => 'idProfile']);
    }
}
