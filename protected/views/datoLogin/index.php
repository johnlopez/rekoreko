<?php
/* @var $this DatoLoginController */

$this->breadcrumbs=array(
	'Dato Login',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm'); ?>
	 
	    <?php echo $form->errorSummary($model); ?>
	 
	    <div class="row">
	        <?php echo $form->label($model,'usuario'); ?>
	        <?php echo $form->textField($model,'usuario') ?>
	    </div>
	 
	    <div class="row">
	        <?php echo $form->label($model,'clave'); ?>
	        <?php echo $form->passwordField($model,'clave') ?>
	    </div>

	    <div class="row submit">
	        <?php echo CHtml::submitButton('Login'); ?>
	    </div>
	 
	<?php $this->endWidget(); ?>
	</div><!-- form -->
</p>
