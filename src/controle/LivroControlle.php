<?php
require_once 'model/Livro.php';

class UsuariosController {
    public function listar(){
        $livro = new $livro();
        $livros = $livro->listaAll();
        
        $_REQUEST['$livros'] = $livros;
        
        require_once 'views/livro/lista.php';
    }
    
}
?>