<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Objeto;

/**
 * ObjetoSearch represents the model behind the search form about `app\models\Objeto`.
 */
class ObjetoSearch extends Objeto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_objeto', 'cantidad_disponible', 'estado_id_estado', 'categoria_id_categoria', 'tipo_categoria_id_tipo_categoria'], 'integer'],
            [['nombre_objeto', 'descripcion_obj'], 'safe'],
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
        $query = Objeto::find();

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
            'id_objeto' => $this->id_objeto,
            'cantidad_disponible' => $this->cantidad_disponible,
            'estado_id_estado' => $this->estado_id_estado,
            'categoria_id_categoria' => $this->categoria_id_categoria,
            'tipo_categoria_id_tipo_categoria' => $this->tipo_categoria_id_tipo_categoria,
        ]);

        $query->andFilterWhere(['like', 'nombre_objeto', $this->nombre_objeto])
            ->andFilterWhere(['like', 'descripcion_obj', $this->descripcion_obj]);

        return $dataProvider;
    }
}
