<?php
$usuario= $_SESSION['user'];
//----------------- Este solo es para consultar solo el nombre ----------------------------------------------------------------------------------------------

            include('conexion.php');

            // consulta del nombre (solo el nombre)
            $query = "SELECT personal.per_nombre FROM personal where personal.per_cve_personal='PER-3';";
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


//----------------- Este es para seguir llenando ----------------------------------------------------------------------------------------------

            // consulta datos del alumno
            $query = "SELECT   per_cve_personal as 'Usuario',
						concat( per_nombre , ' ', per_paterno,  ' ', per_materno) AS 'Nombre', per_tipo as 'Tipo'
						FROM personal where per_cve_personal='PER-3';";

            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $field1name = $row["Usuario"];
                    $field2name = $row["Nombre"];
                    $field3name = $row["Tipo"];
                }
                
                    // Agregar variables al html
            echo '
            <div class="row paddTop5">
                
                        
                        <div class="container">
                        <br><br>
                            <div class="col-11">
                                <h5>
                                    Administrador
                                </h5>
                                <hr>
                            </div>
                            <div class="container">
                                <div class="row filas align-items-center">
                                    <div class="col">
                                        <div class="conteiner">
                                            <div class="row">
                                                <b>Nombre</b>
                                            </div>
                                            <div class="row">
                                                <p>'.$field2name.'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="conteiner">
                                            <div class="row">
                                                <b>Usuario</b>
                                            </div>
                                            <div class="row">
                                                <p>'.$field1name.'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="conteiner">
                                            <div class="row">
                                                <b>Tipo</b>
                                            </div>
                                            <div class="row">
        ';

                
                //Se vacía la variable result
                $result->free();
                
            } 

//----------------- Aquí se llena el promedio ----------------------------------------------------------------------------------------------

        // consulta del nombre (solo el nombre)
        $query = " SELECT 
        (cal_unidad1 + cal_unidad2 + cal_unidad3 + cal_unidad4 + cal_unidad5 + cal_unidad6)/(if(cal_unidad1<>0,1,0)+if(cal_unidad2<>0,1,0)
        +if(cal_unidad3<>0,1,0)+if(cal_unidad4<>0,1,0)+if(cal_unidad5<>0,1,0)+if(cal_unidad6<>0,1,0)) prom_real
        from calificacion where alu_cve_nocontrol2 = '18200759' ;";
        // Guardar datos del registro en variables
        // EL if es para ver que el query te devolvió registros
        if ($result = $mysqli->query($query)) {
            //Da vuelta por cada fila encontrada
			$promedio=0;
            while ($row = $result->fetch_assoc()) 
            {
                
                $promedio = $promedio + $row["prom_real"];
            
            }

            //Para sacar el promedio se divide el promedio entre 
            //el numero de promedios que se obtrienen de la consulta

            $row_cnt = $result->num_rows; //Numero de promedios

            $general = $promedio / $row_cnt; //Promedio general

            // Agregar variables al html
            echo '
                        <p>'.$field3name.'</p>                  
            ';
            
            //Se vacía la variable result
            $result->free();
        } 


//----------------- Aquí se llena lo demás ----------------------------------------------------------------------------------------------
// deven de colocar las variables que se declararon hasta casi por arriba
//las de field1 y demás

        echo '
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									
                    </div>
                ';

        ?>


            </div>
                    


            </div>

            </div>
    </main>