<?php

 $personal = $_SESSION['user'];
 
 include('conexion.php');

  // consulta datos del alumno
  $query = "SELECT per_nombre, per_paterno, per_materno, per_fecha, per_telefono, per_direccion FROM sii.personal Where per_cve_personal = '$personal';";
  // Guardar datos del registro en variables
  // EL if es para ver que el query te devolvió registros
  if ($result = $mysqli->query($query)) {
      //Da vuelta por cada fila encontrada
      while ($row = $result->fetch_assoc()) 
      {
          $field1name = $row["per_nombre"];
          $field2name = $row["per_paterno"];
          $field3name = $row["per_materno"];
          $field4name = $row["per_fecha"];
          $field5name = $row["per_telefono"];
          $field6name = $row["per_direccion"];
      // Agregar variables al html
          
      
      echo '
      <div class="principal container-fluid">

      <div class="paddingt row ">
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Datos del personal</h4>
      
              <form action="modulos/updatePersonal.php" method="POST" class="needs-validation" novalidate>
                <div class="row g-3">
                  <div class="col-sm-8">
                    <label for="firstName" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="firstName" placeholder="" value="'.$field1name.'" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
      
                  <div class="col-sm-8">
                    <label for="lastName" class="form-label">Apellido paterno</label>
                    <input name="ap" type="text" class="form-control" id="lastName" placeholder="" value="'.$field2name.'" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
      
                  <div class="col-sm-8">
                      <label for="lastName" class="form-label">Apellido materno</label>
                      <input name="am" type="text" class="form-control" id="lastName" placeholder="" value="'.$field3name.'" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                  </div>
      
                  <div class="col-sm-8">
                      <div class="col-sm-4">
                        <label for="lastName" class="form-label">Fecha de nacimiento</label>
                        <div class="date" id="datepicker">
                            <input name="fecha" type="text" class="form-control" value="'.$field4name.'" required>
                            <span class="input-group-append"></span>
                        </div>
                      </div>
                  </div>

                  <div class="col-sm-8">
                  <label for="lastName" class="form-label">Telefono</label>
                  <input name="tel" type="text" class="form-control" id="telph" placeholder="" value="'.$field5name.'" required>
                  <div class="invalid-feedback">
                      Valid telefono is required.
                  </div>
                  </div>
      
                  <div class="col-8">
                    <label for="address" class="form-label">Dirección</label>
                    <input name="dir" type="text" class="form-control" id="address" placeholder="" value="'.$field6name.'" required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
      
                
                <div class="col-8">
                  <hr class="my-4">
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Actualizar</button>
                </div>
              </form>
            </div>
          </div>
      </div>
      </div> <!-- Termina el div principal -->
          ';


      }
      //Se vacía la variable result
      $result->free();
  } 

?>

<!-- El code de abajo es para el index -->
</div>
</main>



