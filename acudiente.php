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
    
<!--     <!<div id="home" class="header">
          <div class="top-header">
            <div class="container">
            <div class="logo">
              <div class="col-md-2"
              <a href="# preregister"><img src="images/escudo.png" title="" /></a>
            </div> --> 




    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>

       <div>
       
        <div class="col-md-6">
          <div class="well">
            <form class="form-horizontal" action="guardar.php" method="post">
              
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nom">
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">apellidos</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="" name="ape">
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">tipo de documento</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="" name="tdoc">
                </div>
              </div>

              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">documento</label>
                   <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="" name="doc">
                </div>
                 </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">dirrecion</label>
                   <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="" name="dirr">
                  </div>
                   </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">barrio</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="barr">
                    </div>
                   </div>
                  
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ciudad</label>
                   <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="" name="ciu">
                  </div>
                   </div>
                  
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">telefono</label>
                   <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="" name="tel">
                  </div>
                  </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">correo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="cor">
                  </div>
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
            <h1>Registro de acudientes</h1>
            <hr>
                <div>
                <div class="col-md-4">
<!--                     <h1>Colegio NUSCHI</h1>
                    <hr> -->
                    <img src="registro.png" alt="" class="img-responsive">
                  
                  </div>
                </div>

                
                
              <p>
                Aqui se registra un acudiente, tenga en cuenta que es obligatorio llenar todos los campos del formulario, recuerde que estos datos seran verificados por un asesor por lo cual esta totalmente prohibido introducir informacion falsa; Una vez que se llenen los campos correctamente se da clic en Guardar y le aparecera un mensaje de que los datos fueron enviados correctamente y se enviara un e-mail confirmando su registro.
              </p>

              <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </P> -->
            

            </div>
          
       
      </div>
    </div>
 </div>
 
  </body>
</html>
