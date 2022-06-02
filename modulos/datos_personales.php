<?php

  if(!isset($_SESSION)) 
{ 
   echo "no hay session";

}else{
    echo " si hay session";
    echo "NOMBRE".$_SESSION['user'];
}
  //echo '<h4 class="mb-3">'.$sesion.'   sdfcsdfsdf</h4>';
?>

<div class="principal container-fluid">

<div class="paddingt row ">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Datos del alumno</h4>

        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-8">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-8">
              <label for="lastName" class="form-label">Apellido paterno</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-8">
                <label for="lastName" class="form-label">Apellido materno</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
            </div>

            <div class="col-sm-8">
                <div class="col-sm-4">
                  <label for="lastName" class="form-label">Fecha de nacimiento</label>
                  <div class="date" id="datepicker">
                      <input type="text" class="form-control" required>
                      <span class="input-group-append"></span>
                  </div>
                </div>
            </div>
      
          <script type="text/javascript">
              $(function() {
                  $('#datepicker').datepicker();
              });
          </script>


            <div class="col-sm-8">
            <label for="lastName" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telph" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid telefono is required.
            </div>
            </div>

            <div class="col-8">
              <label for="address" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
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

<!-- El code de abajo es para el index -->
</div>
</main>



