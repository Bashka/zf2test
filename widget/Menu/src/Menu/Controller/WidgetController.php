<?php
namespace Menu\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;

class WidgetController extends AbstractActionController{
  public function indexAction(){
    return new ViewModel([
        'widgetData' => 'test'
      ]);
  }
}
