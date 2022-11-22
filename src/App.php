<?php 

namespace App;

use App\Request;

  final class App{
    protected Request $request;

    function __construct(){
      //iniciar sesión
      //obtener controlador
      $this->request = new Request();
      $controller=$this->request->getController();
      $action=$this->request->getAction();
      //var_dump($controller);
      //var_dump($action);
      $this->dispatch($controller);
    }  
    public function dispatch($controller){
      try{
        $nameController='\\App\Controllers\\'.ucfirst($controller).'Controller';
        $objContr=new $nameController;
        //var_dump($objContr);
        if(method_exists($objContr,$this->request->getAction())){
          call_user_func([$objContr,$this->request->getAction()]);
        }
        else{
          call_user_func([$objContr,'error']);
        }
        // die($nameController);
      }catch(\Exception $e){
        die($e->getMessage());
      }
    }
  }
