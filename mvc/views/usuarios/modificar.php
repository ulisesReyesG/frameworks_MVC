<div class="panel panel-success col-md-8 col-md-offset-2">
    <div class="panel-heading">
        EDITAR USUARIOS</div>
        <div class="panel-body">
            <form action="index.php?controller=UsuarioController&action=ActionModificar" method="POST" class="form-horizontal">
                <label class="control-label">NOMBRE DE USUARIO A MODIFICAR</label>
                <input class="form-control" type="text" name="txNombre">
                <hr>
    <label class="control-label">Nombre nuevo</label>
	<input class="form-control" type="text" name="txNuevoNombre">
	<label class="control-label">Nuevo Apellido</label>
	<input class="form-control" type="text" name="txApellido">
	<label class="control-label">Nuevo correo</label>
	<input class="form-control" type="text" name="txEmail">
	<hr>
                 
                  <button class="btn-success" type="submit"> Modificar </button>  
             </form>

             <div class="alert alert-info">
  <strong>Datos de Usuarios!</strong>REGISTROS ACTUALES
</div>

       <table class="table table-hover">
        <tr>
            
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CORREO</td>
        </tr>

        <?php

        while ($user = $resultUser->fetch_object()): ?> 
            <tr>
                
                <td> <?=$user->nombre?></td>
                <td> <?=$user->apellido?> </td>
                <td> <?=$user->email?> </td>
            </tr>
            <?php endwhile; ?>

            
            </table>


            </div>
 