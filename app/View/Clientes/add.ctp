<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('class' => 'form-control','label' => 'Nombre'));
		echo $this->Form->input('apellidos',array('class' => 'form-control','label' => 'Apellidos'));
		echo $this->Form->input('sexo',array('class' => 'form-control','label' => 'Sexo'));
		echo $this->Form->input('fecha_nacimiento',array(
        'class' => 'form-control',
        'div' => array('class' => 'form-inline'),
        'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>'
    ));
		echo $this->Form->input('email',array('class' => 'form-control','label' => 'Email'));
		echo $this->Form->input('direccion',array('class' => 'form-control','label' => 'Direccion'));
	?>
	
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
		</div>
	</div>
</div>

