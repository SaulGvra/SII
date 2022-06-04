<div class="principal container-fluid">

<form action="modulos/insertaral.php" method="post">
<div class="paddingt row ">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Registro de Alumnos</h4>
        
        <form class="needs-validation">
          <div class="row g-3">

         
          
          <div class="col-sm-4">
              <label for="firstName" class="form-label">No. Contol</label>
              <input type="text" class="form-control" name="nocontrol" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce número de control.
              </div>
            </div>
      
            <div class="col-sm-4">
              <label for="firstName" class="form-label">Contraseña</label>
              <input type="text" class="form-control" name="contra" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce una contraseña.
              </div>
            </div>
            </div>

           <div class="row g-3">

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Carrera</label>
              <select class="form-select" name="carrera" required>
                <option value="">Seleccionar...</option>
                <option>1</option>
                <option>2</option>
                
              </select>
              <div class="invalid-feedback">
              Selecciona una carrera.
              </div>
            </div>
        </div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" id="registrar" type="submit">Registrar Información</button>
        </form>
      </div>
    </div>

</form>

</div>

<!-- El code de abajo es para el index -->
</div>
</main>