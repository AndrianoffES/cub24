<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transactions".
 *
 * @property int $TransactionID
 * @property string $Date
 * @property float $Amount
 * @property string $Type
 * @property string|null $Description
 * @property int $EmployeeID
 *
 * @property Employees $employee
 */
class Transactions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date', 'Amount', 'Type', 'EmployeeID'], 'required'],
            [['Date'], 'safe'],
            [['Amount'], 'number'],
            [['Description'], 'string'],
            [['EmployeeID'], 'integer'],
            [['Type'], 'string', 'max' => 100],
            [['EmployeeID'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::class, 'targetAttribute' => ['EmployeeID' => 'EmployeeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TransactionID' => 'Transaction ID',
            'Date' => 'Date',
            'Amount' => 'Amount',
            'Type' => 'Type',
            'Description' => 'Description',
            'EmployeeID' => 'Employee ID',
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
