<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opdscreen".
 *
 * @property string $hos_guid
 * @property string $vn
 * @property string $hn
 * @property string $vstdate
 * @property string $vsttime
 * @property string $begintime
 * @property string $outtime
 * @property string $endtime
 * @property double $bpd
 * @property double $bps
 * @property double $bw
 * @property string $cc
 * @property double $hr
 * @property string $pe
 * @property double $pulse
 * @property double $temperature
 * @property string $note
 * @property double $rr
 * @property string $cc_begin_date
 * @property string $cc_cause_of_visit
 * @property string $cc_sign
 * @property string $cc_duration
 * @property string $cc_position
 * @property string $cc_note
 * @property string $his_begin_date
 * @property string $his_frequency
 * @property string $his_severity
 * @property string $his_cause
 * @property string $his_expand
 * @property string $his_cause_increase
 * @property string $his_cause_decrease
 * @property string $his_related_sign
 * @property integer $height
 * @property string $screen_dep
 * @property string $waiting
 * @property double $fbs
 * @property string $help1
 * @property string $help2
 * @property string $help3
 * @property string $help4
 * @property string $help1_time
 * @property integer $help1_bps
 * @property integer $help1_bpd
 * @property string $help2_time
 * @property double $help2_temp
 * @property string $help3_icode
 * @property string $help3_time
 * @property integer $help3_qty
 * @property string $help4_note
 * @property string $advice1
 * @property string $advice2
 * @property string $advice3
 * @property string $advice4
 * @property string $advice5
 * @property string $advice6
 * @property string $advice7
 * @property string $cradle
 * @property string $pe_ga
 * @property string $pe_heent
 * @property string $pe_heart
 * @property string $pe_lung
 * @property string $pe_ab
 * @property string $pe_ext
 * @property string $pe_neuro
 * @property string $pe_ga_text
 * @property string $pe_heent_text
 * @property string $pe_heart_text
 * @property string $pe_lung_text
 * @property string $pe_ab_text
 * @property string $pe_neuro_text
 * @property string $pe_ext_text
 * @property double $bmi
 * @property double $tg
 * @property double $hdl
 * @property string $glucurine
 * @property string $blank1
 * @property double $bun
 * @property double $creatinine
 * @property double $ua
 * @property double $hba1c
 * @property string $riskdm
 * @property string $skin_color
 * @property string $found_amphetamine
 * @property string $pregnancy
 * @property string $advice7_note
 * @property string $checkup
 * @property string $er_note
 * @property string $found_allergy
 * @property string $hpi
 * @property string $pmh
 * @property string $fh
 * @property string $sh
 * @property string $ros
 * @property double $tc
 * @property double $ldl
 * @property double $ast
 * @property double $alt
 * @property string $symptom
 * @property integer $walk_id
 * @property integer $peak_flow
 * @property double $cholesterol
 * @property double $waist
 * @property string $advice8
 * @property string $breast_feeding
 * @property string $cradle_lie
 * @property integer $pain_score
 * @property integer $pefr
 * @property integer $opdscreen_patient_type_id
 * @property double $creatinine_kidney_percent
 * @property double $sodium
 * @property double $chloride
 * @property double $potassium
 * @property double $tco2
 * @property integer $smoking_type_id
 * @property integer $drinking_type_id
 * @property integer $pulse_regulation_type_id
 * @property double $spo2
 * @property double $urine_albumin
 * @property double $urine_creatinine
 * @property double $pefr_percent
 * @property integer $macro_albumin
 * @property integer $micro_albumin
 * @property double $egfr
 * @property double $hb
 * @property double $upcr
 * @property double $bicarb
 * @property double $phosphate
 * @property double $pth
 * @property string $pe_gy
 * @property string $pe_gy_text
 * @property string $pe_gu
 * @property string $pe_gu_text
 * @property string $pe_gi
 * @property string $pe_gi_text
 * @property double $bsa
 * @property string $pe_head
 * @property string $pe_head_text
 * @property string $pe_skin
 * @property string $pe_skin_text
 * @property string $g6pd
 * @property string $pe_rtf
 * @property double $nan
 * @property integer $o2sat
 */
class Opdscreen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'opdscreen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hos_guid'], 'required'],
            [['vstdate', 'vsttime', 'begintime', 'outtime', 'endtime', 'cc_begin_date', 'his_begin_date', 'help1_time', 'help2_time', 'help3_time'], 'safe'],
            [['bpd', 'bps', 'bw', 'hr', 'pulse', 'temperature', 'rr', 'fbs', 'help2_temp', 'bmi', 'tg', 'hdl', 'bun', 'creatinine', 'ua', 'hba1c', 'tc', 'ldl', 'ast', 'alt', 'cholesterol', 'waist', 'creatinine_kidney_percent', 'sodium', 'chloride', 'potassium', 'tco2', 'spo2', 'urine_albumin', 'urine_creatinine', 'pefr_percent', 'egfr', 'hb', 'upcr', 'bicarb', 'phosphate', 'pth', 'bsa', 'nan'], 'number'],
            [['cc', 'pe', 'note', 'cc_note', 'help4_note', 'er_note', 'hpi', 'pmh', 'fh', 'sh', 'ros', 'pe_rtf'], 'string'],
            [['height', 'help1_bps', 'help1_bpd', 'help3_qty', 'walk_id', 'peak_flow', 'pain_score', 'pefr', 'opdscreen_patient_type_id', 'smoking_type_id', 'drinking_type_id', 'pulse_regulation_type_id', 'macro_albumin', 'micro_albumin', 'o2sat'], 'integer'],
            [['hos_guid'], 'string', 'max' => 38],
            [['vn'], 'string', 'max' => 13],
            [['hn'], 'string', 'max' => 9],
            [['cc_cause_of_visit', 'cc_sign', 'cc_position', 'his_frequency', 'his_severity', 'his_cause', 'his_expand', 'his_cause_increase', 'his_cause_decrease', 'his_related_sign', 'advice7_note'], 'string', 'max' => 250],
            [['cc_duration', 'pe_ga_text', 'pe_heent_text', 'pe_heart_text', 'pe_lung_text', 'pe_ab_text', 'pe_neuro_text', 'pe_ext_text'], 'string', 'max' => 150],
            [['screen_dep'], 'string', 'max' => 3],
            [['waiting', 'help1', 'help2', 'help3', 'help4', 'advice1', 'advice2', 'advice3', 'advice4', 'advice5', 'advice6', 'advice7', 'cradle', 'pe_ga', 'pe_heent', 'pe_heart', 'pe_lung', 'pe_ab', 'pe_ext', 'pe_neuro', 'glucurine', 'blank1', 'riskdm', 'found_amphetamine', 'pregnancy', 'checkup', 'found_allergy', 'advice8', 'breast_feeding', 'cradle_lie', 'pe_gy', 'pe_gu', 'pe_gi', 'pe_head', 'pe_skin', 'g6pd'], 'string', 'max' => 1],
            [['help3_icode', 'pe_gy_text', 'pe_gu_text', 'pe_gi_text', 'pe_head_text', 'pe_skin_text'], 'string', 'max' => 100],
            [['skin_color'], 'string', 'max' => 20],
            [['symptom'], 'string', 'max' => 200],
            [['vn'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hos_guid' => 'Hos Guid',
            'vn' => 'Vn',
            'hn' => 'Hn',
            'vstdate' => 'Vstdate',
            'vsttime' => 'Vsttime',
            'begintime' => 'Begintime',
            'outtime' => 'Outtime',
            'endtime' => 'Endtime',
            'bpd' => 'Bpd',
            'bps' => 'Bps',
            'bw' => 'Bw',
            'cc' => 'Cc',
            'hr' => 'Hr',
            'pe' => 'Pe',
            'pulse' => 'Pulse',
            'temperature' => 'Temperature',
            'note' => 'Note',
            'rr' => 'Rr',
            'cc_begin_date' => 'Cc Begin Date',
            'cc_cause_of_visit' => 'Cc Cause Of Visit',
            'cc_sign' => 'Cc Sign',
            'cc_duration' => 'Cc Duration',
            'cc_position' => 'Cc Position',
            'cc_note' => 'Cc Note',
            'his_begin_date' => 'His Begin Date',
            'his_frequency' => 'His Frequency',
            'his_severity' => 'His Severity',
            'his_cause' => 'His Cause',
            'his_expand' => 'His Expand',
            'his_cause_increase' => 'His Cause Increase',
            'his_cause_decrease' => 'His Cause Decrease',
            'his_related_sign' => 'His Related Sign',
            'height' => 'Height',
            'screen_dep' => 'Screen Dep',
            'waiting' => 'Waiting',
            'fbs' => 'Fbs',
            'help1' => 'Help1',
            'help2' => 'Help2',
            'help3' => 'Help3',
            'help4' => 'Help4',
            'help1_time' => 'Help1 Time',
            'help1_bps' => 'Help1 Bps',
            'help1_bpd' => 'Help1 Bpd',
            'help2_time' => 'Help2 Time',
            'help2_temp' => 'Help2 Temp',
            'help3_icode' => 'Help3 Icode',
            'help3_time' => 'Help3 Time',
            'help3_qty' => 'Help3 Qty',
            'help4_note' => 'Help4 Note',
            'advice1' => 'Advice1',
            'advice2' => 'Advice2',
            'advice3' => 'Advice3',
            'advice4' => 'Advice4',
            'advice5' => 'Advice5',
            'advice6' => 'Advice6',
            'advice7' => 'Advice7',
            'cradle' => 'Cradle',
            'pe_ga' => 'Pe Ga',
            'pe_heent' => 'Pe Heent',
            'pe_heart' => 'Pe Heart',
            'pe_lung' => 'Pe Lung',
            'pe_ab' => 'Pe Ab',
            'pe_ext' => 'Pe Ext',
            'pe_neuro' => 'Pe Neuro',
            'pe_ga_text' => 'Pe Ga Text',
            'pe_heent_text' => 'Pe Heent Text',
            'pe_heart_text' => 'Pe Heart Text',
            'pe_lung_text' => 'Pe Lung Text',
            'pe_ab_text' => 'Pe Ab Text',
            'pe_neuro_text' => 'Pe Neuro Text',
            'pe_ext_text' => 'Pe Ext Text',
            'bmi' => 'Bmi',
            'tg' => 'Tg',
            'hdl' => 'Hdl',
            'glucurine' => 'Glucurine',
            'blank1' => 'Blank1',
            'bun' => 'Bun',
            'creatinine' => 'Creatinine',
            'ua' => 'Ua',
            'hba1c' => 'Hba1c',
            'riskdm' => 'Riskdm',
            'skin_color' => 'Skin Color',
            'found_amphetamine' => 'Found Amphetamine',
            'pregnancy' => 'Pregnancy',
            'advice7_note' => 'Advice7 Note',
            'checkup' => 'Checkup',
            'er_note' => 'Er Note',
            'found_allergy' => 'Found Allergy',
            'hpi' => 'Hpi',
            'pmh' => 'Pmh',
            'fh' => 'Fh',
            'sh' => 'Sh',
            'ros' => 'Ros',
            'tc' => 'Tc',
            'ldl' => 'Ldl',
            'ast' => 'Ast',
            'alt' => 'Alt',
            'symptom' => 'Symptom',
            'walk_id' => 'Walk ID',
            'peak_flow' => 'Peak Flow',
            'cholesterol' => 'Cholesterol',
            'waist' => 'Waist',
            'advice8' => 'Advice8',
            'breast_feeding' => 'Breast Feeding',
            'cradle_lie' => 'Cradle Lie',
            'pain_score' => 'Pain Score',
            'pefr' => 'Pefr',
            'opdscreen_patient_type_id' => 'Opdscreen Patient Type ID',
            'creatinine_kidney_percent' => 'Creatinine Kidney Percent',
            'sodium' => 'Sodium',
            'chloride' => 'Chloride',
            'potassium' => 'Potassium',
            'tco2' => 'Tco2',
            'smoking_type_id' => 'Smoking Type ID',
            'drinking_type_id' => 'Drinking Type ID',
            'pulse_regulation_type_id' => 'Pulse Regulation Type ID',
            'spo2' => 'Spo2',
            'urine_albumin' => 'Urine Albumin',
            'urine_creatinine' => 'Urine Creatinine',
            'pefr_percent' => 'Pefr Percent',
            'macro_albumin' => 'Macro Albumin',
            'micro_albumin' => 'Micro Albumin',
            'egfr' => 'Egfr',
            'hb' => 'Hb',
            'upcr' => 'Upcr',
            'bicarb' => 'Bicarb',
            'phosphate' => 'Phosphate',
            'pth' => 'Pth',
            'pe_gy' => 'Pe Gy',
            'pe_gy_text' => 'Pe Gy Text',
            'pe_gu' => 'Pe Gu',
            'pe_gu_text' => 'Pe Gu Text',
            'pe_gi' => 'Pe Gi',
            'pe_gi_text' => 'Pe Gi Text',
            'bsa' => 'Bsa',
            'pe_head' => 'Pe Head',
            'pe_head_text' => 'Pe Head Text',
            'pe_skin' => 'Pe Skin',
            'pe_skin_text' => 'Pe Skin Text',
            'g6pd' => 'G6pd',
            'pe_rtf' => 'Pe Rtf',
            'nan' => 'Nan',
            'o2sat' => 'O2sat',
        ];
    }

    /**
     * @inheritdoc
     * @return OpdscreenQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OpdscreenQuery(get_called_class());
    }
}
