<!DOCTYPE HTML>
<html LANG="es">
<head>
    <title>CRUD Prueba </title>
    
    <link href="<?php  echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/jquery.min.js')?>"> </script>
    <script src="<?php echo base_url('public/js/bootstrap.js')?>"> </script>

    
    
</head>

<body>


    <div id="container">

    <div class="col-md-12">
    

    <div class="row">
    <div class="col-md-12">
    <?php
    $this->load->view($contenido);
    ?>
   
   
    </div>
    
    </div>

   
    </div>
    <footer>
    <hr>
    <center>  <a href="<?php echo base_url(); ?>cexcel/dExcel">Exportar Excel</a>  </center>
    <center> Copyright <-- Trabajo para solutoria </center>

    </hr>
    
    </footer>


    </div>



</body>
</html>