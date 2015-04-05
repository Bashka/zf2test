<?php
return [
  'view_manager' => [
    'template_path_stack' => [__DIR__ . '/../view'],
  ],
  'controllers' => [
    'invokables' => [
      'Menu\Controller\Widget' => 'Menu\Controller\WidgetController',
    ],
  ],
];
