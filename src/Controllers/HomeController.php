<?php
namespace App\Controllers;
  final class HomeController{
    function __contruct(){
      
    }
    public function index(){
      $titol="daw";
      return view('home',compact('dades'));
    }
    public function error(){
      echo "error";
    }
  }