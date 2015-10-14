<html>

<head>

	<title>Registrar Usuarios</title>
	<link rel="stylesheet" href="../app/webroot/css/styles.css" type="text/css">
	
</head>

<body>

		<div  class="container" id="container1">
			<div  class="row centered-form">
				<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
		                <div class="panel panel-default">
		                    <div class="panel-heading">

					          <?php echo $this->Form->create('User', array('role' => 'form')); ?>
						    
							  <h2 class="panel-title text-center" ><?php echo __('Registrar Usuario'); ?></h2>
							</div>
							<div class="panel-body">
										   <?php
											echo $this->Form->input('EMAIL', array('class' => 'form-control', 'label' => '', 'placeholder'=>'Digite el correo electrónico(*)'));
											
						                  
						                    echo $this->Form->input('USERNAME', array('class' => 'form-control', 'label' => '', 'placeholder'=>'Digite el usuario(*)'));
											echo $this->Form->input('PASSWORD', array('class' => 'form-control', 'label' => '','placeholder'=>'Digite la contraseña(*)', 'type'=>'password'));
											echo $this->Form->input('password_confirm', array('class' => 'form-control', 'label' => '','placeholder'=>'Digite de nuevo la contraseña(*)', 'type'=>'password'));

											//echo $form->input('passwd_confirm', array('type' => 'password')); 
											//echo $this->Form->input('PASSWORD')
											echo $this->Form->input('US_EMPRESA',array('class'=>'form-control','label'=>'', 'placeholder'=>'Digite la empresa'));
											//echo $this->Form->input('US_ROL');
											/*echo $this->Form->input('US_ROL', array('class' => 'form-control', 'label' => 'Rol', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));*/

										?>
									</br>

										<div class="myCheckbox" id="myCheckbox">
										    <label>
										      <input type="checkbox" required> Acepto <a href="" >términos y condiciones</a>
										    </label>
										</div>

									</br>
				                  

							           <div class="panel-footer">
		                <div class="row">
			                    <div class="col-md-6">
			                        <?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success btn-sm btn-block')); ?>
			                    </div>
			                    <div class="col-md-6">
			                        <button type="button" onclick="history.back()"  class="btn btn-primary btn-sm btn-block">
			                            Cancelar</button>
			                    </div>
			                </div>
			            </div>





						
						
		       			
						
										
					  </div>
				   </div>
				</div>
			</div>
		</div>

</body>

</html>
