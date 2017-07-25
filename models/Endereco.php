<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property integer $Profile_idProfile
 * @property string $logradouro
 * @property string $numero
 * @property string $cidade
 * @property string $estado
 * @property string $complemento
 * @property string $bairro
 * @property string $cep
 *
 * @property Profile $profileIdProfile
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Profile_idProfile', 'logradouro', 'numero', 'cidade', 'estado', 'bairro', 'cep'], 'required'],
            [['Profile_idProfile'], 'integer'],
            [['logradouro', 'cidade', 'estado'], 'string', 'max' => 100],
            [['numero'], 'string', 'max' => 10],
            [['complemento'], 'string', 'max' => 45],
            [['bairro'], 'string', 'max' => 60],
            [['cep'], 'string', 'max' => 9],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Profile_idProfile' => 'Profile Id Profile',
            'logradouro' => 'Logradouro',
            'numero' => 'Numero',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'cep' => 'Cep',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Profile::className(), ['idProfile' => 'Profile_idProfile']);
    }
}
