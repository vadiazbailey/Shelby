<?php

class CervezaModel{
    
    //Variables
    private $db;

    //Constructor-> le declaro con que base de datos se va a comunicar
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 'root', '');
    }
      
      //Me trae todas las cervezas
      function GetBeers(){
          $sentencia = $this->db->prepare("SELECT * FROM cerveza");
          $sentencia->execute();
          $cervezas = $sentencia->fetchAll(PDO::FETCH_OBJ);
          return $cervezas;
      }
      
      //Agrega una nueva cerveza
      function InsertBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, 
                        $color){
          $sentencia = $this->db->prepare("INSERT INTO cerveza (estilo, volumen, 
          graduacion_alcoholica, precio, cantidad, id_color) VALUES(?,?,?,?,?,?)");
          $sentencia->execute(array($estilo, $volumen, $graduacion_alcoholica, $precio, 
                                    $cantidad, $color));
      }
      
      //Elimina una cerveza
      function DeleteBeer($cerveza_id){
          $sentencia = $this->db->prepare("DELETE FROM cerveza WHERE id=?");
          $sentencia->execute(array($cerveza_id));
      }
      
      //Edita una cerveza
      function editBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, 
      $color){
        $sentencia = $this->db->prepare('UPDATE cerveza SET estilo=?, volumen=?, 
        graduacion_alcoholica=?, precio=?, cantidad=?, id_color=?  WHERE id_cerveza=?');
        $sentencia->execute(array($estilo, $volumen, $graduacion_alcoholica, $precio,
                            $cantidad, $color));
      }
    }
?>
