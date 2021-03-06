<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/hviana/Boavida/user/plugins/vimeo/blueprints.yaml',
    'modified' => 1492286225,
    'data' => [
        'name' => 'Vimeo',
        'version' => '1.0.3',
        'description' => '**Vimeo** is a plugin that converts markdown video links into the [Vimeo](https://vimeo.com) Universal Embed Code.',
        'icon' => 'vimeo',
        'author' => [
            'name' => 'Christian Worreschk',
            'email' => 'cw@marsec.de'
        ],
        'homepage' => 'https://github.com/cworreschk/grav-plugin-vimeo',
        'keywords' => 'vimeo, markdown, video, embed, iframe',
        'bugs' => 'https://github.com/cworreschk/grav-plugin-vimeo/issues',
        'docs' => 'https://github.com/cworreschk/grav-plugin-vimeo/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'general' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_VIMEO.GENERAL',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_VIMEO.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_VIMEO.ENABLED',
                                        0 => 'PLUGIN_VIMEO.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'plugin_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_VIMEO.PLUGIN_CSS',
                                    'help' => 'PLUGIN_VIMEO.PLUGIN_CSS_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_VIMEO.ENABLED',
                                        0 => 'PLUGIN_VIMEO.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'editor_button' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_VIMEO.EDITOR_BUTTON',
                                    'help' => 'PLUGIN_VIMEO.EDITOR_BUTTON_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_VIMEO.ENABLED',
                                        0 => 'PLUGIN_VIMEO.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'player_parameters' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_VIMEO.PLAYER',
                            'fields' => [
                                'player_parameters.autoplay' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_VIMEO.AUTOPLAY',
                                    'help' => 'PLUGIN_VIMEO.AUTOPLAY_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_VIMEO.ENABLED',
                                        0 => 'PLUGIN_VIMEO.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'player_parameters.autopause' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_VIMEO.AUTOPAUSE',
                                    'help' => 'PLUGIN_VIMEO.AUTOPAUSE_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_VIMEO.ENABLED',
                                        0 => 'PLUGIN_VIMEO.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'player_parameters.loop' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_VIMEO.LOOP',
                                    'help' => 'PLUGIN_VIMEO.LOOP_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_VIMEO.ENABLED',
                                        0 => 'PLUGIN_VIMEO.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'player_parameters.player_id' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_VIMEO.PLAYER_ID',
                                    'size' => 'medium',
                                    'help' => 'PLUGIN_VIMEO.PLAYER_ID_HELP'
                                ],
                                'player_parameters.view' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_VIMEO.PLAYER_VIEW',
                                    'text' => 'PLUGIN_VIMEO.PLAYER_VIEW_TEXT',
                                    'underline' => true,
                                    'fields' => [
                                        'player_parameters.title' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_VIMEO.TITLE',
                                            'help' => 'PLUGIN_VIMEO.TITLE_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_VIMEO.ENABLED',
                                                0 => 'PLUGIN_VIMEO.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'player_parameters.portrait' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_VIMEO.PORTRAIT',
                                            'help' => 'PLUGIN_VIMEO.PORTRAIT_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_VIMEO.ENABLED',
                                                0 => 'PLUGIN_VIMEO.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'player_parameters.byline' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_VIMEO.BYLINE',
                                            'help' => 'PLUGIN_VIMEO.BYLINE_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_VIMEO.ENABLED',
                                                0 => 'PLUGIN_VIMEO.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'player_parameters.color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_VIMEO.COLOR',
                                            'help' => 'PLUGIN_VIMEO.COLOR_HELP',
                                            'highlight' => 1,
                                            'default' => '#00adef'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
