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
 * @property string $uf
 * @property string $complemento
 * @property string $bairro
 * @property string $cep
 *
 * @property Perfil $profileIdProfile
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
            [['Profile_idProfile', 'logradouro', 'numero', 'cidade', 'uf', 'bairro', 'cep'], 'required'],
            [['Profile_idProfile'], 'integer'],
            [['logradouro', 'cidade'], 'string', 'max' => 100],
            [['numero'], 'string', 'max' => 10],
            [['uf'], 'string', 'max' => 2],
            [['complemento'], 'string', 'max' => 45],
            [['bairro'], 'string', 'max' => 60],
            [['cep'], 'string', 'max' => 9],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Profile_idProfile' => Yii::t('app', 'Profile Id Profile'),
            'logradouro' => Yii::t('app', 'Logradouro'),
            'numero' => Yii::t('app', 'Numero'),
            'cidade' => Yii::t('app', 'Cidade'),
            'uf' => Yii::t('app', 'Uf'),
            'complemento' => Yii::t('app', 'Complemento'),
            'bairro' => Yii::t('app', 'Bairro'),
            'cep' => Yii::t('app', 'Cep'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Perfil::className(), ['idProfile' => 'Profile_idProfile']);
    }
}
