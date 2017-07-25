<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "animal".
 *
 * @property integer $idanimal
 * @property string $nome
 * @property string $dataEntrada
 * @property integer $idade
 * @property string $caracteristicas
 * @property string $sexo
 * @property string $porte
 * @property string $pelagem
 * @property string $breveHistorico
 * @property integer $Profile_idProfile
 * @property string $created_at
 * @property string $updated_at
 * @property integer $arquivado
 * @property string $especie
 *
 * @property Perfil $profileIdProfile
 * @property Apadrinha[] $apadrinhas
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'dataEntrada', 'idade', 'caracteristicas', 'sexo', 'porte', 'pelagem', 'breveHistorico', 'especie'], 'required'],
            [['dataEntrada'], 'safe'],
            [['idade', 'Profile_idProfile', 'arquivado'], 'integer'],
            [['porte', 'pelagem', 'especie'], 'string'],
            [['nome'], 'string', 'max' => 100],
            [['caracteristicas'], 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 20],
            [['breveHistorico'], 'string', 'max' => 500],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idanimal' => Yii::t('app', 'Idanimal'),
            'nome' => Yii::t('app', 'Nome'),
            'dataEntrada' => Yii::t('app', 'Data Entrada'),
            'idade' => Yii::t('app', 'Idade'),
            'caracteristicas' => Yii::t('app', 'Caracteristicas'),
            'sexo' => Yii::t('app', 'Sexo'),
            'porte' => Yii::t('app', 'Porte'),
            'pelagem' => Yii::t('app', 'Pelagem'),
            'breveHistorico' => Yii::t('app', 'Breve Historico'),
            'Profile_idProfile' => Yii::t('app', 'Profile Id Profile'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'arquivado' => Yii::t('app', 'Arquivado'),
            'especie' => Yii::t('app', 'Especie'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Perfil::className(), ['idProfile' => 'Profile_idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApadrinhas()
    {
        return $this->hasMany(Apadrinha::className(), ['Animal_idanimal' => 'idanimal']);
    }

    /**
     * @inheritdoc
     * @return AnimalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AnimalQuery(get_called_class());
    }

    public function formName()
    {
        return '';
    }

    public function behaviors()   
    {
        return [
        [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'created_at',
            'updatedAtAttribute' => 'updated_at',
            'value' => new Expression('NOW()'),
            ],
        ];
    }

}
