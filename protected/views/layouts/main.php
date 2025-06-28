<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
</head>
<body>
<div class="container" id="page">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
            </div>
            <ul class="nav navbar-nav">
                <li><?php echo CHtml::link('Home', array('/site/index')); ?></li>
                <li><?php echo CHtml::link('About', array('/site/page', 'view'=>'about')); ?></li>
                <li><?php echo CHtml::link('Contact', array('/site/contact')); ?></li>
                <?php

Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/jquery-ui.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-ui.min.js', CClientScript::POS_END);



                // Menu dinamis sesuai role
                if (!Yii::app()->user->isGuest) {
                    $role = Yii::app()->user->getState('role');
                    if ($role === User::ROLE_ADMIN) {
                        echo '<li>' . CHtml::link('Manajemen User', array('/user/admin')) . '</li>';
                        echo '<li>' . CHtml::link('Wilayah', array('/wilayah/index')) . '</li>';
                        echo '<li>' . CHtml::link('Pegawai', array('/pegawai/index')) . '</li>';
                    }
                    if ($role === User::ROLE_DOKTER) {
                        echo '<li>' . CHtml::link('Kunjungan', array('/kunjungan/index')) . '</li>';
                        echo '<li>' . CHtml::link('Laporan', array('/laporan/index')) . '</li>';
                    }
                    if ($role === User::ROLE_APOTEKER) {
                        echo '<li>' . CHtml::link('Obat', array('/obat/index')) . '</li>';
                    }
                    if ($role === User::ROLE_KASIR) {
                        echo '<li>' . CHtml::link('Pembayaran', array('/pembayaran/index')) . '</li>';
                    }
                   if ($role === User::ROLE_PASIEN) {
    $pasien = Pasien::model()->findByAttributes(['id_user' => Yii::app()->user->id]);
    if ($pasien) {
        echo '<li>' . CHtml::link('Profil', array('/pasien/view', 'id'=>$pasien->id_pasien)) . '</li>';
        echo '<li>' . CHtml::link('Kunjungan Saya', array('/kunjungan/index')) . '</li>';
    }    
}

if ($role === User::ROLE_PETUGAS) {
    echo '<li>' . CHtml::link('Pendaftaran Pasien', array('/pasien/index')) . '</li>';
    echo '<li>' . CHtml::link('Kunjungan', array('/kunjungan/index')) . '</li>';
    echo '<li>' . CHtml::link('Wilayah', array('/wilayah/index')) . '</li>';
}
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(Yii::app()->user->isGuest): ?>
                    <li><?php echo CHtml::link('Login', array('/site/login')); ?></li>
                <?php else: ?>
                    <li><?php echo CHtml::link('Logout ('.Yii::app()->user->name.')', array('/site/logout')); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?>
    <?php endif?>

    <?php echo $content; ?>

    <footer class="footer text-center" style="margin-top:30px;">
        <hr>
        Copyright &copy; <?php echo date('Y'); ?> by Sistem Informasi Klinik.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </footer>
</div>
</body>
</html>