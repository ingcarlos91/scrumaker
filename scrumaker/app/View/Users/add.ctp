<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Nuevo Usuario'); ?></h2>
				<?php
					echo $this->Form->input('EMAIL', array('class' => 'form-control', 'label' => 'Correo*'));
					echo $this->Form->input('USERNAME', array('class' => 'form-control', 'label' => 'Usuario*'));
					echo $this->Form->input('PASSWORD', array('class' => 'form-control', 'label' => 'Contraseña*'));
					//echo $this->Form->input('PASSWORD')
					echo $this->Form->input('US_EMPRESA',array('class'=>'form-control','label'=>'Empresa'));
					//echo $this->Form->input('US_ROL');
					echo $this->Form->input('ROL', array('class' => 'form-control', 'label' => 'Rol', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));
				?>
				</fieldset>

				<p>
				<?php echo $this->Form->end(array('label' => 'REGISTRAME', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <!--button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php //echo __('Actions'); ?> <span class="caret"></span>
			  </button-->
			  <ul class="dropdown-menu" role="menu">
				<!--li><?php// echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li-->
			  </ul>
			</div>
		</div>
	</div>
</div>