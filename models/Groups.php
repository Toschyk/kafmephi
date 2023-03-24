<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Groups".
 *
 * @property int $Id
 * @property string $Name
 * @property int $DepartmentId
 *
 * @property Departments $department
 * @property Students[] $students
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'DepartmentId'], 'required'],
            [['DepartmentId'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['DepartmentId'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::class, 'targetAttribute' => ['DepartmentId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'DepartmentId' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Departments::class, ['Id' => 'DepartmentId']);
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::class, ['GroupId' => 'Id']);
    }
}
