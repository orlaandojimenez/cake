<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('VideojuegoCopia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Videojuego Copia'); ?></legend>
	<?php
		echo $this->Form->input('videojuego_id',array('class' => 'form-control','label' => 'Videojuego'));
		echo $this->Form->input('formato',array('class' => 'form-control','label' => 'Formato'));
		echo $this->Form->input('condicion',array('class' => 'form-control','label' => 'Condicion'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>