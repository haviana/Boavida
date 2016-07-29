<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/hviana/Boavida/user/plugins/simple_form/blueprints.yaml',
    'modified' => 1469561112,
    'data' => [
        'name' => 'Simple Form',
        'version' => '1.3.2',
        'description' => 'This plugin add simple form working with webservice [Simple Form](http://getsimpleform.com) and sending email from your **Grav site**.',
        'icon' => 'envelope-o',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-simple_form',
        'keywords' => 'getsimpleform, form, contact, plugin, jquery, ajax',
        'bugs' => 'https://github.com/nunopress/grav-plugin-simple_form/issues',
        'docs' => 'https://github.com/nunopress/grav-plugin-simple_form/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SIMPLE_FORM.ADMIN.BLUEPRINTS.GLOBAL.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_SIMPLE_FORM.ADMIN.BLUEPRINTS.GLOBAL.ENABLED',
                        0 => 'PLUGIN_SIMPLE_FORM.ADMIN.BLUEPRINTS.GLOBAL.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
