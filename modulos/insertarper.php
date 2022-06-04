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
		$this->tipoo = $_POST['tipo'];
          $this->Data = array(
            'personal' => "$this->personall",
            'contra' => "$this->contraa",
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
        

          if (($personal == '') || ($contra == '')|| ($tipo == '')  ) {
              echo '0';
          }

         else {
              
              $Query = "CALL sp_insPersonal('".$personal."','".$contra."','".$tipo."')";
              $coonect->Cons->query($Query);
              header('Location: ' . $_SERVER['HTTP_REFERER']);
          }
      }
  }

  $geting = new GETTINGG();

?>