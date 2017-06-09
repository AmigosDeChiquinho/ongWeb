<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animal".
 *
 * @property integer $idanimal
 * @property string $nome
 * @property string $data_entrada
 * @property integer $idade
 * @property string $raca
 * @property string $caracteristicas
 * @property string $cor
 * @property string $sexo
 * @property string $porte
 * @property string $pelagem
 * @property string $brevehistorico
 * @property integer $Profile_idProfile
 * @property string $created_at
 * @property string $updated_at
 * @property integer $arquivado
 *
 * @property Profile $profileIdProfile
 * @property Fotos[] $fotos
 * @property Padrinho[] $padrinhos
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
            [['data_entrada', 'idade', 'raca', 'caracteristicas', 'cor', 'sexo', 'porte', 'pelagem', 'brevehistorico', 'created_at', 'updated_at'], 'required'],
            [['data_entrada', 'created_at', 'updated_at'], 'safe'],
            [['idade', 'Profile_idProfile', 'arquivado'], 'integer'],
            [['porte', 'pelagem'], 'string'],
            [['nome'], 'string', 'max' => 100],
            [['raca', 'cor'], 'string', 'max' => 45],
            [['caracteristicas'], 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 20],
            [['brevehistorico'], 'string', 'max' => 500],
            [['Profile_idProfile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['Profile_idProfile' => 'idProfile']],
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
            'data_entrada' => Yii::t('app', 'Data Entrada'),
            'idade' => Yii::t('app', 'Idade'),
            'raca' => Yii::t('app', 'Raca'),
            'caracteristicas' => Yii::t('app', 'Caracteristicas'),
            'cor' => Yii::t('app', 'Cor'),
            'sexo' => Yii::t('app', 'Sexo'),
            'porte' => Yii::t('app', 'Porte'),
            'pelagem' => Yii::t('app', 'Pelagem'),
            'brevehistorico' => Yii::t('app', 'Brevehistorico'),
            'Profile_idProfile' => Yii::t('app', 'Profile Id Profile'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'arquivado' => Yii::t('app', 'Arquivado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileIdProfile()
    {
        return $this->hasOne(Profile::className(), ['idProfile' => 'Profile_idProfile']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotos()
    {
        return $this->hasMany(Fotos::className(), ['Animal_idanimal' => 'idanimal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPadrinhos()
    {
        return $this->hasMany(Padrinho::className(), ['Animal_idanimal' => 'idanimal']);
    }
}
