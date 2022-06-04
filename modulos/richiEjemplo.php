
<?php

//----------------- Este solo es para consultar solo el nombre ----------------------------------------------------------------------------------------------

            include('conexion.php');

            // consulta del nombre (solo el nombre)
            $query = "SELECT personal.per_nombre FROM personal where personal.per_cve_personal='PER-4';";
            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $nombre = $row["per_nombre"];
                }

                // Agregar variables al html
                echo '
                <div class="principal container-fluid">
                <div class="row">
                    
                    <h1>Buenas tardes, '.$nombre.'</h1>
                </div>                    
                
                ';


                //Se vacía la variable result
                $result->free();
            } 


//----------------- Este es para llenar los datos del personal ----------------------------------------------------------------------------------------------

            // consulta datos del alumno
            $query = "SELECT  concat( a.per_nombre , ' ', a.per_paterno,  ' ', a.per_materno) AS 'Nombre', 
			a.per_cve_personal as 'Usuario',  ad.cla_salon as 'Salon', 
			ad.cla_horario as 'Horario',ad.mat_cve_materia2 as 'ClaveMateria', m.mat_nombre as 'Materia'
			FROM clase ad inner join personal as a on  a.per_cve_personal = ad.per_cve_personal
			inner join materia as m on  m.mat_cve_materia = ad.mat_cve_materia2 where a.per_cve_personal = 'PER-4';";

            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $field1name = $row["Nombre"];
                    $field2name = $row["Usuario"];
                    $field3name = $row["Salon"];
					$field4name = $row["Horario"];
                    $field5name = $row["ClaveMateria"];
                    $field6name = $row["Materia"];
                  
                }
                
                    // Agregar variables al html
            echo '
            <div class="row paddTop5">
                
                    
                        <div class="container">
                            <div class="col-12">
                                <h5>
                                    Personal
                                </h5>
                            <hr class="col">        
                            </div>
                            <div class="container">
                                <div class="row filas align-items-center">
                                    <div class="col-6">
									
                                        <div class="conteiner">
                                            <div class="row">
                                                <b>Nombre</b>
                                            </div>
                                            <div class="row">
                                                <p>'.$field1name.'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="conteiner">
                                            <div class="row">
                                                <b>Usuario</b>
                                            </div>
                                            <div class="row">
                                                <p>'.$field2name.'</p>
                                            </div>
                                        </div>
                                    </div>                
            ';
            
            //Se vacía la variable result
            $result->free();
        } 

?>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="row align-items-center paddTop5">
                                        <div class="col-12">
                                        <h5>
                                            Materias
                                        </h5>
                                        <hr class="col">
                                            <div class="container">



<?php
//----------------- Este es para llenar los datos de la materia ----------------------------------------------------------------------------------------------

            // consulta datos del alumno
            $query = "SELECT   m.mat_nombre as 'Materia', ad.cla_salon as 'Salon'
						FROM clase ad
						inner join materia as m on  m.mat_cve_materia = ad.mat_cve_materia2 where ad.per_cve_personal = 'PER-4';";

            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $Materia = $row["Materia"];
                    $Salon = $row["Salon"];
                    
                    echo '

                    <div class="row">
                        <div class="col-6">
                            <p>'.$Materia.'</p>
                        </div>
                        <div class="col-6">
                            <p class="centrarTexto">'.$Salon.'</p>
                        </div>
                    </div>
                    ';
                }
            }
?>
                                           
                    </div>
                </div>
            </div>
        </div>

    </div>


    
</main>
</div>