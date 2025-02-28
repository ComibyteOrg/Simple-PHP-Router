<?php 
  require "controller/Routes.php";

// GETTING ALL PAGES 
Router::handle("get","/", "./resources/views/index.php");
Router::handle("get","/login", "./resources/views/login.php");
Router::handle("get","/signup", "./resources/views/signup.php");
Router::handle("post","/signup", "./resources/views/signup.php");
Router::handle("get","/404", "./resources/views/404.php");

Router::dispatch();