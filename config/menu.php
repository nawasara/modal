<?php

$prefix = 'nawasara-modal';
return [
    [
        'label' => 'Modal',
        'icon' => 'heroicon-o-users',
        'url' => $prefix.'/users',
        'permission' => $prefix.'.view-users',
        'submenu' => [
            [
                'label' => 'Modal 1',
                'icon' => 'heroicon-o-list-bullet',
                'url' => '',
                'permission' => $prefix.'.view-users',
            ],
            [
                'label' => 'Modal 2',
                'icon' => 'heroicon-o-key',
                'url' => '',
                'permission' => $prefix.'.view-roles',
            ],
        ],
    ],
];
