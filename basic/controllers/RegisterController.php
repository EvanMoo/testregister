<?php
namespace app\controllers;

use Yii;
use app\models\Register;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class RegisterController extends Controller
{
    public function actionView()
    {	
		$dataProvider = new ActiveDataProvider(
		[
            'query' => Register::find()->orderBy('dateCreation DESC'),
            'pagination' => 
			[
                'pageSize' => 5,
            ],
		]);
			
		return $this->render('view', ['registerDataProvider' => $dataProvider]); 
    }

    public function actionCreate()
    {
        $model = new Register;
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
		{
			return $this->redirect(['confirmation']);
        } 
		else 
		{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
	
	public function actionConfirmation()
    {
        $model = new Register;
		
        return $this->render('confirmation', [
                'model' => $model,
            ]);
    }
}
?>