<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oapp".
 *
 * @property integer $oapp_id
 * @property string $hn
 * @property string $vn
 * @property string $vstdate
 * @property string $nextdate
 * @property string $nexttime
 * @property string $clinic
 * @property string $depcode
 * @property string $doctor
 * @property string $note
 * @property string $spclty
 * @property string $app_user
 * @property string $app_cause
 * @property string $contact_point
 * @property string $note1
 * @property string $note2
 * @property integer $app_no
 * @property string $print_sticker
 * @property string $enddate
 * @property string $endtime
 * @property integer $label_color
 * @property integer $doctor_schedule_id
 * @property string $ward
 * @property string $patient_visit
 * @property string $nexttime_end
 * @property string $next_pttype
 * @property string $visit_vn
 * @property string $oapp_id_guid
 * @property integer $person_vaccine_id
 * @property string $provis_aptype_code
 * @property integer $date_count
 * @property string $an
 * @property string $hos_guid
 * @property string $entry_date
 * @property string $entry_time
 * @property string $operation_appointment
 * @property string $operation_patient_type
 * @property string $operation_note
 * @property string $operation_doctor_code
 * @property string $operation_anes_type
 * @property string $update_datetime
 * @property integer $oapp_status_id
 * @property string $perform_text
 * @property string $lab_list_text
 * @property string $xray_list_text
 * @property integer $clinic_visit_type_id
 */
class Oapp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oapp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oapp_id'], 'required'],
            [['oapp_id', 'app_no', 'label_color', 'doctor_schedule_id', 'person_vaccine_id', 'date_count', 'oapp_status_id', 'clinic_visit_type_id'], 'integer'],
            [['vstdate', 'nextdate', 'nexttime', 'enddate', 'endtime', 'nexttime_end', 'entry_date', 'entry_time', 'update_datetime'], 'safe'],
            [['note1', 'note2', 'perform_text', 'lab_list_text', 'xray_list_text'], 'string'],
            [['hn', 'an'], 'string', 'max' => 9],
            [['vn', 'visit_vn'], 'string', 'max' => 13],
            [['clinic', 'depcode', 'operation_patient_type'], 'string', 'max' => 3],
            [['doctor'], 'string', 'max' => 6],
            [['note', 'operation_note'], 'string', 'max' => 200],
            [['spclty', 'next_pttype'], 'string', 'max' => 2],
            [['app_user'], 'string', 'max' => 150],
            [['app_cause', 'contact_point'], 'string', 'max' => 250],
            [['print_sticker', 'patient_visit', 'operation_appointment'], 'string', 'max' => 1],
            [['ward'], 'string', 'max' => 4],
            [['oapp_id_guid', 'hos_guid'], 'string', 'max' => 38],
            [['provis_aptype_code'], 'string', 'max' => 5],
            [['operation_doctor_code'], 'string', 'max' => 25],
            [['operation_anes_type'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'oapp_id' => 'Oapp ID',
            'hn' => 'Hn',
            'vn' => 'Vn',
            'vstdate' => 'Vstdate',
            'nextdate' => 'Nextdate',
            'nexttime' => 'Nexttime',
            'clinic' => 'Clinic',
            'depcode' => 'Depcode',
            'doctor' => 'Doctor',
            'note' => 'Note',
            'spclty' => 'Spclty',
            'app_user' => 'App User',
            'app_cause' => 'App Cause',
            'contact_point' => 'Contact Point',
            'note1' => 'Note1',
            'note2' => 'Note2',
            'app_no' => 'App No',
            'print_sticker' => 'Print Sticker',
            'enddate' => 'Enddate',
            'endtime' => 'Endtime',
            'label_color' => 'Label Color',
            'doctor_schedule_id' => 'Doctor Schedule ID',
            'ward' => 'Ward',
            'patient_visit' => 'Patient Visit',
            'nexttime_end' => 'Nexttime End',
            'next_pttype' => 'Next Pttype',
            'visit_vn' => 'Visit Vn',
            'oapp_id_guid' => 'Oapp Id Guid',
            'person_vaccine_id' => 'Person Vaccine ID',
            'provis_aptype_code' => 'Provis Aptype Code',
            'date_count' => 'Date Count',
            'an' => 'An',
            'hos_guid' => 'Hos Guid',
            'entry_date' => 'Entry Date',
            'entry_time' => 'Entry Time',
            'operation_appointment' => 'Operation Appointment',
            'operation_patient_type' => 'Operation Patient Type',
            'operation_note' => 'Operation Note',
            'operation_doctor_code' => 'Operation Doctor Code',
            'operation_anes_type' => 'Operation Anes Type',
            'update_datetime' => 'Update Datetime',
            'oapp_status_id' => 'Oapp Status ID',
            'perform_text' => 'Perform Text',
            'lab_list_text' => 'Lab List Text',
            'xray_list_text' => 'Xray List Text',
            'clinic_visit_type_id' => 'Clinic Visit Type ID',
        ];
    }

    /**
     * @inheritdoc
     * @return OappQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OappQuery(get_called_class());
    }
    public function getOappdate()
    {
        if ($this->vn!==null) {
        $thai_month_arr=array(  
            "00"=>"",  
            "01"=>"มกราคม",  
            "02"=>"กุมภาพันธ์",  
            "03"=>"มีนาคม",  
            "04"=>"เมษายน",  
            "05"=>"พฤษภาคม",  
            "06"=>"มิถุนายน",   
            "07"=>"กรกฎาคม",  
            "08"=>"สิงหาคม",  
            "09"=>"กันยายน",  
            "10"=>"ตุลาคม",  
            "11"=>"พฤศจิกายน",  
            "12"=>"ธันวาคม"                    
        );  
       return substr($this->nextdate,-2,2)."-".$thai_month_arr[substr($this->nextdate,-5,2)]."-".(substr($this->nextdate,0,4)+543);
        }
        
    }
}
