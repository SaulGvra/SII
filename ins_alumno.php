<!DOCTYPE html>
<?php
    session_start();
?>
<html>
        <head>
            <!-- Required meta tags -->
            
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- Bootstrap CSS -->

            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/estilos-fonts.css" rel="stylesheet">
            <link href="css/estilos.css" rel="stylesheet">
            <link href="css/estilos-sidebar.css" rel="stylesheet">
            <link href="css/estilos-sidebarDp.css" rel="stylesheet">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/regular.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            

            <title>SII</title>
        </head>
    <body>
        <!-- ------------------------ Header ----------------------- -->

        <?php
        include('comp/header.php')
        ?>

        <!-- ---------------------Sidebar----------------------- -->

        <?php
        include('comp/sidebar_admin.php')
        ?>

        <!-- ---------------------Modulo----------------------- -->
                             
                          
        <?php
          include('modulos/registro_alumno.php')
          ?>    
              
                  
              <!-- ---------------------Footer----------------------- -->
          <?php
          include('comp/footer.php')
          ?> 

        <!-- ----------------------Scripts------------------------- -->

                <script src="js/sidebaran.js"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script> 
                <link href="css/modulos.css" rel="stylesheet">

    </body>

</html>