<?php
  // Load Config
  require_once 'config/config.php';

// Aoutoload Core Libraries
  spl_autoload_register(function ($className)
  {
      require_once 'libraries/' . $className  .'.php';
  });
