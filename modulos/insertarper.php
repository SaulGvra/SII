<?php

class GETTINGG
  {
	private $personal;
	private $contra;
	private $sal;
	private $tipo;
	private $Data;


      public function __construct()
      {
		$this->personall = $_POST['personal'];
		$this->contraa = $_POST['contra'];
		$this->sall = $_POST['sal'];
		$this->tipoo = $_POST['tipo'];
          $this->Data = array(
            'personal' => "$this->personall",
            'contra' => "$this->contraa",
            'sal' => "$this->sall",
			'tipo' => "$this->tipoo"
            
        );

          
          self::How_Action($this->Data);
      }

      public function How_Action($Kwargs)
      {
         
          extract($Kwargs);
          require_once 'cn.php';
          $coonect = new CONNECCT();
          $coonect->Con();
        

          if (($personal == '') || ($contra == '') || ($sal == '')|| ($tipo == '')  ) {
              echo '1';
          }

         else {
              
              $Query = "CALL sp_insPersonal('".$personal."','".$contra."','".$sal."','".$tipo."')";
              $coonect->Cons->query($Query);
              echo '2';
          }
      }
  }

  $geting = new GETTINGG();

?>