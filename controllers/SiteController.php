<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\web\UploadedFile;
use app\models\UploadForm;

class SiteController extends Controller
{
	public $layout = 'main';

	
	public function actionIndex($message = 'Привет')
    {
        return $this->render('index', ['message' => $message]);
    }
	
	  public function actionNew($message = 'New')
    {
		$message="New music add to grimey.ru.";
		$model = new UploadForm();
		
        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if (true) {
				   //$file_s=$model->upload();
				   //exit ($model->upload());
			     return $this->render('new', ['success'=>$model->upload()]);
                return;
            }
        }
	  return $this->render('new', ['model'=>$model]);
	
        // return $this->render('new', ['model'=>$model],['new' => $message]);  
		 
		 
	

   } 
   
   
   public function actionUpload()
    {
        
 
        return $this->render('upload', ['model' => $model]);
    }
   
   
    }

	
	
	
	
	
	
	
	
	

