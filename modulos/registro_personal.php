<div class="principal container-fluid">
<form action="modulos/insertarper.php" method="post">
<div class="paddingt row ">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Registro de Personal</h4>
        
        <form class="needs-validation" novalidate>
          <div class="row g-3">

         
          
          <div class="col-sm-4">
              <label for="firstName" class="form-label">No. de Personal</label>
              <input type="text" class="form-control" name="personal" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce número de Personal.
              </div>
            </div>
      
         

          
            <div class="col-sm-4">
              <label for="firstName" class="form-label">Contraseña</label>
              <input type="text" class="form-control" name="contra" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce una contraseña.
              </div>
            </div>

            <h6 class="mb-3" id="titulos">Rol del Personal</h6>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Rol</label>
              <select class="form-select" name="tipo" required>
                <option value="">Seleccionar...</option>
                <option>Master</option>
                <option>Administracion</option>
                <option>Maestro</option>
               
                
              </select>
              <div class="invalid-feedback">
              Selecciona un rol.
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