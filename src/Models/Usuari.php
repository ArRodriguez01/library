<?php

  namespace App;  
  class Usuari implements iModel{
    private string $iduser;
    private string $nombre;
    private string $email;
    private string $passwd;
    private int $rolid;

    public function setIduser($iduser){
      $this->iduser=$iduser;
    }
    public function setNombre($nombre){
      $this->nombre=$nombre;
    }
    public function setEmail($email){
      $this->email=$email;
    }
    public function setPasswd($passwd){
      $this->passwd=$passwd;
    }
    public function setRolid($rolid){
      $this->rolid=$rolid;
    }
    public function getIduser(){
      return $this->iduser;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getPassword(){
      return $this->password;
    }
    public function getRolid(){
      return $this->rolid;
    }
    public function select(){
      
    }
    public function insert(){
      hola que tal como estamos 
    }
  }
