<?php 
//que no nos sale como al toni
  namespace App;

  final class Request{
    protected $controller;
    protected $action;
    protected $method;
    protected $params;
    protected $arrURI;

    function __construct(){
      $reqString=\htmlentities($_SERVER['REQUEST_URI']);
      $this->arrURI=explode('/',$reqString);
      array_shift($this->arrURI);
      //var_dump($this->controller);
      //die($this->arrURI);
      $this->extractURI();
      // var_dump($this->controller);
      // var_dump($this->action);
      // die;
      
    }
    public function getController(){
      return $this->controller;
    }
    public function setController($controller){
      $this->controller=$controller;
    }
    public function getAction(){
      return $this->action;
    }
    public function setAction($action){
       $this->action=$action;
    }
    public function setMethod($method){
       $this->method=$method;
    }
    public function getParams(){
      return $this->params;
    }
    public function setParams($array){
      $this->params=$array;
    }
    public function post($field){
            if ($this->method=='POST'){
               return filter_input(INPUT_POST,$field,FILTER_DEFAULT);
            }else return "";
    }
    public function get($field){
       if ($this->method=='GET'){
          return filter_input(INPUT_GET,$field,FILTER_DEFAULT);
       }else return "";
      
    }
    private function extractURI():void{     
            $length=count($this->arrURI);
            //estudi de casos possibles
            switch($length){
                case 1: //only controller
                    if($this->arrURI[0]==""){
                        $this->setController('home');
                      
                    }else{
                        $this->setController($this->arrURI[0]);
                    }
                    $this->setAction('index');
                    break;
                case 2: //controller & action
                    $this->setController($this->arrURI[0]);
                    if($this->arrURI[1]==""){
                        $this->setAction('index');
                    }else{
                        $this->setAction($this->arrURI[1]);
                    }
                break;
                default: // cont. & act & params
                    $this->setController($this->arrURI[0]);
                    $this->setAction($this->arrURI[1]);
                    $this->Params();
                    
                break;
              
            }
       $this->setMethod(\htmlentities($_SERVER['REQUEST_METHOD']));
        }
    private function Params():void{
            if($this->arrURI!=null){
                $arr_length=count($this->arrURI);
                if($arr_length > 2){
                    //quitar contr, y accion
                    array_shift($this->arrURI);
                    array_shift($this->arrURI);
                    $arr_length=count($this->arrURI);
                    if($arr_length % 2 == 0){
                        for($i=0;$i<$arr_length;$i++){  
                            if($i%2 == 0){
                                $arr_k[]=$this->arrURI[$i];
                            }else{
                                $arr_v[]=$this->arrURI[$i];
                            }
                        }
                        $array_res=array_combine($arr_k,$arr_v);
                        $this->setParams($array_res);
                    }

                }

            }
        }
     
      
    
  }