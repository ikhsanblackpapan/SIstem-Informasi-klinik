<?php
$this->breadcrumbs=array(
	'Pasien'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Manage Pasien', 'url'=>array('admin')),
);
?>

<h1>Create Pasien</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>