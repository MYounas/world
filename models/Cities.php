<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property integer $ci_id
 * @property string $ci_name
 * @property string $ci_description
 * @property integer $co_id
 *
 * @property Areas[] $areas
 * @property Countries $co
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ci_description'], 'string'],
            [['co_id'], 'integer'],
            [['ci_name'], 'string', 'max' => 25],
            [['co_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['co_id' => 'co_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ci_id' => 'Ci ID',
            'ci_name' => 'Ci Name',
            'ci_description' => 'Ci Description',
            'co_id' => 'Co ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreas()
    {
        return $this->hasMany(Areas::className(), ['ci_id' => 'ci_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCo()
    {
        return $this->hasOne(Countries::className(), ['co_id' => 'co_id']);
    }
}
