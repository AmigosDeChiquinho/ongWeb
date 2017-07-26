<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "caixadoacao".
 *
 * @property integer $idCaixinha
 * @property string $nomeEstabelecimento
 * @property string $telefone
 * @property string $endereco
 * @property string $dataInicio
 * @property string $dataFim
 * @property integer $aprovado
 * @property string $created_at
 * @property string $updated_at
 * @property integer $profile_idProfile
 *
 * @property Perfil $profileIdProfile
 * @property Saquecaixa[] $saquecaixas
 */
class CaixaDoacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caixadoacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomeEstabelecimento', 'created_at', 'updated_at', 'profile_idProfile'], 'required'],
            [['dataInicio', 'dataFim', 'created_at', 'updated_at'], 'safe'],
            [['aprovado', 'profile_idProfile'], 'integer'],
            [['nomeEstabelecimento'], 'string', 'max' => 100],
            [['telefone'], 'string', 'max' => 45],
            [['endereco'], 'string', 'max' => 200],
            [['profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCaixinha' => Yii::t('app', 'Id Caixinha'),
            'nomeEstabelecimento' => Yii::t('app', 'Nome Estabelecimento'),
            'telefone' => Yii::t('app', 'Telefone'),
            'endereco' => Yii::t('app', 'Endereco'),
            'dataInicio' => Yii::t('app', 'Data Inicio'),
            'dataFim' => Yii::t('app', 'Data Fim'),
            'aprovado' => Yii::t('app', 'Aprovado'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'profile_idProfile' => Yii::t('app', 'Profile Id Profile'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Perfil::className(), ['idProfile' => 'profile_idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaquecaixas()
    {
        return $this->hasMany(Saquecaixa::className(), ['Caixinha_idCaixinha' => 'idCaixinha']);
    }
}
