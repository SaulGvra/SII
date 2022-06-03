div class="principal container-fluid">

<form action="modulos/insertarp.php" method="post">
<div class="paddingt row ">
      <div class="col-md-7 col-lg-8">
        <h3 class="mb-3">Datos personales</h3>
        <h6 class="mb-3" id="titulos" >Información del alumno</h6>
        <form class="needs-validation" novalidate>
          <div class="row g-3">

          <div class="col-sm-4">
              <label for="firstName" class="form-label">No. Personal</label>
              <input type="text" class="form-control" name="aspirante" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu numero de personal.
              </div>
            </div>
      
            <div class="row g-3">
            <div class="col-sm-4">
              <label for="firstName" class="form-label">Nombre (s)</label>
              <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu nombre.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" name="paterno" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu apellido paterno.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" name="materno" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu apellido materno.
              </div>
            </div>

            <h6 class="mb-3" id="titulos">Fecha de Nacimiento</h6>

            <div class="col-3">
              <label for="address" class="form-label">Fecha de nacimiento</label>
              <input type="text" class="form-control" name="fecha" placeholder="AAAA-MM-DD" required>
              <div class="invalid-feedback">
                Introduce tu fecha de nacimiento
              </div>
            </div>
<!--
           
-->
            <h6 class="mb-3" id="titulos">Información de contacto</h6>

            <div class="col-3">
              <label for="address" class="form-label">Teléfono</label>
              <input type="text" class="form-control" name="telefono" placeholder="" required>
              <div class="invalid-feedback">
                Introduce un número telefónico
              </div>
            </div>
            
            <div class="col-sm-7">
              <label for="lastName" class="form-label">Dirección</label>
              <input type="text" class="form-control" name="dir" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu dirección.
              </div>
            </div>

           

          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" id="registrar" type="submit">Actualizar Información</button>
        </form>
      </div>
    </div>

</form>

</div>

<!-- El code de abajo es para el index -->
</div>
</main>