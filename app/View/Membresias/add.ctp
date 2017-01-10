<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Membresia'); ?>
	<fieldset>
		<legend><?php echo __('Add Membresia'); ?></legend>
	<?php
		echo $this->Form->input('estado',array('class' => 'form-control','label' => 'Estado'));
		echo $this->Form->input('fecha_creacion',array(
        'class' => 'form-control',
        'div' => array('class' => 'form-inline'),
        'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>'
    ));
		echo $this->Form->input('tipo',array('class' => 'form-control','label' => 'Tipo'));
		echo $this->Form->input('cliente_id',array('class' => 'form-control','label' => 'Cliente'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>

