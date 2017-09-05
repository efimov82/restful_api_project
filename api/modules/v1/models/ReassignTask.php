<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Tasks assignments model
 */
class ReassignTask extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tasks_assignments';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

}
