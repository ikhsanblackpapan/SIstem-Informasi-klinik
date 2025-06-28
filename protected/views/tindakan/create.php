<?php
$this->breadcrumbs=array(
	'Tindakan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tindakan', 'url'=>array('index')),
	array('label'=>'Manage Tindakan', 'url'=>array('admin')),
);
?>

<h1>Create Tindakan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>