<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $name
 * @property string $comments
 * @property string|null $date
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'comments'], 'required'],
            [['date'], 'safe'],
            [['name', 'comments'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ваше имя',
            'comments' => 'Ваш комментарий',
            'date' => 'Date',
        ];
    }

    public function getComment()
    {
        return $this->hasMany(Comments::className(), ['id']);
    }

    public function saveComment()
    {
        $this->date = new \yii\db\Expression('NOW()');
        return $this->save();
    }
}
