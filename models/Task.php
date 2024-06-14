<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id 連番
 * @property string $execute_date 実行日
 * @property string $task_title タスクタイトル
 * @property string $task_text タスク内容
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['execute_date', 'task_title', 'task_text'], 'required'],
            [['execute_date'], 'safe'],
            [['task_title', 'task_text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'execute_date' => 'Execute Date',
            'task_title' => 'Task Title',
            'task_text' => 'Task Text',
        ];
    }
}
