<?php
$this->breadcrumbs=array(
	'Petugas Pendaftarans'=>array('index'),
	$model->id_petugas=>array('view','id'=>$model->id_petugas),
	'Update',
);

$this->menu=array(
	array('label'=>'List PetugasPendaftaran', 'url'=>array('index')),
	array('label'=>'Create PetugasPendaftaran', 'url'=>array('create')),
	array('label'=>'View PetugasPendaftaran', 'url'=>array('view', 'id'=>$model->id_petugas)),
	array('label'=>'Manage PetugasPendaftaran', 'url'=>array('admin')),
);
?>

<h1>Update PetugasPendaftaran <?php echo $model->id_petugas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>