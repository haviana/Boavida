<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/hviana/Boavida/user/config/plugins/email.yaml',
    'modified' => 1475325400,
    'data' => [
        'enabled' => true,
        'from' => 'geral@cervejaboavida.pt',
        'from_name' => 'hugohaviana',
        'to' => 'geral@cervejaboavida.pt',
        'to_name' => 'hviana',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'teste',
                'password' => 'teste'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
