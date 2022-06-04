<table text-align class="table table-striped table-bordered table table-hover" >
        <thead class="text muted">
            <th id="tag3" class="text-center" >Materia</th>
            <th id="tag3" class="text-center">Catedratico</th>
            <th id="tag3" class="text-center">Aula</th>
            <th id="tag3" class="text-center">Lunes</th>
            <th id="tag3" class="text-center">Martes</th>
            <th id="tag3" class="text-center">Miercoles</th>
            <th id="tag3" class="text-center">Jueves</th>
            <th id="tag3" class="text-center">Viernes</th>
        </thead>
        <tbody>
    
<?php 

include('conexion.php');
$usuario= $_SESSION['user'];
//consulta
$consulta = "SELECT m.mat_nombre as 'Materia', concat( p.per_nombre , ' ', p.per_paterno,  ' ', p.per_materno) AS 'Catedratico', c.cla_salon as 'Aula', c.cla_lunes as 'Lunes', c.cla_martes as 'Martes', c.cla_miercoles as 'Miercoles', c.cla_jueves as 'Jueves', c.cla_viernes as 'Viernes'

FROM clasexalumno x
Inner join clase as c
on c.cla_cve_clase = x.cla_cve_clase
inner join alumno as a
on a.alu_cve_nocontrol = x.alu_cve_nocontrol
INNER JOIN materia as m
ON m.mat_cve_materia = c.mat_cve_materia2
Inner Join personal as p
ON c.per_cve_personal = p.per_cve_personal
where a.alu_cve_nocontrol='$usuario';";


    // EL if es para ver que el query te devolvió registros
    if ($result = $mysqli->query($consulta)) {
        //Da vuelta por cada fila encontrada
        while ($row = $result->fetch_assoc()) 
        {
            $field1name = $row['Materia'];
            $field2name = $row['Catedratico'];
            $field3name = $row['Aula'];
            $field4name = $row['Lunes'];
            $field5name = $row['Martes'];
            $field6name = $row['Miercoles'];
            $field7name = $row['Jueves'];
            $field8name = $row['Viernes'];
        // Agregar variables al html
            echo '
                <tr id="tag4" align="center">
                   <td align="center">'.$field1name.'</td> 
                   <td align="center">'.$field2name.'</td> 
                   <td align="center">'.$field3name.'</td> 
                   <td align="center">'.$field4name.'</td> 
                   <td align="center">'.$field5name.'</td> 
                   <td align="center">'.$field6name.'</td> 
                   <td align="center">'.$field7name.'</td> 
                   <td align="center">'.$field8name.'</td> 
                </tr>
               
            
            ';
        }
        //Se vacía la variable result
        $result->free();
    } 
?>
   </tbody>
        </table>
</div>
