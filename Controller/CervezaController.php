<?php

//Require Once
require_once './Model/CervezaModel.php';
require_once './Model/ColorModel.php';
require_once './View/CervezasView.php';

class CervezaController{
    //Variables
    private $modelCerveza;

    //Constructor de la clase
    function __construct(){
        $this->modelCerveza = new CervezaModel();
    }

    //Funcion para mostrar el Home
    function showHome(){
        $beers = $this->modelCerveza->GetBeers();
        $this ->view -> displayBeers($beers);
    }

      //Función que agrega al alumno
      public function addBeer(){

        if(isset($_POST['estilo'])&&($_POST['volumen'])&&($_POST['graduacion_alcoholica'])
        &&($_POST['precio'])&&($_POST['cantidad'])&&($_POST['color'])){
            $estilo=($_POST['estilo']);
            $volumen=($_POST['volumen']);
            $graduacion_alcoholica=($_POST['graduacion_alcoholica']);
            $precio=($_POST['precio']);
            $cantidad=($_POST['cantidad']);
            $color=($_POST['color']);

        }      
        $this->model->addAlumno($estilo,$volumen,$graduacion_alcoholica,$precio,
            $cantidad,$color);
        header("Location: " . BEERS);
    }
    //Función que elimina un alumno
    public function deleteBeer($id_cerveza){
        $this->model->deleteBeer($id_cerveza);

        header ("Location: " . BEERS);
    }
   
    public function editBeer(){
        //var_dump($_POST); die;
        if(isset($_POST['estilo'])&&
                ($_POST['volumen'])&&
                ($_POST['graduacion_alcoholica'])&&
                ($_POST['precio'])&&
                ($_POST['cantidad'])&&
                ($_POST['color'])&&
                ($_POST['id_cerveza'])){

            $id_cerveza = ($_POST['id_cerveza']);
            $estilo=($_POST['estilo']);
            $volumen=($_POST['volumen']);
            $graduacion_alcoholica=($_POST['graduacion_alcoholica']);
            $precio=($_POST['precio']);
            $cantidad=($_POST['cantidad']);
            $color=($_POST['color']);

            $this->model->editAlumno ($id_cerveza, $estilo, $volumen, 
            $graduacion_alcoholica, $precio, $cantidad,$color);
            header ("Location: " . BEERS);
        }
    }
}