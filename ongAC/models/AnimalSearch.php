<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Animal;

/**
 * AnimalSearch represents the model behind the search form about `app\models\Animal`.
 */
class AnimalSearch extends Animal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idanimal', 'idade', 'Profile_User_idUser'], 'integer'],
            [['nome', 'raca', 'caracteristicas', 'cor', 'sexo', 'pelagem', 'brevehistorico'], 'safe'],
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
            'idade' => $this->idade,
            'Profile_User_idUser' => $this->Profile_User_idUser,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'raca', $this->raca])
            ->andFilterWhere(['like', 'caracteristicas', $this->caracteristicas])
            ->andFilterWhere(['like', 'cor', $this->cor])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'pelagem', $this->pelagem])
            ->andFilterWhere(['like', 'brevehistorico', $this->brevehistorico]);

        return $dataProvider;
    }
}
