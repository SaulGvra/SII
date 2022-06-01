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

<!-- Se cierra el Row de kardex.php-->
</div>
                                    <!--CONTINUACION DEL HTML-->
                                    <br>
                                        <div class="container">
                                            <div class="row filas align-items-center">

<?php
function semes ($semes,$control,$mysqli)
{

    $query = "select * from kardex3 where alu_cve_nocontrol='".$control."' and mat_semestre='".$semes."';";
    $aux1=0;
    $prom=0;
    $cred=0;
    $tcred=0; $aux=0; $ban=true;

    // EL if es para ver que el query te devolvió registros
    if ($result = $mysqli->query($query)) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            if($ban==true)
            {
                echo '
                <!--CICLO-->
                <div class="row" id="tag3">
                    <div class="col"><b>Semestre</b></div>
                    <div class="col"><b>'.$semes.'</b></div>
                </div>
                <br>
            <div class="row" id="tag2">
                <!--HEADER-->
                    <div class="col"><b>No.</b></div>
                    <div class="col"><b>Código</b></div>
                    <div class="col"><b>Materia.</b></div>
                    <div class="col"><b>Creditos</b></div>
                    <div class="col"><b>Calificación</b></div>
            </div>
                ';
                $ban=false;
            }
            $aux1=$aux1+1;
            $field1name = $row["mat_cve_materia"];
            $field2name = $row["mat_nombre"];
            $field3name = $row["mat_creditos"];
            //Campo calculado
            $field4name = ($row["cal_unidad1"]+$row["cal_unidad2"]+$row["cal_unidad3"]+$row["cal_unidad4"]+$row["cal_unidad5"]+$row["cal_unidad6"])/6;
        // Agregar variables al html
            echo '
            <div class="row" id="tag1">
                <div class="col"><p>'.$aux1.'</p></div>
                <div class="col"><p>'.$field1name.'</p></div>
                <div class="col"><p>'.$field2name.'</p></div>
                <div class="col"><p>'.$field3name.'</p></div>
                <div class="col"><p>'.$field4name.'</p></div>
        </div>
            ';
        //CALCULO DE PROMEDIO
        $prom=$prom+$field4name;
        //CALCULO DE TOTAL DE CREDITOS
        if($field4name>70)
            {$cred=$cred+$field3name;}
        $tcred=$tcred+$field3name;
        }
        $result->free();
        if($prom!=0)
        {$prom=$prom/$aux1;}
    } 
    //AGREGAR FILA DE RESULTADOS
    if($prom!=0)
    {
    echo '
        <div class="row" id="tag2">
            <div class="col"><p></p></div>
            <div class="col"><b>Promedio Semestral</b></div>
            <div class="col"><p>'.$prom.'</p></div>
            <div class="col"><b>Créditos Cur./Aprob. </b></div>
            <div class="col"><p>'.$cred.'/'.$tcred.'</p></div>
        </div>
        <div class="row"><div class="col"><p></p></div></div>
        <div class="row"><div class="col"><p></p></div></div>
        <div class="row"><div class="col"><p></p></div></div>
    ';
    }
}
$sem=1;
while ($sem<=13)
{
semes ($sem,$field2name,$mysqli);
$sem=$sem+1;
}

?>