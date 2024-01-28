<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $EmployeeID
 * @property string $FirstName
 * @property string $LastName
 * @property string $Position
 * @property string|null $Department
 *
 * @property Reports[] $reports
 * @property Transactions[] $transactions
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'Position'], 'required'],
            [['FirstName', 'LastName', 'Position', 'Department'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmployeeID' => 'Employee ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'Position' => 'Position',
            'Department' => 'Department',
        ];
    }

    /**
     * Gets query for [[Reports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Reports::class, ['EmployeeID' => 'EmployeeID']);
    }

    /**
     * Gets query for [[Transactions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transactions::class, ['EmployeeID' => 'EmployeeID']);
    }
}
