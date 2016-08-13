<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "globe".
 *
 * @property integer $g_id
 * @property integer $co_id
 * @property integer $ci_id
 * @property integer $a_id
 *
 * @property Countries $co
 * @property Cities $ci
 * @property Areas $a
 */
class Globe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'globe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['co_id', 'ci_id', 'a_id'], 'integer'],
            [['co_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['co_id' => 'co_id']],
            [['ci_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['ci_id' => 'ci_id']],
            [['a_id'], 'exist', 'skipOnError' => true, 'targetClass' => Areas::className(), 'targetAttribute' => ['a_id' => 'a_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'co_id' => 'Co ID',
            'ci_id' => 'Ci ID',
            'a_id' => 'A ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCo()
    {
        return $this->hasOne(Countries::className(), ['co_id' => 'co_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCi()
    {
        return $this->hasOne(Cities::className(), ['ci_id' => 'ci_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getA()
    {
        return $this->hasOne(Areas::className(), ['a_id' => 'a_id']);
    }
}
