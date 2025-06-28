<?php
$this->breadcrumbs=array(
	'Reseps'=>array('index'),
	$model->id_resep=>array('view','id'=>$model->id_resep),
	'Update',
);

$this->menu=array(
	array('label'=>'List Resep', 'url'=>array('index')),
	array('label'=>'Create Resep', 'url'=>array('create')),
	array('label'=>'View Resep', 'url'=>array('view', 'id'=>$model->id_resep)),
	array('label'=>'Manage Resep', 'url'=>array('admin')),
);
?>

<h1>Update Resep <?php echo $model->id_resep; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>