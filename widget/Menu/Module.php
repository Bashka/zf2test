<?php
namespace Menu;

class Module{
  public function getConfig(){
    return require __DIR__ . '/config/module.config.php';
  }

  public function getAutoloaderConfig(){
    return [
      'Zend\Loader\StandardAutoloader' => [
        'namespaces' => [__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__],
      ],
    ];
  }
}
