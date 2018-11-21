<?php

/*
 * Здесь я описываю конфигурацию источников данных и
 * работу с конкрентным поставщиком данных 
 */

return [
    
    'queueSource' => [
        'cacheSource',
        'dbSource',
        'externalSource',
    ],
    
    'components' => [

      'dbSource' => [ 
          'class' => '\Db',  
          'dsn' => '',
          'username' => '', 
          'password' => '', 
          'charset' => '',
      ], 

      'cacheSource' => [           
          'class' => '\Memcache',
          'host' => '127.0.0.1',
          'port' => 11211,
          'weight' => 100,
      ],

      'externalSource' => [           
          'class' => '\External',
          'host' => 'www.host.ru/currency',
      ],      
  ]
];