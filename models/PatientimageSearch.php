<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Patientimage;

/**
 * PatientimageSearch represents the model behind the search form about `app\models\Patientimage`.
 */
class PatientimageSearch extends Patientimage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hn', 'image_name', 'image', 'capture_date', 'hos_guid', 'hos_guid_ext'], 'safe'],
            [['width', 'height'], 'integer'],
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
        $query = Patientimage::find();

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
            'width' => $this->width,
            'height' => $this->height,
            'capture_date' => $this->capture_date,
        ]);

        $query->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'image_name', $this->image_name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'hos_guid_ext', $this->hos_guid_ext]);

        return $dataProvider;
    }
}
