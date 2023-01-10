<?php

  //$dotenv=\Dotenv\Dotenv::createImmutable(__DIR__);
  //$dotenv->load();

  use App\Container;
  use App\Database\QueryBuilder;
  use App\Database\Connection;
  Container::bind('config',require 'config.php');
  Container::bind('query',new QueryBuilder(Connection::make(Container::get('config')))); 