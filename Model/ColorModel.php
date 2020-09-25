<?php

class CervezaModel{
    
    //Variables
    private $db;

    //Constructor-> le declaro con que base de datos se va a comunicar
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 
        'root', '');
    }
      
      //Me trae los colores de cervezas
      function GetColor(){
          $sentencia = $this->db->prepare("SELECT * FROM color");
          $sentencia->execute();
          $color = $sentencia->fetchAll(PDO::FETCH_OBJ);
          return $color;
      }
      
      //Agrega un nuevo color cerveza
      function InsertBeer($color){
          $sentencia = $this->db->prepare("INSERT INTO cerveza (color) VALUES(?)");
          $sentencia->execute(array($color));
      }
      
      //Elimina una cerveza
      function DeleteColor($id_color){
          $sentencia = $this->db->prepare("DELETE FROM color WHERE id=?");
          $sentencia->execute(array($id_color));
      }
      
      //Edita el color de una cerveza
      function editColor($id_color, $color){
        $sentencia = $this->db->prepare('UPDATE color SET color=?  WHERE id_color=?');
        $sentencia->execute(array($color, $id_color));
      }
    }
?>