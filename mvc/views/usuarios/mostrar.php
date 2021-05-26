<div class="panel panel-primary col-md-6 col-md-offset-2">
    <div class="container">
            <label class="control-label">LISTA DE USUARIOS</label>
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
