<?php
namespace Helloworld;

class Module{
  public function getConfig(){
    return require __DIR__ . '/config/module.config.php';
  }

  public function getAutoloaderConfig(){
    return [
      'Zend\Loader\StandardAutoloader' => [
        'namespaces' => [__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__],
      ],
      'Zend\Loader\ClassMapAutoloader' => [
        __DIR__ . '/autoload_classmap.php'
      ],
    ];
  }
}
