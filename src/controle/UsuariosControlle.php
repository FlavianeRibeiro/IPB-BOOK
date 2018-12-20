<?php
require_once 'model/Usuarios.php';

class UsuariosController {
    public function listar(){
        $usuario = new $usuario();
        $usuarios = $usuario->listaAll();
        
        $_REQUEST['usarios'] = $usuarios;
        
        require_once 'views/amigos/lista.php';
    }
    
}
?>