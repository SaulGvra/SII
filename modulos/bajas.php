<div class="principal container-fluid">

<div class="paddingt row ">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Bajas</h4>

        <!-- Inicia la baja -->
        <hr class="my-4">
        <h5 class="mb-3">Alumno</h5>
        <form class="needs-validation">
          <div class="row g-3">
            <div class="col-sm-6">
            <label for="firstName" class="form-label">Número de control.</label>
            </div>
            <div class="row">
                <div class="col-6">
                <input name="alumno" type="text" class="form-control" id="idAl" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                </div>
                <div class="col-6">
                  <button  id="submit1" type="button" class="w-100 btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmacionAl">Baja</button>
                </div>
            </div>
        </form>

         <!-- Inicia la baja -->
         <hr class="my-4">
        <h5 class="mb-3">Aspirante</h5>
        <form class="needs-validation">
          <div class="row g-3">
            <div class="col-sm-6">
            <label for="firstName" class="form-label">Número de solicitud.</label>
            </div>
            <div class="row">
                <div class="col-6">
                  <input name="aspirante" type="text" class="form-control" id="idAs" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid no solicitud is required.
                    </div>
                </div>
                <div class="col-6">
                  <button id="submit2" type="button" class="w-100 btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmacionAs">Baja</button>
                </div>
            </div>
        </form>

         <!-- Inicia la baja -->
         <hr class="my-4">
        <h5 class="mb-3">Personal</h5>
        <form class="needs-validation">
          <div class="row g-3">
            <div class="col-sm-6">
            <label for="firstName" class="form-label">Usuario.</label>
            </div>
            <div class="row">
                <div class="col-6">
                  <input name="personal" type="text" class="form-control" id="idPer" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid no solicitud is required.
                    </div>
                </div>
                <div class="col-6">
                  <button id="submit3" type="button" class="w-100 btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmacionPer">Baja</button>
                </div>
            </div>
        </form>


            
      </div>
    </div>
</div>
</div> <!-- Termina el div principal -->


<!-- -------------------------------------------Modal Alumno------------------------------>

<div class="modal fade" id="confirmacionAl" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content rounded-5 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <h2 class="fw-bold mb-0">¿Dar de baja?</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body p-5 pt-0">
            
              <!-- ------------------------Formulario de ingreso ------------------------>
            
              <form class="" action="modulos/bajaAlumno.php" method="POST">
              <input id="valorAl" type="hidden" name="idAl" value="">
              <div class="modal-footer">
                  <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" >Baja</button>
                  <button type="button" class="w-100 btn-lg btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>          
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!----Fin del Modal ---->

    <!-- -------------------------------------------Modal Aspirante------------------------------>

<div class="modal fade" id="confirmacionAs" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content rounded-5 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <h2 class="fw-bold mb-0">¿Dar de baja?</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body p-5 pt-0">
            
              <!-- ------------------------Formulario de ingreso ------------------------>
            
              <form class="" action="modulos/bajaAspirante.php" method="POST">
              <input id="valorAs" type="hidden" name="idAs" value="">
              <div class="modal-footer">
                  <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" >Baja</button>
                  <button type="button" class="w-100 btn-lg btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>          
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!----Fin del Modal ---->

    <!-- -------------------------------------------Modal Personal------------------------------>

<div class="modal fade" id="confirmacionPer" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content rounded-5 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <h2 class="fw-bold mb-0">¿Dar de baja?</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
              <!-- ------------------------Formulario de ingreso ------------------------>
            
              <form class="" action="modulos/bajaPersonal.php" method="POST">
              <input id="valorPer" type="hidden" name="idPer" value="">
              <div class="modal-footer">
                  <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" >Baja</button>
                  <button type="button" class="w-100 btn-lg btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>          
              </div>
            </form>
          
        </div>
      </div>
    </div> <!----Fin del Modal ---->

    <script type="text/javascript">
        $("#submit1").click(function () {
            var control = $("#idAl").val();
            document.getElementById("valorAl").value = control;
        });
    </script>

    <script type="text/javascript">
        $("#submit2").click(function () {
            var control = $("#idAs").val();
            document.getElementById("valorAs").value = control;
        });
    </script>
    
    <script type="text/javascript">
        $("#submit3").click(function () {
            var control = $("#idPer").val();
            document.getElementById("valorPer").value = control;
        });
    </script>

<!-- El code de abajo es para el index -->
</div>
</main>
