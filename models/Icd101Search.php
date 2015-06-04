<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Icd101;

/**
 * Icd101Search represents the model behind the search form about `app\models\Icd101`.
 */
class Icd101Search extends Icd101
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'spclty', 'tname', 'code3', 'code4', 'code5', 'ipd_valid', 'icd10compat', 'icd10tmcompat', 'active_status', 'hos_guid', 'hos_guid_ext'], 'safe'],
            [['sex'], 'integer'],
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
        $query = Icd101::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'sex' => $this->sex,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'spclty', $this->spclty])
            ->andFilterWhere(['like', 'tname', $this->tname])
            ->andFilterWhere(['like', 'code3', $this->code3])
            ->andFilterWhere(['like', 'code4', $this->code4])
            ->andFilterWhere(['like', 'code5', $this->code5])
            ->andFilterWhere(['like', 'ipd_valid', $this->ipd_valid])
            ->andFilterWhere(['like', 'icd10compat', $this->icd10compat])
            ->andFilterWhere(['like', 'icd10tmcompat', $this->icd10tmcompat])
            ->andFilterWhere(['like', 'active_status', $this->active_status])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'hos_guid_ext', $this->hos_guid_ext]);

        return $dataProvider;
    }
}
