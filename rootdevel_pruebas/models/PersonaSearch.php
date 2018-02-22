<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Persona;

/**
 * PersonaSearch represents the model behind the search form about `app\models\Persona`.
 */
class PersonaSearch extends Persona
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_persona', 'tipo_documento_id_idtipo_documento', 'numero_doc_id'], 'integer'],
            [['nombre_persona', 'apellido_persona', 'celular', 'direccion'], 'safe'],
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
        $query = Persona::find();

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
            'id_persona' => $this->id_persona,
            'tipo_documento_id_idtipo_documento' => $this->tipo_documento_id_idtipo_documento,
            'numero_doc_id' => $this->numero_doc_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_persona', $this->nombre_persona])
            ->andFilterWhere(['like', 'apellido_persona', $this->apellido_persona])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'direccion', $this->direccion]);

        return $dataProvider;
    }
}
