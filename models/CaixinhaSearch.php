<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Caixinha;

/**
 * CaixinhaSearch represents the model behind the search form about `app\models\Caixinha`.
 */
class CaixinhaSearch extends Caixinha
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCaixinha', 'aprovado'], 'integer'],
            [['nomeEstabelecimento', 'nomeResposavel', 'telefone', 'endereco', 'dataCriacao', 'dataRetirada'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Caixinha::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idCaixinha' => $this->idCaixinha,
            'dataCriacao' => $this->dataCriacao,
            'dataRetirada' => $this->dataRetirada,
            'aprovado' => $this->aprovado,
        ]);

        $query->andFilterWhere(['like', 'nomeEstabelecimento', $this->nomeEstabelecimento])
            ->andFilterWhere(['like', 'nomeResposavel', $this->nomeResposavel])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'endereco', $this->endereco]);

        return $dataProvider;
    }
}
