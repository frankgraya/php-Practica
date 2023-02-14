<?php

class ClaseSencilla{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';
    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
};
//intancia del objeto
$miObjetoUno = new ClaseSencilla;
//insersion de datos
$miObjetoUno->var = "francisco";
echo $miObjetoUno->var;
?>