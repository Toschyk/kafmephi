<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Students".
 *
 * @property int $Id
 * @property string $Name
 * @property int $GroupId
 *
 * @property Groups $group
 * @property Performance[] $performances
 * @property StudentGrades[] $studentGrades
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'GroupId'], 'required'],
            [['GroupId'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['GroupId'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::class, 'targetAttribute' => ['GroupId' => 'Id']],
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
            'GroupId' => 'Group ID',
        ];
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::class, ['Id' => 'GroupId']);
    }

    /**
     * Gets query for [[Performances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performance::class, ['StudentId' => 'Id']);
    }

    /**
     * Gets query for [[StudentGrades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentGrades()
    {
        return $this->hasMany(StudentGrades::class, ['StudentId' => 'Id']);
    }
}
