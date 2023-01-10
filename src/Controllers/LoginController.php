<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;
  final class LoginController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="index";
      return view('login',compact('dades'));
    }
    public function login(){
      $username=$this->request->post('username');
      $password=$this->request->post('password');
      $this->auth($username,$password);
    }
    public function error(){
      echo "error";
    }
    private function auth(string $username,string $password){
      $result=$this->qb->select(['*'])->table('users')
        ->where(['nombre'=>$username])->execute()->fetch()[0];
      if(password_verify($password,$result->passwd)){
        $this->redirect('/dashboard');
      }else{
        $this->redirect('/home');
      }
    }
    
  }