<?php

/**
 * PasienController.php
 * Controller untuk mengelola data pasien.
 * 
 * @package application.controllers
 */

class PasienController extends Controller
{
    public $layout = '//layouts/column2';
    private $_model;

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules()
    {
        return array(
            // Admin: akses penuh
            array('allow',
                'users'=>array('@'),
                'expression'=>'Yii::app()->user->getState("role") === User::ROLE_ADMIN',
            ),
            // Petugas: akses index, view, create, update
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

    public function actionView()
    {
        $model = $this->loadModel();
        // Cek jika pasien, hanya boleh akses data miliknya sendiri
        if (Yii::app()->user->getState("role") === User::ROLE_PASIEN) {
            $pasien = Pasien::model()->findByAttributes(['id_user' => Yii::app()->user->id]);
            if (!$pasien || $model->id_pasien != $pasien->id_pasien) {
                throw new CHttpException(403, 'Anda tidak boleh melihat data pasien lain.');
            }
        }
        $this->render('view', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new Pasien;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Pasien'])) {
            $model->attributes = $_POST['Pasien'];
            if ($model->save()) {
                // Simpan riwayat kunjungan
                $kunjungan = new Kunjungan;
                $kunjungan->id_pasien = $model->id_pasien; // Pastikan ini sesuai PK pasien
                $kunjungan->jenis_kunjungan = $model->jenis_kunjungan;
                $kunjungan->tanggal_kunjungan = date('Y-m-d');
                // ... field lain ...
                $kunjungan->save();

                $this->redirect(array('view', 'id' => $model->id_pasien));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate()
    {
        $model = $this->loadModel();
        // Cek jika pasien, hanya boleh update data miliknya sendiri
        if (Yii::app()->user->getState("role") === User::ROLE_PASIEN) {
            $pasien = Pasien::model()->findByAttributes(['id_user' => Yii::app()->user->id]);
            if (!$pasien || $model->id_pasien != $pasien->id_pasien) {
                throw new CHttpException(403, 'Anda tidak boleh mengubah data pasien lain.');
            }
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Pasien'])) {
            $model->attributes = $_POST['Pasien'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_pasien));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete()
    {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Pasien');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Pasien('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Pasien']))
            $model->attributes = $_GET['Pasien'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel()
    {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Pasien::model()->findByPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'pasien-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}