<?php

  namespace App\Models;
  use App\Database|QueryBuilder;
  use App\Container;

abstract class Model{
  protected QueryBuilder $qb;
  protected string $table;
  protected array $data;
  protected int $id;

  public function __construct(){
    $reflect =new \ReflectionClass($this);
    $this->table=strtolower($reflect->getShortName().'s');
    $this->qb=Container::get('query');
    $this->qb->setTable($this->table);
  }
  

  
    
  }