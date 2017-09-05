<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Project
 */
class Project extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'projects';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

}
