<?php
/* @var $this LoansController */
/* @var $model EmployeeLoan */

$this->breadcrumbs=array(
	'Employee Loans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmployeeLoan', 'url'=>array('index')),
	array('label'=>'Create EmployeeLoan', 'url'=>array('create')),
	array('label'=>'View EmployeeLoan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmployeeLoan', 'url'=>array('admin')),
);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Update Employee Loan
    </div>
    <div class="panel-body">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>