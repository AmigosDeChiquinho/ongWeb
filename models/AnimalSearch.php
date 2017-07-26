<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Animal;

/**
 * AnimalSearch represents the model behind the search form about `app\Models\Animal`.
 */
class AnimalSearch extends Animal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idanimal', 'idade', 'Profile_idProfile', 'arquivado'], 'integer'],
            [['nome', 'dataEntrada', 'caracteristicas', 'sexo', 'porte', 'pelagem', 'breveHistorico', 'created_at', 'updated_at', 'especie'], 'safe'],
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
        $query = Animal::find();

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
            'idanimal' => $this->idanimal,
            'dataEntrada' => $this->dataEntrada,
            'idade' => $this->idade,
            'Profile_idProfile' => $this->Profile_idProfile,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'arquivado' => $this->arquivado,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'caracteristicas', $this->caracteristicas])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'porte', $this->porte])
            ->andFilterWhere(['like', 'pelagem', $this->pelagem])
            ->andFilterWhere(['like', 'breveHistorico', $this->breveHistorico])
            ->andFilterWhere(['like', 'especie', $this->especie]);

        return $dataProvider;
    }
}
