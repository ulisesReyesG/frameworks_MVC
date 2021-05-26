
<?php
/**
 * Crear el controlador de UsuarioController dentro de la carpeta controllers
 */
class UsuarioController {
	
	public function crear()	{
		require_once 'views/usuarios/crear.php';
	}

	public function guardar () {
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $user->setNombre($_POST['txNombre']);
        $user->setApellido($_POST['txApellido']);
        $user->setEmail($_POST['txEmail']);
        $guardar =$user->Create();
    }

	public function mostrarTodos(){
		require_once 'models/Usuario.php';
		$user= new Usuario();
		$resultUser= $user->mostrarTodos('usuarios');
		require_once 'views/usuarios/mostrar.php';

	}

	public function buscar(){
		require_once 'models/Usuario.php';
		$user = new Usuario();
		$resultUser=$user->mostrarTodos('usuarios');
		require_once 'views/usuarios/eliminar.php';
	}

	public function eliminar(){
     require_once 'models/Usuario.php';

     $user= new Usuario();
		$user->setNombre($_POST['txNombre']);
		$resultUser=$user->borrar();

		

	
	
	}
	public function modificar(){
require_once 'models/Usuario.php';
		$user= new Usuario();
		$resultUser=$user->mostrarTodos('usuarios');
		require_once 'views/usuarios/modificar.php';



	}
	public function actionModificar()
	{
		require_once 'models/Usuario.php';
		$user=new Usuario();
		$user->setNombre($_POST['txNombre']);
		$user->setApellido($_POST['txApellido']);
		$user->setEmail($_POST['txEmail']);
		$user->setNuevoNombre($_POST['txNuevoNombre']);
		$modificar=$user->modificar();
	}
}
?>