<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('CopiaPlataforma'); ?>
	<fieldset>
		<legend><?php echo __('Add Copia Plataforma'); ?></legend>
	<?php
		echo $this->Form->input('videojuego_copia_id',array('class' => 'form-control','label' => 'Videojuego'));
		echo $this->Form->input('plataforma',array('class' => 'form-control','label' => 'Plataforma'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
