<?php
    // conexión a la base de datos
    $username = "root";
    $password = "7202"; // usar contraseña de bases de datos local
    $database = "sii"; 
    $mysqli = new mysqli("localhost", $username, $password, $database);
    // consulta datos del alumno
    $query = "SELECT alumno.alu_cve_nocontrol, alumno.alu_nombre,alumno.alu_paterno,alumno.alu_materno ,alumno.alu_semestre, alumno.alu_especialidad FROM alumno where alumno.alu_cve_nocontrol='18200759';";
    // Guardar datos del registro en variables
    if ($result = $mysqli->query($query)) {
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
            <h5 id="mayus">ALUMNO: '.$field1name.' '.$field5name.' '.$field6name.'.....NO CONTROL: '.$field2name.'</h5>
            <hr>
            <h5 id="mayus">SEMESTRE: '.$field3name.'.....ESPECIALIDAD:'.$field4name.'</h5>
            ';
        }
        $result->free();
    } 
?>