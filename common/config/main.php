<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name'=>'JBI33',
    'id' => 'advanced',
    'components' => [
        'db' => require(dirname(__DIR__)."/config/db.php"),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
