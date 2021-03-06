<?php

//Llama a la libreria de Smarty
require_once './libs/Smarty.class.php';

class CervezasView{
    //Variables
    private $smarty;

    //Constructor
    public function __construct(){
        //Inicializa smarty
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', BASE_URL); 
    }

    //Me muestra el home
    function showBeers($beers){
        $this->smarty->assign('BEERS', 'BEERS');
        $this->smarty->assign('beers', '$beers');
        $this ->smarty-> display('templates/listadoBeers.tpl');
    }
    
    function showBeer($beer){
        $this->smarty->assign('cervezas', $beer); 
        $this->smarty->display('table.tpl'); 
    }


}