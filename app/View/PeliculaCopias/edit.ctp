<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('PeliculaCopia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pelicula Copia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pelicula_id',array('class' => 'form-control','label' => 'Pelicula'));
		echo $this->Form->input('formato',array('class' => 'form-control','label' => 'Formato'));
		echo $this->Form->input('condicion',array('class' => 'form-control','label' => 'Condicion'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
