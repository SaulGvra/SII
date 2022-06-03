

    <div class="principal container-fluid">
        <div class="container">
            <br><br>
            <h1>RESULTADOS DE CALIFICACIONES</h1>
            <br>
                                    <div class="row align-items-center paddTop5">
                                        <div class="col-3">
                                            <center><h3><b>Consulta de Boletas</b></h3></center>
                                            <br>
<?php
$control = '18200759';
$semestre = '8';
echo '
                                            <h5>No. Control '.$control.'</h5>
                                            <hr class="col">
                                            <h5>Semestre: '.$semestre.'</h5>
';
?>
                                            <hr class="col">
                                            <div class="container">
                                            </div>
                                            <div class="container">
                                            <br>
                                                <button class="w-100 btn btn-primary btn-lg" id="registrar" onclick="window.location.href='index.php?name=true'">Consultar</button>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                        
<?php
    
    function calcular($control)
    {
        include('conexion.php');
        $query = "select * from kardex3 where alu_cve_nocontrol='".$control."' and mat_semestre='8';";
        $ban=true;
        if ($result = $mysqli->query($query)) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                if($ban==true)
                {
                    echo '
                <div class="row" id="tag2">
                    <!--HEADER-->
                        <div class="col"><b>Materia</b></div>
                        <div class="col"><b>Creditos</b></div>
                        <div class="col"><b>Calificación</b></div>
                        <div class="col"><b>Acreditada</b></div>
                </div>
                    ';
                    $ban=false;
                }
                $mater = $row["mat_nombre"];
                $cred = $row["mat_creditos"];
                $calif = ($row["cal_unidad1"]+$row["cal_unidad2"]+$row["cal_unidad3"]+$row["cal_unidad4"]+$row["cal_unidad5"]+$row["cal_unidad6"])/6;
                if($calif>70)
                    {$resul='Aprobada';}
                else
                    {$resul='Reprobada';}
                echo '
                <div class="row" id="tag1">
                    <div class="col"><p>'.$mater.'</p></div>
                    <div class="col"><p>'.$cred.'</p></div>
                    <div class="col"><p>'.$calif.'</p></div>
                    <div class="col"><p>'.$resul.'</p></div>
                </div>
                ';
            }
            $result->free();
        }
    } 
    if (isset($_GET['name'])) {
        calcular($control);
    }
?>

                                            </div>

                                        </div>
                                    </div>    
        </div>
    </div>
</div>