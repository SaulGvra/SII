<?php

class GETTINGG
  {
	private $nocontrol;
	private $contra;
	private $especialidad;
	private $estatus;
  private $carrera;
	private $Data;


      public function __construct()
      {
		$this->nocontroll = $_POST['nocontrol'];
		$this->contraa = $_POST['contra'];
		$this->especialidadd = $_POST['esp'];
		$this->estatuss = $_POST['estatus'];
    $this->carreraa = $_POST['carrera'];
          $this->Data = array(
            'nocontrol' => "$this->nocontroll",
            'contra' => "$this->contraa",
            'especialidad' => "$this->especialidadd",
            'estatus' => "$this->estatuss",
            'carrera' => "$this->carreraa"
            
        );

          
          self::How_Action($this->Data);
      }

      public function How_Action($Kwargs)
      {
         
          extract($Kwargs);
          require_once 'cn.php';
          $coonect = new CONNECCT();
          $coonect->Con();
        

          if (($nocontrol == '') || ($contra == '') || ($especialidad == '')|| ($estatus == '') || ($carrera == '') ) {
              echo '1';
          }

         else {
              
              $Query = "CALL sp_insAlumno('".$nocontrol."','".$contra."','".$especialidad."','".$estatus."','".$carrera."')";
              $coonect->Cons->query($Query);
              echo '2';
          }
      }
  }

  $geting = new GETTINGG();

?>