<?php
namespace app\controllers;

use Yii;
use app\models\Register;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class RegisterController extends Controller
{
    public function actionView()
    {
        $model = Register::findAll(null);
        if ($model === null) 
		{
            throw new NotFoundHttpException;
        }

        return $this->render('view', [
            'model' => $model,
        ]);
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