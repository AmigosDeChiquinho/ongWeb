<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Divida".
 *
 * @property integer $idDivida
 * @property double $valor
 * @property string $descricao
 * @property string $dataPagamento
 */
class Divida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Divida';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor', 'descricao'], 'required'],
            [['valor'], 'number'],
            [['dataPagamento'], 'safe'],
            [['descricao'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDivida' => 'Id Divida',
            'valor' => 'Valor',
            'descricao' => 'Descricao',
            'dataPagamento' => 'Data Pagamento',
        ];
    }
}
