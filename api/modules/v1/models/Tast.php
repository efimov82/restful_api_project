<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Task Project
 */
class Task extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tasks';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

}
