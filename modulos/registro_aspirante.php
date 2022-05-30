<div class="principal container-fluid">

<form action="modulos/insertar.php" method="post">
<div class="paddingt row ">
      <div class="col-md-7 col-lg-8">
        <h3 class="mb-3">Registro del alumno</h3>
        <h6 class="mb-3" id="titulos" >Información del alumno</h6>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-4">
              <label for="firstName" class="form-label">Nombre (s)</label>
              <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu nombre.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" id="paterno" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu apellido paterno.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" id="materno" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu apellido materno.
              </div>
            </div>

            <h6 class="mb-3" id="titulos">Fecha de Nacimiento</h6>

            <div class="col-sm-4">
              <label for="firstName" class="form-label">Año</label>
              <select class="form-select" id="año" required>
                <option value="">Seleccionar...</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
                <option>2003</option>
                <option>2002</option>
                <option>2001</option>
                <option>2000</option>
                <option>1999</option>
                <option>1998</option>
                <option>1997</option>
                <option>1996</option>
                <option>1995</option>
                <option>1994</option>
              </select>
              <div class="invalid-feedback">
              Introduce año de nacimiento.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Mes</label>
              <select class="form-select" id="mes" required>
                <option value="">Seleccionar...</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
              <div class="invalid-feedback">
              Introduce mes de nacimiento.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Día</label>
              <select class="form-select" id="dia" required>
                <option value="">Seleccionar...</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
              </select>
              <div class="invalid-feedback">
              Introduce día de nacimiento.
              </div>
            </div>


            <h6 class="mb-3" id="titulos">Información de contacto</h6>

            <div class="col-3">
              <label for="address" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="address" placeholder="xxx-xxx-xxxx" required>
              <div class="invalid-feedback">
                Introduce un número telefónico
              </div>
            </div>
            
            <div class="col-sm-7">
              <label for="lastName" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
              Introduce tu dirección.
              </div>
            </div>

           

          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" id="registrar" type="submit">Registrar</button>
        </form>
      </div>
    </div>

</form>

</div>

<!-- El code de abajo es para el index -->
</div>
</main>