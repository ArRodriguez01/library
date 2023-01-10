<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;
  final class RegisterController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="index";
      return view('register',compact('dades'));
    }
    public function register(){
      $mail=$this->request->post('mail');
      $nombre=$this->request->post('username');
      $password=$this->request->post('password');
      $data=["nombre"=>$nombre,"email"=>$mail,"passwd"=>$password,"rol_id"=>"2"];
      $result=$this->qb->insert("users",$data);
      return view('login',compact('dades'));
    }
  }

