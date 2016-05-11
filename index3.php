<html>
  <head>
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style type="text/css"> 
      p{text-align:justify}
      #cuadro{
        border-style: solid;
        margin-top: 20px;
        margin-bottom: 20px;
        background-color: red;
        border-radius: 10px 10px 10px 10px;
        height: 100px;
      }
      #escudo{
        width:  25px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>

        </div>

        <div class="col-md-8">
        <h1 class="text-centro"></h1>
        </div>

        <div class="col-md-6">
          <div class="well">

              <form class="form-horizontal" action="alumnos.php" method="post">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Nombre</label>
                  <div class="col-sm-6">
                    <input type="text" name ="nom" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Apellido</label>
                  <div class="col-sm-6">
                    <input type="text" name ="ape" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>

                    
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Identificacion</label>
                  <div class="col-sm-6">
                    <input type="text" name="iden" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                    <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">Grado Cursado</label>
                    <div class="col-sm-6">
                    <input type="text" name="gsado" class="form-control" id="inputEmail3" placeholder="">
                     </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Grado aspirante</label>
                    <div class="col-sm-6">
                    <input type="text" name="gaspi" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Edad</label>
                  <div class="col-sm-6">
                    <input type="text" name="edad" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Sexo</label>
                  <div class="col-sm-6">
                    <input type="text" name="sex" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Direccion</label>
                  <div class="col-sm-6">
                    <input type="text" name="dirr" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                  </div>

               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Barrio</label>
                  <div class="col-sm-6">
                    <input type="text" name="barr" class="form-control" id="inputEmail3" placeholder="">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Ciudad</label>
                  <div class="col-sm-6">
                    <input type="text" name="ciu" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Telefono</label>
                  <div class="col-sm-6">
                    <input type="text" name="tel" class="form-control" id="inputEmail3" placeholder="">
                 </div>
                </div>
                  
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Correo</label>
                  <div class="col-sm-6">
                    <input type="text" name="cor" class="form-control" id="inputEmail3" placeholder="">
                 </div>
                </div>
                  
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-default"><strong>GUARDAR</strong></button>
                   </div>
                </div>

              </form>   
          </div>



        </div>
        <div class="col-md-6">
          <h1><strong>REGISTRO DE ALUMNOS</strong></h1>
          <hr>
          <p>
           Aqui se registra un alumno, tenga en cuenta que es obligatorio llenar todos los campos del formulario, recuerde que estos datos seran verificados por un asesor por lo cual esta totalmente prohibido introducir informacion falsa; Una vez que se llenen los campos correctamente se da clic en Guardar y le aparecera un mensaje de que los datos fueron enviados correctamente y se enviara un e-mail confirmando su registro.
          </p>
          <!-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde magni iusto dolores recusandae a, tenetur, inventore? Repudiandae illo ut assumenda saepe incidunt nostrum sunt molestiae. Commodi quo provident vitae id?
          </p> -->
        </div>
      </div>
    </div>
 </div>
 
  </body>
</html>
