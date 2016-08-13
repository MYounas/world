<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property integer $a_id
 * @property string $a_name
 * @property string $a_description
 * @property integer $ci_id
 *
 * @property Cities $ci
 */
class Areas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'areas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_description'], 'string'],
            [['ci_id'], 'integer'],
            [['a_name'], 'string', 'max' => 25],
            [['ci_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['ci_id' => 'ci_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_name' => 'A Name',
            'a_description' => 'A Description',
            'ci_id' => 'Ci ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCi()
    {
        return $this->hasOne(Cities::className(), ['ci_id' => 'ci_id']);
    }
}
