<?php 
    class UsuarioController  
    {
        public function mostrarTodos(){
            require_once 'model/usuario.php';
            $usuario = new usuario();
            $todos_los_usuarios = $usuario->conseguirtodos();
            require_once 'view/usuario/mostrar-todos.php';
        }

        public function crear(){

        }
    }
    
?>