<?php

include_once './Model/CervezaModel.php';
include_once './Model/ColorModel.php';

class BeerController{
    private $beerModel;
    private $colorModel;
    private $beerView;

  function __construct(){
      $this->beerModel = new CervezaModel();
      $this->colorModel = new ColorModel();
      $this->beerView = new CervezasView();

 }

 function showCerveza(){
     $beer = $this->beerModel->GetBeers();
     $this->beerView->showBeer($beer);
     
 }

}