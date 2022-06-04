
<?php
$control = $_SESSION['user'];
//----------------- Este solo es para consultar solo el nombre ----------------------------------------------------------------------------------------------

            include('conexion.php');

            // consulta del nombre (solo el nombre)
            $query = "SELECT alumno.alu_nombre FROM alumno WHERE alumno.alu_cve_nocontrol='$control';";
            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $nombre = $row["alu_nombre"];
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
            $query = "SELECT  concat( a.alu_nombre , ' ', a.alu_paterno,  ' ', a.alu_materno) AS 'Nombre',a.alu_estatus as 'Estatus', ad.ade_bibliotecas as 'Biblioteca',
            ad.ade_escolares as 'Escolares', ad.ade_financieros as 'Financieros', ad.ade_otros as 'Otros'
            FROM adeudo ad
            inner join alumno as a
            on  a.alu_cve_nocontrol = ad.alu_cve_nocontrol where a.alu_cve_nocontrol = '$control';";

            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $field1name = $row["Nombre"];
                    $field2name = $row["Estatus"];
                    $field3name = $row["Biblioteca"];
                    $field4name = $row["Escolares"];
                    $field5name = $row["Financieros"];
                    $field6name = $row["Otros"];
                }
                
                    // Agregar variables al html
            echo '
            <div class="row paddTop5">
                
                    
                        <div class="container">
                            <div class="row">
                                <h5>
                                    Alumno
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
                                                <p>'.$field1name.'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="conteiner">
                                            <div class="row">
                                                <b>Estatus</b>
                                            </div>
                                            <div class="row">
                                                <p>'.$field2name.'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="conteiner">
                                            <div class="row">
                                                <b>Promedio</b>
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
        from calificacion where alu_cve_nocontrol2 = '$control' ;";
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
                        <p>'.$general.'</p>                  
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
									
                                    <div class="row align-items-center paddTop5">
                                        <div class="col-6">
                                        <h5>
                                            Adeudos
                                        </h5>
                                        <hr class="col">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Biblioteca</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">'.$field3name.'</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Escolares</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">'.$field4name.'</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Financieros</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">'.$field5name.'</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Otros</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">'.$field6name.'</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                         <p ></p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
             
                                    <div class="col-6">
                                        <h5>
                                            Reinscripción
                                        </h5>
                                        <hr class="col">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <p>Fecha</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">19-Enero-2022</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Hora</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">10:00 AM</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Lugar</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">INTERNET</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Autorizado</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">S</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Evaluación docente</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">S</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Pago referenciado</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="centrarTexto">S</p>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                    </div>
                                </div>
                    </div
                ';

        ?>



        </main>
</div>
</div>