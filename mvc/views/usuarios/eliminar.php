<div class="panel panel-danger col-md-8 col-md-offset-2">
    <div class="panel-heading">
        ELIMINAR USUARIOS</div>
        <div class="panel-body">
            <form action="index.php?controller=UsuarioController&action=eliminar" method="POST" class="form-horizontal">
                
                <hr>
                 <label class="control-label">USUARIO A ELMINAR</label>
                 <input type="form-control" type="text" name="txNombre">
                 <hr>
                  <button class="btn-success" type="submit"> Eliminar </button>  
             </form>
             <div class="alert alert-success">
  <strong>Datos de Usuarios</strong> Registros actuales</div>
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

