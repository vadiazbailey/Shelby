<?php

//Llama a la libreria de Smarty
require_once ('./libs/Smarty.class.php');

class AlumnosView{
    //Variables
    private $smarty;

    //Constructor
    public function __construct(){
        //Inicializa smarty
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', BASE_URL); 
    }


}