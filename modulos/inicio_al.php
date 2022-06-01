
<div class="principal container-fluid">


        <?php
            include('conexion.php');
            // consulta datos del alumno
            $query = "SELECT alumno.alu_cve_nocontrol, alumno.alu_nombre,alumno.alu_paterno,alumno.alu_materno ,alumno.alu_semestre, alumno.alu_especialidad FROM alumno where alumno.alu_cve_nocontrol='18200759';";
            // Guardar datos del registro en variables
            // EL if es para ver que el query te devolvió registros
            if ($result = $mysqli->query($query)) {
                //Da vuelta por cada fila encontrada
                while ($row = $result->fetch_assoc()) 
                {
                    $field1name = $row["alu_nombre"];
                    $field2name = $row["alu_cve_nocontrol"];
                    $field3name = $row["alu_semestre"];
                    $field4name = $row["alu_especialidad"];
                    $field5name = $row["alu_paterno"];
                    $field6name = $row["alu_materno"];
                // Agregar variables al html
                    echo '
                    <h5 id="mayus">-ALUMNO: '.$field1name.' '.$field5name.' '.$field6name.'-  -NO CONTROL: '.$field2name.'-</h5>
                    <hr>
                    <h5 id="mayus">SEMESTRE ACTUAL: '.$field3name.'- -ESPECIALIDAD:'.$field4name.'-</h5>
                    ';
                }
                //Se vacía la variable result
                $result->free();
            } 
        ?>


</div>