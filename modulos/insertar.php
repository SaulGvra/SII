<?php

class GETTINGG
  {
	private $aspirante;
	private $nip;
	private $carrera;
	private $Data;


      public function __construct()
      {
		$this->aspirant = $_POST['aspirante'];
		$this->nipp = $_POST['nip'];
		$this->carrer = $_POST['carrera'];
          $this->Data = array(
            'aspirante' => "$this->aspirant",
            'nip' => "$this->nipp",
            'carrera' => "$this->carrer"
            
        );

          
          self::How_Action($this->Data);
      }

      public function How_Action($Kwargs)
      {
         
          extract($Kwargs);
          require_once 'cn.php';
          $coonect = new CONNECCT();
          $coonect->Con();
        

          if (($aspirante == '') || ($nip == '') || ($carrera == '') ) {
              echo '1';
          }

         else {
              //echo $Name. " ". $Name1." ".$LaName." ".$LaName1." ".$Uss. " ".$Ml." ".$Ae." "." ".$G;
              $Query = "CALL sp_insAspirante('".$aspirante."','".$nip."','".$carrera."')";
              $coonect->Cons->query($Query);
              header('Location: ' . $_SERVER['HTTP_REFERER']);

          }
      }
  }

  $geting = new GETTINGG();

?>