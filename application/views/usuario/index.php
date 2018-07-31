<!-- CRUD USUARIO -->

<h1>FORMULARIO DE REGISTRO</h1>

<form method="POST" action="<?php echo base_url('usuario/insert')?>">
 <div class="form-group">
    <label for="exampleInputEmail1">Perfil</label>
    <select name="txtIdper" class="form-control">
    <?php foreach ($selPerfil as $value) { ?>
    <option value="<?php echo $value->per_id?>"> <?php echo $value->per_nombre; ?></option>
    <?php } ?>
    </select>
 </div> 

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" placeholder="Nombres">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" placeholder="Apellidos">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo Electronico</label>
    <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="Correo">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Teléfono</label>
    <input type="text" name="txtTeléfono" class="form-control" id="exampleInputEmail1" placeholder="Teléfono">
  </div>


  
  <button type="submit" class="btn btn-default">Registrar Usuario</button>
</form>