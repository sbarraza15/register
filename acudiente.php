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
        <div class="col-md-12">
        <h1 class="text-centro">Registro de acudiente</h1>
        <div class="col-md-6">
        
          <hr>
          <div class="well">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">nombres</label>
                  <div class="col-sm-4">
                    <input type="text" name ="nom" class="form-control" id="inputEmail3" placeholder="Nombre acudiente">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">apellidos</label>
                  <div class="col-sm-4">
                    <input type="text" name="ape"class="form-control" id="inputEmail3" placeholder="apellidos completos">
                   </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">tipo de documento</label>
                    <div class="col-sm-4">
                    <input type="text" name="tdoc" class="form-control" id="inputEmail3" placeholder="CC">
                    </div>
                    </div>
                   <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">documento</label>
                    <div class="col-sm-4">
                    <input type="text" name="doc" class="form-control" id="inputEmail3" placeholder="">
                     </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">dirrecion</label>
                    <div class="col-sm-4">
                    <input type="text" name="dirr" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">barrio</label>
                    <div class="col-sm-4">
                    <input type="text" name="barr" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                    </div>
                    <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">ciudad</label>
                   <div class="col-sm-4">
                    <input type="text" name="ciu" class="form-control" id="inputEmail3" placeholder="Cel o fijo ">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Correo</label>
                    <div class="col-sm-4">
                    <input type="text" name="Cor" class="form-control" id="inputEmail3" placeholder="@email">
                    </div>
                     </div>
                     <!-- <div class="form-group">
                     <label for="inputEmail3" class="col-sm-4 control-label">Correo Alterno</label>
                     <div class="col-sm-4">
                      <input type="text" name="Correo Aternativo" class="form-control" id="inputEmail3" placeholder="">
                      </div> -->
                     </div>
                      </div>


                        <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-10">
                       <div class="checkbox">
                       <label>
                       <p>
                       Autoriza el envio de notificaciones a direccion email de informacion academica y general.
                        </p>
                        <input type="checkbox">Acepto
                       </label>
                       </div>
                       </div>
                       </div>

                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">GUARDAR</button>
                         <button class="btn btn-default" href="index3.html">SIGUIENTE</button>
                         </div>
                         </div>

                     </form>   
          </div>



        </div>
       
        </div>
      </div>
    </div>
  </body>
</html>
s