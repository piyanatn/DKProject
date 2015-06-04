<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vnstat;

/**
 * VnstartSearch represents the model behind the search form about `app\models\Vnstat`.
 */
class VnstartSearch extends Vnstat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vn', 'hn', 'pdx', 'accident_code', 'dx_doctor', 'dx0', 'dx1', 'dx2', 'dx3', 'dx4', 'dx5', 'sex', 'aid', 'moopart', 'pttype', 'spclty', 'vstdate', 'op0', 'op1', 'op2', 'op3', 'op4', 'op5', 'rcp_no', 'print_done', 'pttype_in_region', 'pttype_in_chwpart', 'pcode', 'hcode', 'hospmain', 'hospsub', 'pttypeno', 'pttype_expire', 'cid', 'main_pdx', 'rcpno_list', 'ym', 'node_id', 'ill_visit', 'pttype_begin', 'old_diagnosis', 'debt_id_list', 'vn_guid', 'lastvisit_vn', 'hos_guid'], 'safe'],
            [['gr504', 'lastvisit', 'age_y', 'age_m', 'age_d', 'count_in_month', 'count_in_year', 'dba', 'print_count', 'pt_subtype', 'count_in_day', 'lastvisit_hour'], 'integer'],
            [['income', 'paid_money', 'remain_money', 'uc_money', 'item_money', 'inc01', 'inc02', 'inc03', 'inc04', 'inc05', 'inc06', 'inc07', 'inc08', 'inc09', 'inc10', 'inc11', 'inc12', 'inc13', 'inc14', 'inc15', 'inc16', 'inc17', 'inc_drug', 'inc_nondrug', 'rcpt_money', 'discount_money'], 'number'],
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
        $query = Vnstat::find();

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
            'gr504' => $this->gr504,
            'lastvisit' => $this->lastvisit,
            'age_y' => $this->age_y,
            'age_m' => $this->age_m,
            'age_d' => $this->age_d,
            'count_in_month' => $this->count_in_month,
            'count_in_year' => $this->count_in_year,
            'income' => $this->income,
            'paid_money' => $this->paid_money,
            'remain_money' => $this->remain_money,
            'uc_money' => $this->uc_money,
            'item_money' => $this->item_money,
            'dba' => $this->dba,
            'vstdate' => $this->vstdate,
            'print_count' => $this->print_count,
            'inc01' => $this->inc01,
            'inc02' => $this->inc02,
            'inc03' => $this->inc03,
            'inc04' => $this->inc04,
            'inc05' => $this->inc05,
            'inc06' => $this->inc06,
            'inc07' => $this->inc07,
            'inc08' => $this->inc08,
            'inc09' => $this->inc09,
            'inc10' => $this->inc10,
            'inc11' => $this->inc11,
            'inc12' => $this->inc12,
            'inc13' => $this->inc13,
            'inc14' => $this->inc14,
            'inc15' => $this->inc15,
            'inc16' => $this->inc16,
            'pttype_expire' => $this->pttype_expire,
            'inc17' => $this->inc17,
            'inc_drug' => $this->inc_drug,
            'inc_nondrug' => $this->inc_nondrug,
            'pt_subtype' => $this->pt_subtype,
            'count_in_day' => $this->count_in_day,
            'pttype_begin' => $this->pttype_begin,
            'lastvisit_hour' => $this->lastvisit_hour,
            'rcpt_money' => $this->rcpt_money,
            'discount_money' => $this->discount_money,
        ]);

        $query->andFilterWhere(['like', 'vn', $this->vn])
            ->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'pdx', $this->pdx])
            ->andFilterWhere(['like', 'accident_code', $this->accident_code])
            ->andFilterWhere(['like', 'dx_doctor', $this->dx_doctor])
            ->andFilterWhere(['like', 'dx0', $this->dx0])
            ->andFilterWhere(['like', 'dx1', $this->dx1])
            ->andFilterWhere(['like', 'dx2', $this->dx2])
            ->andFilterWhere(['like', 'dx3', $this->dx3])
            ->andFilterWhere(['like', 'dx4', $this->dx4])
            ->andFilterWhere(['like', 'dx5', $this->dx5])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'aid', $this->aid])
            ->andFilterWhere(['like', 'moopart', $this->moopart])
            ->andFilterWhere(['like', 'pttype', $this->pttype])
            ->andFilterWhere(['like', 'spclty', $this->spclty])
            ->andFilterWhere(['like', 'op0', $this->op0])
            ->andFilterWhere(['like', 'op1', $this->op1])
            ->andFilterWhere(['like', 'op2', $this->op2])
            ->andFilterWhere(['like', 'op3', $this->op3])
            ->andFilterWhere(['like', 'op4', $this->op4])
            ->andFilterWhere(['like', 'op5', $this->op5])
            ->andFilterWhere(['like', 'rcp_no', $this->rcp_no])
            ->andFilterWhere(['like', 'print_done', $this->print_done])
            ->andFilterWhere(['like', 'pttype_in_region', $this->pttype_in_region])
            ->andFilterWhere(['like', 'pttype_in_chwpart', $this->pttype_in_chwpart])
            ->andFilterWhere(['like', 'pcode', $this->pcode])
            ->andFilterWhere(['like', 'hcode', $this->hcode])
            ->andFilterWhere(['like', 'hospmain', $this->hospmain])
            ->andFilterWhere(['like', 'hospsub', $this->hospsub])
            ->andFilterWhere(['like', 'pttypeno', $this->pttypeno])
            ->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'main_pdx', $this->main_pdx])
            ->andFilterWhere(['like', 'rcpno_list', $this->rcpno_list])
            ->andFilterWhere(['like', 'ym', $this->ym])
            ->andFilterWhere(['like', 'node_id', $this->node_id])
            ->andFilterWhere(['like', 'ill_visit', $this->ill_visit])
            ->andFilterWhere(['like', 'old_diagnosis', $this->old_diagnosis])
            ->andFilterWhere(['like', 'debt_id_list', $this->debt_id_list])
            ->andFilterWhere(['like', 'vn_guid', $this->vn_guid])
            ->andFilterWhere(['like', 'lastvisit_vn', $this->lastvisit_vn])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->orderBy('`vstdate` DESC ');
        return $dataProvider;
    }
}
