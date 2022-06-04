<?php

class GETTINGG
  {
	private $nocontrol;
	private $contra;
  private $carrera;
	private $Data;


      public function __construct()
      {
		$this->nocontroll = $_POST['nocontrol'];
		$this->contraa = $_POST['contra'];
    $this->carreraa = $_POST['carrera'];
          $this->Data = array(
            'nocontrol' => "$this->nocontroll",
            'contra' => "$this->contraa",
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
        

          if (($nocontrol == '') || ($contra == '') || ($carrera == '') ) {
              echo '0';
          }

         else {
              
              $Query = "CALL sp_insAlumno('".$nocontrol."','".$contra."','".$carrera."')";
              $coonect->Cons->query($Query);
              echo '1';
          }
      }
  }

  $geting = new GETTINGG();

?>