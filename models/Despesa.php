<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Despesa".
 *
 * @property integer $idDespesa
 * @property string $recorrente
 * @property string $dataFim
 * @property string $dataPagamento
 * @property double $valor
 */
class Despesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Despesa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['recorrente'], 'required'],
            [['dataFim', 'dataPagamento'], 'safe'],
            [['valor'], 'number'],
            [['recorrente'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDespesa' => 'Id Despesa',
            'recorrente' => 'Recorrente',
            'dataFim' => 'Data Fim',
            'dataPagamento' => 'Data Pagamento',
            'valor' => 'Valor',
        ];
    }
}
