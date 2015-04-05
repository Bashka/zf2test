<?php
return [
  'view_manager' => [
    'template_path_stack' => [__DIR__ . '/../view'],
  ],
  'router' => [
    'routes' => [
      'sayhello' => [
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => [
          'route' => '/sayhello',
          'defaults' => [
            'controller' => 'Helloworld\Controller\Index',
            'action' => 'index',
          ],
        ],
      ],
    ],
  ],
  'controllers' => [
    'factories' => [
      'Helloworld\Controller\Index' => function($sl){
        $ctr = new Helloworld\Controller\IndexController;
        $ctr->setGreetingService(
          $sl->getServiceLocator()
             ->get('greetingService')
        );
        return $ctr;
      },
    ],
    'invokables' => [
      'Helloworld\Controller\Widget' => 'Helloworld\Controller\WidgetController',
    ],
  ],
  'controller_plugins' => [
    'invokables' => [
      'currentDate' => 'Helloworld\Controller\Plugin\CurrentDate',
    ],
  ],
  'service_manager' => [
    'invokables' => [
      'greetingService' => 'Helloworld\Service\GreetingService',
    ],
  ],
  'view_helpers' => [
    'invokables' => [],
  ],
];
