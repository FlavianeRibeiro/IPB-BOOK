<?php
require_once 'model/Amigo.php';

class UsuariosController {
    public function listar(){
        $amigo = new $amigo();
        $amigos = $amigo->listaAll();
        
        $_REQUEST['amigos'] = $amigos;
        
        require_once 'views/amigos/lista.php';
    }
    
}
?>