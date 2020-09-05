<?php 
class Datos extends CI_Controller
{
    public function index()
    {
        echo "soy el inicio";
    }

    public function nuevo()
    {
        $this->load->view('datos/nuevo');
    }

    public function guardar()
    {
        $nombre= $this->input->get('Nombre');
        $apellido= $this->input->get('Apellido');
        $edad= $this->input->get('Edad');
        $carnet= $this->input->get('Carnet');

        echo "Guardando los datos de: ".$nombre." ".$apellido." con la edad de ".$edad." con CI: ".$carnet;
    }
}

?>