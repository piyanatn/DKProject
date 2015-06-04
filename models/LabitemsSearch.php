<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Labitems;

/**
 * LabitemsSearch represents the model behind the search form about `app\models\Labitems`.
 */
class LabitemsSearch extends Labitems
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lab_items_code', 'lab_type_code', 'lab_items_group', 'lab_items_sub_group_code', 'specimen_code', 'wait_hour', 'display_order', 'result_type', 'memo_line_count', 'check_history_day'], 'integer'],
            [['lab_items_name', 'lab_items_unit', 'lab_items_normal_value', 'lab_items_hint', 'lab_items_default_value', 'possible_value', 'lab_routine', 'icode', 'require_specimen', 'critical_value', 'ecode', 'check_user', 'sub_group_list', 'range_check', 'lab_items_code_guid', 'oldcode', 'items_is_outlab', 'hos_guid', 'report_edit_style', 'alert_critical_value', 'confirm_order_text', 'loinc_code', 'check_result_by_age', 'check_history', 'lab_items_display_name'], 'safe'],
            [['service_price', 'service_price2', 'service_price3', 'service_price_ipd', 'service_price_ipd2', 'service_price_ipd3', 'range_check_min', 'range_check_max', 'range_check_min_female', 'range_check_max_female', 'service_cost', 'critical_range_min_male', 'critical_range_min_female', 'critical_range_max_male', 'critical_range_max_female'], 'number'],
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
        $query = Labitems::find();

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
            'lab_items_code' => $this->lab_items_code,
            'lab_type_code' => $this->lab_type_code,
            'lab_items_group' => $this->lab_items_group,
            'service_price' => $this->service_price,
            'lab_items_sub_group_code' => $this->lab_items_sub_group_code,
            'specimen_code' => $this->specimen_code,
            'wait_hour' => $this->wait_hour,
            'display_order' => $this->display_order,
            'service_price2' => $this->service_price2,
            'service_price3' => $this->service_price3,
            'service_price_ipd' => $this->service_price_ipd,
            'service_price_ipd2' => $this->service_price_ipd2,
            'service_price_ipd3' => $this->service_price_ipd3,
            'range_check_min' => $this->range_check_min,
            'range_check_max' => $this->range_check_max,
            'result_type' => $this->result_type,
            'range_check_min_female' => $this->range_check_min_female,
            'range_check_max_female' => $this->range_check_max_female,
            'service_cost' => $this->service_cost,
            'memo_line_count' => $this->memo_line_count,
            'critical_range_min_male' => $this->critical_range_min_male,
            'critical_range_min_female' => $this->critical_range_min_female,
            'critical_range_max_male' => $this->critical_range_max_male,
            'critical_range_max_female' => $this->critical_range_max_female,
            'check_history_day' => $this->check_history_day,
        ]);

        $query->andFilterWhere(['like', 'lab_items_name', $this->lab_items_name])
            ->andFilterWhere(['like', 'lab_items_unit', $this->lab_items_unit])
            ->andFilterWhere(['like', 'lab_items_normal_value', $this->lab_items_normal_value])
            ->andFilterWhere(['like', 'lab_items_hint', $this->lab_items_hint])
            ->andFilterWhere(['like', 'lab_items_default_value', $this->lab_items_default_value])
            ->andFilterWhere(['like', 'possible_value', $this->possible_value])
            ->andFilterWhere(['like', 'lab_routine', $this->lab_routine])
            ->andFilterWhere(['like', 'icode', $this->icode])
            ->andFilterWhere(['like', 'require_specimen', $this->require_specimen])
            ->andFilterWhere(['like', 'critical_value', $this->critical_value])
            ->andFilterWhere(['like', 'ecode', $this->ecode])
            ->andFilterWhere(['like', 'check_user', $this->check_user])
            ->andFilterWhere(['like', 'sub_group_list', $this->sub_group_list])
            ->andFilterWhere(['like', 'range_check', $this->range_check])
            ->andFilterWhere(['like', 'lab_items_code_guid', $this->lab_items_code_guid])
            ->andFilterWhere(['like', 'oldcode', $this->oldcode])
            ->andFilterWhere(['like', 'items_is_outlab', $this->items_is_outlab])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'report_edit_style', $this->report_edit_style])
            ->andFilterWhere(['like', 'alert_critical_value', $this->alert_critical_value])
            ->andFilterWhere(['like', 'confirm_order_text', $this->confirm_order_text])
            ->andFilterWhere(['like', 'loinc_code', $this->loinc_code])
            ->andFilterWhere(['like', 'check_result_by_age', $this->check_result_by_age])
            ->andFilterWhere(['like', 'check_history', $this->check_history])
            ->andFilterWhere(['like', 'lab_items_display_name', $this->lab_items_display_name]);

        return $dataProvider;
    }
}
