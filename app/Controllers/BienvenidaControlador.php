<?php
class BienvenidaControlador extends Controller
{ 
    public function iniciar()
    {
        $data = [
            "titulo"    => "Login",
            "subtitulo" => "Ingresar al sistema"
        ];
        $this->view("bienvenida", $data);
    }
   
}