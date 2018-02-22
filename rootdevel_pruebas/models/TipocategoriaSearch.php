<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tipocategoria;

/**
 * TipocategoriaSearch represents the model behind the search form about `app\models\Tipocategoria`.
 */
class TipocategoriaSearch extends Tipocategoria
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_categoria', 'categoria_id_categoria'], 'integer'],
            [['nombre_tcat', 'desc_tcat'], 'safe'],
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
        $query = Tipocategoria::find();

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
            'id_tipo_categoria' => $this->id_tipo_categoria,
            'categoria_id_categoria' => $this->categoria_id_categoria,
        ]);

        $query->andFilterWhere(['like', 'nombre_tcat', $this->nombre_tcat])
            ->andFilterWhere(['like', 'desc_tcat', $this->desc_tcat]);

        return $dataProvider;
    }
}
