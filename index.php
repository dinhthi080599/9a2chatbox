<?php

    // require_once './vendor/autoload.php';
    // use Kreait\Firebase\Factory;
    // use Kreait\Firebase\ServiceAccount;
    // $factory = (new Factory)->withServiceAccount(__DIR__.'\secret\php-chatbox-db56b54a27d8.json');
    // $database = $factory->createDatabase();

    // die(print_r($database));

    ############################endregion

    require_once './User.php';
    if (isset($_GET['controller'])) {
      $controller = $_GET['controller'];
      if (isset($_GET['action'])) {
          $action = $_GET['action'];
        } else {
          $action = 'chat';
        }
      } else {
        $controller = 'chat';
        $action = 'home';
      }
      require_once('routes.php');
?>