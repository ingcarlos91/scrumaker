<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('scruMaker', array('controller' => 'users', 'action' => 'login'), array('class' => 'navbar-brand')) ?>
          <ul class="nav navbar-nav">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REGISTRARME <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../scrumaker/users/add">REGISTRARME</a></li>
                                
                
              </ul>
            </li></ul>
        </div>
        

        <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
                       <div class="form-group">
              <?php echo $this->Form->input('USERNAME', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->input('PASSWORD', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
            </div>
            <?php echo $this->Form->button('Acceder', array('class' => 'btn btn-success')); ?>
            <a href="#">OLVIDE MIS DATOS</a>
            <?php echo $this->Form->end(); ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido!!!...</h1>
        <p>Hola, este es scruMaker.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Leer más &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Tutorial</h2>
          <p>Aprende a gestionar tu proyecto SCRUM</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>ABOUT US</h2>
          <p>Enterate de lo nuevo de SCRUM y scruMaker. </p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Contacto</h2>
          <p>Algun inconvniente con la app? Contactate con nosotros.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; BootStrap 2015</p>
      </footer>
    </div> <!-- /container -->