<?php

namespace app\modules\v1\models;

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
            'idanimal' => 'Idanimal',
            'nome' => 'Nome',
            'data_entrada' => 'Data Entrada',
            'idade' => 'Idade',
            'raca' => 'Raca',
            'caracteristicas' => 'Caracteristicas',
            'cor' => 'Cor',
            'sexo' => 'Sexo',
            'porte' => 'Porte',
            'pelagem' => 'Pelagem',
            'brevehistorico' => 'Brevehistorico',
            'Profile_idProfile' => 'Profile Id Profile',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'arquivado' => 'Arquivado',
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
