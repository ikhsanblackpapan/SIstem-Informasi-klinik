<?php
$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	$model->id_pegawai=>array('view','id'=>$model->id_pegawai),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'View Pegawai', 'url'=>array('view', 'id'=>$model->id_pegawai)),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Update Pegawai <?php echo $model->id_pegawai; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>