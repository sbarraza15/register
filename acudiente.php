<html>
  <head>
      <title>Registro</title>
      <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>

        <div class="col-md-6">
          <div class="well">
            <form class="form-horizontal" action="guardar.php" method="post">

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Cedula" name="ced">
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Password" name="nom">
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Password" name="dir">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Guardar</button>
                </div>
              </div>

            </form>          
            
          </div>
        </div>

        <div class="col-md-6">
          <h1>Acudientes</h1>
          <hr>
          <p>
            Aqui se registra un acudeinte, tenga en cuenta            
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque labore deserunt, molestiae incidunt officia! Dolores et omnis quam quo aliquam possimus quos tenetur harum, alias culpa odio eveniet, modi unde.
          </p>
        </div>

       
      </div>
    </div>
  </body>
</html>
