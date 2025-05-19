<?php
namespace App\Controllers;

class IndexController extends BaseController

// Controller que permite acessar páginas diretamente pela tela Index do site, 
// direcionando para cada caminho único.

{
    //Tela inicial
    public function index()
    {
        return view('index'); 
    }
    
    public function perfil()  
    {
        return view('perfil'); 
    }
     public function memorias()  
    {
        return view('memorias');
    }

      public function loginregister()  
    {
        return view('loginregister'); 
    }

      public function exercicio()  
    {
        return view('exercicio'); 
    }
     public function gerenciarusers()  
    {
        return view('gerenciarusers'); 
    }
}