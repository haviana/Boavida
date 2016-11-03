<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/hviana/Boavida/user/config/plugins/email.yaml',
    'modified' => 1477310708,
    'data' => [
        'enabled' => true,
        'from' => 'geral@cervejaboavida.pt',
        'from_name' => 'hugohaviana',
        'to' => 'geral@cervejaboavida.pt',
        'to_name' => 'hviana',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'none',
                'user' => 'cefisys@gmail.com',
                'password' => 'Efisisdht2015'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
