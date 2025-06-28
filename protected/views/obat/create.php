<?php
$this->breadcrumbs=array(
	'Obat'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Create Obat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>