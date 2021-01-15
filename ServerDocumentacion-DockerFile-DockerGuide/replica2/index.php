<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page-REPLICA1</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
        
          <div class="panel-heading text-center">
            <h1>TABLA ALUMNO - REPLICA2</h1>
          </div>
          
          <div class="panel-body">
            <form action="connect.php" method="post">
            
              <div class="form-group">
               <label for="firstName">CEDULA</label>
                <input type="text" class="form-control" id="cedula" name="cedula" />
              </div>
              
              <div class="form-group">
                <label for="lastName">NOMBRE COMPLETO</label>
                <input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" />
                </div>
                
              <div class="form-group">
                <label for="lastName">EDAD</label>
                <input type="text" class="form-control" id="edad" name="edad" />
             
              </div> 
              <div class="form-group">
              <label for="lastName">DIA DE PAGO</label>
              <input type="text" class="form-control" id="diadepago" name="diadepago" />
              </div>
              
              <div class="form-group">
              <label for="lastName">CINTURON</label>
              <input type="text" class="form-control" id="cinturon" name="cinturon" />
              </div>
              
              <div class="form-group">
              <label for="lastName">TIEMPO DE CINTURON</label>
              <input type="text" class="form-control" id="tiempodecinturon" name="tiempodecinturon"/>
              </div>
              
              <input type="submit" class="btn btn-primary" />
               </form>
         </div>
      </div>
    </div>
   </div>
              
          
             </div>
             <br> <br>
             <br> <br>
             <br> <br>
             <br> <br>
             <h3>ELIMINACION DE ESTUDIANTE</h3>
              <div class="form-group">
                <label for="lastName">ELIMINAR-CON-CEDULA</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
               </div>
              <input type="submit" value="Eliminar" />
            
              

  	</body>
</html>

