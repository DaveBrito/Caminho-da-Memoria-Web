<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index'); // Carrega a view 'app/Views/home.php'
    }
    
    public function perfil()  // Note a letra minúscula
    {
        return view('perfil'); // Corresponde a app/Views/perfil.php
    }
}