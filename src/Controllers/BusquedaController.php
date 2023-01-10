<?php
namespace App\Controllers;
  final class BusquedaController{
    function __contruct(){
      
    }
    public function index(){
      $titol="daw";
      return view('busqueda',compact('dades'));
    }
    public function error(){
      echo "error";
    }
  }