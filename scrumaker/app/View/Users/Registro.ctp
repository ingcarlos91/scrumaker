<h2>REGISTRATE!</h2>

<?php
	//Formulario para usuarios
	echo $this->Form->create('Usuario');
	echo $this->Form->input('id');
	echo $this->Form->input('Correo');
	echo $this->Form->input('Nombre');
	//echo $this->Form->input('Apellido');
	//echo$this->Form->input('Foto');
	echo $this->Form->input('Contraseña');
	echo $this->Form->input('Empresa');
	echo $this->Form->input('Rol');
	echo $this->Form->end('REGISTRARME');