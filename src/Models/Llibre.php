<?php

namespace App;   

class Llibre extends iModel{
  private string $isbn;
  private string $autor;
  private string $titol;
  private string $editorial;
  private ? string $edicio;

  public function setIsbn($isbn){
    $this->isbn=$isbn;
  }
  public function setAutor($autor){
    $this->autor=$autor;
  }
  public function setTitol($titol){
    $this->titol=$titol;
  }
  public function setEdicio($edicio){
    $this->edicio=$edicio;
  }

  public function getIsbn(){
    return $this->isbn
  }
  public function getAutor(){
    return $this->autor
  }
  public function getTitol(){
    return $this->titol
  }
  public function getEdicio(){
    return $this->edicio
  }

   public function select($campos=[]){
     $this->service('db')->select($campos)
   }
  public function insert($campos=[],$values=[]){
    $this->service('db')->insert($campos)
  }
}