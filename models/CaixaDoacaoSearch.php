<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CaixaDoacao;

/**
 * CaixaDoacaoSearch represents the model behind the search form about `app\models\CaixaDoacao`.
 */
class CaixaDoacaoSearch extends CaixaDoacao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCaixinha', 'aprovado', 'profile_idProfile'], 'integer'],
            [['nomeEstabelecimento', 'telefone', 'endereco', 'dataInicio', 'dataFim', 'created_at', 'updated_at'], 'safe'],
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
        $query = CaixaDoacao::find();

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
            'dataInicio' => $this->dataInicio,
            'dataFim' => $this->dataFim,
            'aprovado' => $this->aprovado,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'profile_idProfile' => $this->profile_idProfile,
        ]);

        $query->andFilterWhere(['like', 'nomeEstabelecimento', $this->nomeEstabelecimento])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'endereco', $this->endereco]);

        return $dataProvider;
    }
}
