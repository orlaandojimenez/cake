<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('PeliculaPremio'); ?>
	<fieldset>
		<legend><?php echo __('Add Pelicula Premio'); ?></legend>
	<?php
		echo $this->Form->input('pelicula_id',array('class' => 'form-control','label' => 'Pelicula'));
		echo $this->Form->input('nombre',array('class' => 'form-control','label' => 'Nombre'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>