<!-- CRUD USUARIO -->

<h1>PRUEBA CON CRUD</h1>

<div>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">REGISTRO</a></li>
  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">CONSULTA</a></li>
  </ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home"></div>

<table class="table table-hover">
  <thead>
  <Center>
<th>ID</th>
<th>Perfil</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Correo</th>
<th>Telefono</th>
<th>Acciones</th>
</center> 
</thead>
<tbody>
  <?php foreach ($listaUsuario as $value) { ?>
    <tr>
      <td><?php echo $value->usu_id; ?></td>
      <td><?php echo $value->per_nombre; ?></td>
      <td><?php echo $value->usu_nombres; ?></td>
      <td><?php echo $value->usu_apellidos; ?></td>
      <td><?php echo $value->usu_correo; ?></td>
      <td><?php echo $value->usu_telefono; ?></td>
      <td>
      <center>
      <a href="<?php echo base_url('usuario/delete/').$value-> usu_id; ?>" title="Eliminar"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      <a href="<?php echo base_url('usuario/edit/').$value-> usu_id; ?>" title="Modificar">  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
      </center> 
      </td>
    </tr>
  <?php }?>
</tbody>
 
</table>


  <div role="tabpanel" class="tab-pane" id="profile">
  <div class="row">
    <div class="col-md-7"> 
    <form method="POST" action="<?php echo base_url('/usuario/insert')?>">

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




    </div>
    <div class="col-md-5"> </div>
  


  </div>

</div>

</div>



