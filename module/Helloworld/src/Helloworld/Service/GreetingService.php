<?php
namespace Helloworld\Service;

class GreetingService{
  public function getGreeting(){
    $date = date('H');
    if($date < 11){
      return 'Good morning!';
    }
    elseif($date < 17){
      return 'Hello world!';
    }
    else{
      return 'Good evening!';
    }
  }
}
