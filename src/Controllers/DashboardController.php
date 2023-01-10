<?php
namespace App\Controllers;
  final class DashboardController{
    function __contruct(){
      
    }
    public function index(){
      $titol="daw";
      return view('dashboard',compact('dades'));
    }
    public function error(){
      echo "error";
    }
  }