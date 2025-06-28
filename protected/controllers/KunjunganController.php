<?php

class KunjunganController extends Controller
{
	/**
	 * // filepath: [KunjunganController.php](http://_vscodecontentref_/1)
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
public function accessRules()
{
    return array(
        // Admin dan dokter: akses penuh
        array('allow',
            'users'=>array('@'),
            'expression'=>'Yii::app()->user->getState("role") === User::ROLE_ADMIN || Yii::app()->user->getState("role") === User::ROLE_DOKTER',
        ),
        // Petugas: akses index, create, update, view
        array('allow',
            'actions'=>array('index','create','update','view'),
            'users'=>array('@'),
            'expression'=>'Yii::app()->user->getState("role") === User::ROLE_PETUGAS',
        ),
        // Pasien: hanya index
        array('allow',
            'actions'=>array('index'),
            'users'=>array('@'),
            'expression'=>'Yii::app()->user->getState("role") === User::ROLE_PASIEN',
        ),
        array('deny',  // deny all users
            'users'=>array('*'),
        ),
    );
} // <-- tambah

	public function actionTambahTindakan($id)
{
    $model = $this->loadModel($id);
    if(isset($_POST['id_tindakan'])){
        $tk = new TindakanKunjungan;
        $tk->id_kunjungan = $model->id_kunjungan;
        $tk->id_tindakan = $_POST['id_tindakan'];
        $tk->keterangan = $_POST['keterangan'];
        $tk->save();
    }
    $this->redirect(array('view','id'=>$id));
}

public function actionHapusTindakan($id)
{
    $tk = TindakanKunjungan::model()->findByPk($id);
    $idKunjungan = $tk->id_kunjungan;
    $tk->delete();
    $this->redirect(array('view','id'=>$idKunjungan));
}

public function actionTambahObat($id)
{
    $model = $this->loadModel($id);
    if(isset($_POST['id_obat'], $_POST['jumlah'])){
        $ok = new ObatKunjungan;
        $ok->id_kunjungan = $model->id_kunjungan;
        $ok->id_obat = $_POST['id_obat'];
        $ok->jumlah = $_POST['jumlah'];
        $ok->keterangan = $_POST['keterangan'];
        $ok->save();
    }
    $this->redirect(array('view','id'=>$id));
}

public function actionHapusObat($id)
{
    $ok = ObatKunjungan::model()->findByPk($id);
    $idKunjungan = $ok->id_kunjungan;
    $ok->delete();
    $this->redirect(array('view','id'=>$idKunjungan));
}


}




	/**
	 * Displays a particular model.
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Kunjungan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kunjungan']))
		{
			$model->attributes=$_POST['Kunjungan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_kunjungan));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kunjungan']))
		{
			$model->attributes=$_POST['Kunjungan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_kunjungan));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Kunjungan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kunjungan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kunjungan']))
			$model->attributes=$_GET['Kunjungan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Kunjungan::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kunjungan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
