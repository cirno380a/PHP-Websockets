<?php

/**
 *  @param string $className 类名
 *  @return void
 */

function autoloader($className) {
  $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
  $file = LIB_PATH . DIRECTORY_SEPARATOR . $path . '.php';
  if (file_exists($file)) {
    require_once $file;
  }
}

spl_autoload_register('autoloader');
