<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prestamo;

/**
 * PrestamoSearch represents the model behind the search form about `app\models\Prestamo`.
 */
class PrestamoSearch extends Prestamo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prestamo', 'numero', 'cantidad_solicitada', 'persona_id_persona', 'objeto_id_objeto', 'estado_id_estado'], 'integer'],
            [['fecha_prestamo', 'fecha_devolucion'], 'safe'],
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
        $query = Prestamo::find();

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
            'id_prestamo' => $this->id_prestamo,
            'numero' => $this->numero,
            'cantidad_solicitada' => $this->cantidad_solicitada,
            'persona_id_persona' => $this->persona_id_persona,
            'objeto_id_objeto' => $this->objeto_id_objeto,
            'estado_id_estado' => $this->estado_id_estado,
        ]);

        $query->andFilterWhere(['like', 'fecha_prestamo', $this->fecha_prestamo])
            ->andFilterWhere(['like', 'fecha_devolucion', $this->fecha_devolucion]);

        return $dataProvider;
    }
}
