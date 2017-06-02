<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Profile".
 *
 * @property integer $User_idUser
 * @property string $nome
 * @property string $cpf
 * @property string $dataNascimento
 * @property string $celular
 * @property string $telefone
 * @property integer $Endereco_idEndereco
 *
 * @property Animal[] $animals
 * @property Doacao[] $doacaos
 * @property Padrinho[] $padrinhos
 * @property Endereco $enderecoIdEndereco
 * @property User $userIdUser
 * @property Recolhimento[] $recolhimentos
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
            [['User_idUser', 'nome', 'cpf', 'dataNascimento', 'celular', 'Endereco_idEndereco'], 'required'],
            [['User_idUser', 'Endereco_idEndereco'], 'integer'],
            [['dataNascimento'], 'safe'],
            [['nome', 'celular', 'telefone'], 'string', 'max' => 45],
            [['cpf'], 'string', 'max' => 14],
            [['Endereco_idEndereco'], 'exist', 'skipOnError' => true, 'targetClass' => Endereco::className(), 'targetAttribute' => ['Endereco_idEndereco' => 'idEndereco']],
            [['User_idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['User_idUser' => 'idUser']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'User_idUser' => 'User Id User',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'dataNascimento' => 'Data Nascimento',
            'celular' => 'Celular',
            'telefone' => 'Telefone',
            'Endereco_idEndereco' => 'Endereco Id Endereco',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['Profile_User_idUser' => 'User_idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoacaos()
    {
        return $this->hasMany(Doacao::className(), ['Profile_User_idUser' => 'User_idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPadrinhos()
    {
        return $this->hasMany(Padrinho::className(), ['Profile_User_idUser' => 'User_idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnderecoIdEndereco()
    {
        return $this->hasOne(Endereco::className(), ['idEndereco' => 'Endereco_idEndereco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIdUser()
    {
        return $this->hasOne(User::className(), ['idUser' => 'User_idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecolhimentos()
    {
        return $this->hasMany(Recolhimento::className(), ['Profile_User_idUser' => 'User_idUser']);
    }
}
