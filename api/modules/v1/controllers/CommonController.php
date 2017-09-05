<?php

use yii\rest\ActiveController;
use api\modules\v1\models\User;

class CommonController extends ActiveController {

  public function behaviors()
  {
      $behaviors = parent::behaviors();
      $behaviors['authenticator'] = [
          'class' => HttpBasicAuth::className(),
          'auth' => [$this, 'auth']
      ];
      return $behaviors;
  }

  public function auth($username, $password)
  {
      return User::findOne(['username' => $username, 'password' => $password]);
  }
}
