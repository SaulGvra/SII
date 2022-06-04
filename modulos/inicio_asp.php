<?php
$usuario= $_SESSION['user'];
//----------------- Este solo es para consultar solo el nombre ----------------------------------------------------------------------------------------------

            include('conexion.php');

            // consulta del nombre (solo el nombre)
            $query = "select aspirante.asp_nombre from aspirante where asp_cve_aspirante = 'ASP-5';";
            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $nombre = $row["asp_nombre"];
                }

                // Agregar variables al html
                echo '
                <div class="principal container-fluid">
                <div class="row">
                    <h1 id="bloque"> '.$nombre.',</h1>
                </div>                    
                
                ';


                //Se vacía la variable result
                $result->free();
            } 


//----------------- Este es para seguir llenando ----------------------------------------------------------------------------------------------

            // consulta datos del alumno
            $query = "SELECT   a.asp_cve_aspirante as 'Usuario',
			concat( a.asp_nombre , ' ', a.asp_paterno,  ' ', a.asp_materno) AS 'Nombre', c.carrera_nombre as 'Carrera'
			FROM aspirante a inner join carrera as c on  c.car_cve_carrera = a.car_cve_carrera where a.asp_cve_aspirante = 'ASP-5';";

            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $field1name = $row["Usuario"];
                    $field2name = $row["Nombre"];
                    $field3name = $row["Carrera"];
                }
                
                    // Agregar variables al html
            echo '
            <div class="row paddTop5">
                
                        
                        <div class="container">
                        <br><br>
                            <div class="col-11">
                                <h5>
                                    Aspirante
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
                                                <b>Carrera</b>
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

    <script>
                            let getBlock = document.getElementById("bloque");
                            let newElement = document.createElement("h1");
                            let fecha = new Date();
                            let hora = fecha.getHours();
                            console.log(hora);
                            let crearTexto;

                            if (hora >= 5 && hora < 12) {
                                crearTexto = "Buenos días.";
                            }

                            else if (hora >= 12 && hora < 19) {
                                crearTexto = "Buenas tardes.";
                            }

                            else if (hora >= 19 || hora < 5) {
                                crearTexto = "Buenas noches.";
                            }

                            else {
                                crearTexto = "XD";
                            }

                            let crearTextoElem = document.createTextNode(crearTexto);
                            newElement.appendChild(crearTextoElem);
                            getBlock.appendChild(newElement);
                            newElement.setAttribute("class", "welcome");

                        </script>