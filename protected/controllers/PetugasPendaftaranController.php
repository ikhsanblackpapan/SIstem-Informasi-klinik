<?php

class PetugasPendaftaranController extends Controller
{
    public $layout = '//layouts/column2';

    public function filters()
    {
        return array('accessControl');
    }

    public function accessRules()
    {
          return array(
        // Admin akses penuh
        array('allow',
            'users'=>array('@'),
            'expression'=>'Yii::app()->user->getState("role") === User::ROLE_ADMIN',
        ),
        // Petugas boleh akses index, view, create, update
        array('allow',
    'actions'=>array('index','view','create','update'),
    'users'=>array('@'),
    'expression'=>'Yii::app()->user->getState("role") === User::ROLE_PETUGAS',
),
        // Role lain (misal pasien, dokter, dsb) tambahkan sesuai kebutuhan
        array('deny',
            'users'=>array('*'),
        ),
    );
    }

    public function actionView($id)
    {
        $this->render('view', array(
            'model'=>$this->loadModel($id),
        ));
    }

    public function actionCreate()
    {
        $model = new PetugasPendaftaran;

        if(isset($_POST['PetugasPendaftaran']))
        {
            $model->attributes = $_POST['PetugasPendaftaran'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id_petugas));
        }

        $this->render('create', array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if(isset($_POST['PetugasPendaftaran']))
        {
            $model->attributes = $_POST['PetugasPendaftaran'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id_petugas));
        }

        $this->render('update', array(
            'model'=>$model,
        ));
    }

    public function actionDelete($id)
    {
        if(Yii::app()->request->isPostRequest)
        {
            $this->loadModel($id)->delete();
            if(!isset($_GET['ajax']))
                $this->redirect(array('index'));
        }
        else
            throw new CHttpException(400,'Invalid request.');
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('PetugasPendaftaran');
        $this->render('index', array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new PetugasPendaftaran('search');
        $model->unsetAttributes();
        if(isset($_GET['PetugasPendaftaran']))
            $model->attributes = $_GET['PetugasPendaftaran'];

        $this->render('admin', array(
            'model'=>$model,
        ));
    }

    public function loadModel($id)
    {
        $model = PetugasPendaftaran::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}