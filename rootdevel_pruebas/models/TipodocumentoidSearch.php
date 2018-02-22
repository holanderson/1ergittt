<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tipodocumentoid;

/**
 * TipodocumentoidSearch represents the model behind the search form about `app\models\Tipodocumentoid`.
 */
class TipodocumentoidSearch extends Tipodocumentoid
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtipo_documento'], 'integer'],
            [['tip_documento'], 'safe'],
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
        $query = Tipodocumentoid::find();

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
            'idtipo_documento' => $this->idtipo_documento,
        ]);

        $query->andFilterWhere(['like', 'tip_documento', $this->tip_documento]);

        return $dataProvider;
    }
}
