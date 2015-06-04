<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Opitemrece;

/**
 * OpitemreceSearch represents the model behind the search form about `app\models\Opitemrece`.
 */
class OpitemreceSearch extends Opitemrece
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hos_guid', 'vn', 'hn', 'an', 'icode', 'drugusage', 'idr', 'recetime', 'vstdate', 'vsttime', 'doctor', 'rxdate', 'rxtime', 'sp_use', 'hcode', 'print', 'dep_code', 'finance_number', 'use_right', 'node_id', 'sub_type', 'pttype', 'income', 'remain', 'item_type', 'staff', 'doctor_lock', 'paidst', 'last_modified', 'command_doctor'], 'safe'],
            [['qty', 'iperday', 'order_no', 'item_no', 'stock_department_id'], 'integer'],
            [['iperdose', 'unitprice', 'discount', 'sum_price', 'cost'], 'number'],
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
        $query = Opitemrece::find();

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
            'qty' => $this->qty,
            'iperday' => $this->iperday,
            'iperdose' => $this->iperdose,
            'recetime' => $this->recetime,
            'unitprice' => $this->unitprice,
            'vstdate' => $this->vstdate,
            'vsttime' => $this->vsttime,
            'rxdate' => $this->rxdate,
            'rxtime' => $this->rxtime,
            'discount' => $this->discount,
            'order_no' => $this->order_no,
            'item_no' => $this->item_no,
            'last_modified' => $this->last_modified,
            'sum_price' => $this->sum_price,
            'cost' => $this->cost,
            'stock_department_id' => $this->stock_department_id,
        ]);

        $query->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'vn', $this->vn])
            ->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'an', $this->an])
            ->andFilterWhere(['like', 'icode', $this->icode])
            ->andFilterWhere(['like', 'drugusage', $this->drugusage])
            ->andFilterWhere(['like', 'idr', $this->idr])
            ->andFilterWhere(['like', 'doctor', $this->doctor])
            ->andFilterWhere(['like', 'sp_use', $this->sp_use])
            ->andFilterWhere(['like', 'hcode', $this->hcode])
            ->andFilterWhere(['like', 'print', $this->print])
            ->andFilterWhere(['like', 'dep_code', $this->dep_code])
            ->andFilterWhere(['like', 'finance_number', $this->finance_number])
            ->andFilterWhere(['like', 'use_right', $this->use_right])
            ->andFilterWhere(['like', 'node_id', $this->node_id])
            ->andFilterWhere(['like', 'sub_type', $this->sub_type])
            ->andFilterWhere(['like', 'pttype', $this->pttype])
            ->andFilterWhere(['like', 'income', $this->income])
            ->andFilterWhere(['like', 'remain', $this->remain])
            ->andFilterWhere(['like', 'item_type', $this->item_type])
            ->andFilterWhere(['like', 'staff', $this->staff])
            ->andFilterWhere(['like', 'doctor_lock', $this->doctor_lock])
            ->andFilterWhere(['like', 'paidst', $this->paidst])
            ->andFilterWhere(['like', 'command_doctor', $this->command_doctor]);

        return $dataProvider;
    }
}
