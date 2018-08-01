<form method="POST" action="<?php echo base_url('/usuario/update')?>">
<?php foreach ($datosUsuario as $value) { ?>
<input type="hidden" name="txtUsuid" value="<?php echo $value->usu_id;?>" >
<div class="form-group">
   <label for="exampleInputEmail1">Perfil</label>
    
   <?php 
   $lista = array();
   foreach ($selPerfil as $registro) {
       $lista[$registro->per_id] = $registro->per_nombre;
    } 
    echo form_dropdown('txtPerid',$lista,$value->per_id, 'class ="form-control"');
    ?>

</div> 

 <div class="form-group">
   <label for="exampleInputEmail1">Nombres</label>
   <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" value="<?php echo $value->usu_nombres; ?>">
 </div>
 <div class="form-group">
   <label for="exampleInputEmail1">Apellidos</label>
   <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" value="<?php echo $value->usu_apellidos; ?>">
 </div>
 <div class="form-group">
   <label for="exampleInputEmail1">Correo Electronico</label>
   <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" value="<?php echo $value->usu_correo; ?>">
 </div>
 <div class="form-group">
   <label for="exampleInputEmail1">Teléfono</label>
   <input type="text" name="txtTeléfono" class="form-control" id="exampleInputEmail1" value="<?php echo $value->usu_telefono; ?>">
 </div>

<?php } ?>
 
 <button type="submit" class="btn btn-default">Actualizar Usuario</button>
</form> 



