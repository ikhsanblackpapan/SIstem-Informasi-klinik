<?php
$this->breadcrumbs=array(
	'Kunjungan'=>array('index'),
	$model->id_kunjungan=>array('view','id'=>$model->id_kunjungan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kunjungan', 'url'=>array('index')),
	array('label'=>'Create Kunjungan', 'url'=>array('create')),
	array('label'=>'View Kunjungan', 'url'=>array('view', 'id'=>$model->id_kunjungan)),
	array('label'=>'Manage Kunjungan', 'url'=>array('admin')),
);
?>

<h1>Update Kunjungan <?php echo $model->id_kunjungan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>