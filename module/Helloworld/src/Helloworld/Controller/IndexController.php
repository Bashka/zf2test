<?php
namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController{
  private $gs;

  public function setGreetingService($gs){
    $this->gs = $gs;
  }

  public function indexAction(){
    $widget = $this->forward()->dispatch('Menu\Controller\Widget');

    $page = new ViewModel([
      'greeting' => $this->gs->getGreeting(),
      'currentDate' => $this->currentDate()
    ]);

    $page->addChild($widget, 'widget');

    return $page;
  }
}
