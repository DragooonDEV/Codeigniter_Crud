<!DOCTYPE HTML>
<html LANG="es">
<head>
    <title>CRUD Prueba </title>
    <link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/bootstrap.js')?>"> </script>
</head>

<body>

    <header>
    cabeza
    <header>
    <div id="container">

    <div class="col-md-5">

    <?php
    $this->load->view($contenido);
    ?>
    </div>
    </div>
    <footer>
    
    </footer>


</body>
</html>