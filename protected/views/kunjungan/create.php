<?php
$this->breadcrumbs=array(
	'Kunjungan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kunjungan', 'url'=>array('index')),
	array('label'=>'Manage Kunjungan', 'url'=>array('admin')),
);
?>

<h1>Create Kunjungan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>