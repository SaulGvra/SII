<?php
class GETTING
{
	private $aspirante;
	private $nombre;
	private $paterno;
	private $materno;
	private $fecha;
	private $telefono;
	private $dir;
	private $carrera;

	public function __construct()
	{
		$this->aspirante = $_POST['aspirante'];
		$this->nombre = $_POST['nombre'];
		$this->paterno = $_POST['paterno'];
		$this->materno = $_POST['materno'];
		$this->telefono = $_POST['telefono'];
		$this->dir = $_POST['dir'];
		$this->fecha = $_POST['fecha'];
		$this->carrera = $_POST['carrera'];

		self::How_Action($this->aspirante,$this->nombre,$this->paterno,$this->materno,$this->telefono,$this->dir,$this->fecha,$this->carrera);
	}

	public function How_Action($asp,$nom,$pat,$mat,$tel,$dire,$fec,$car)
	{
		require_once 'cn.php'; 
		

		if(($nom == '')or($pat == '')or($mat == '')or($tel == '')or($dire == '')or($fec == '')or($car == ''))
		{
			echo 1;
		}
		else 
		{
			$ins = "CALL sp_UpdAspirante('".$asp."','".$nom."','".$pat."','".$mat."','".$tel."','".$fec."','".$dir."','".$car."')";
			$resultt = mysqli_query ($Arco,$ins);
			

			if($Arco->affected_rows > 0){ 
				echo 2;
				//una fila afectada se ejecuto correctamente
			}else{
				echo 0;
				
			}
		}
	}
}

$geting = new GETTING();
mysqli_close($Arco);
?>