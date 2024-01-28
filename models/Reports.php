<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reports".
 *
 * @property int $ReportID
 * @property string $Title
 * @property string $CreationDate
 * @property int $EmployeeID
 * @property string $Status
 *
 * @property Employees $employee
 */
class Reports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'CreationDate', 'EmployeeID', 'Status'], 'required'],
            [['CreationDate'], 'safe'],
            [['EmployeeID'], 'integer'],
            [['Title'], 'string', 'max' => 255],
            [['Status'], 'string', 'max' => 100],
            [['EmployeeID'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::class, 'targetAttribute' => ['EmployeeID' => 'EmployeeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ReportID' => 'Report ID',
            'Title' => 'Title',
            'CreationDate' => 'Creation Date',
            'EmployeeID' => 'Employee ID',
            'Status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Employee]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employees::class, ['EmployeeID' => 'EmployeeID']);
    }
}
