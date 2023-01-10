<?php  
namespace App\Controllers;
  final class AlquilerController extends Model{
    private string $iduser;
    private string $nombre;
    private string $email;
    private string $passwd;
    private int $rolid;
    function __contruct(){
      
    }
    public function index(){
      $titol="daw";
      return view('alquiler',compact('dades'));
    }
    public function error(){
      echo "error";
    }
  }