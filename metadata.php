<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oespeedkit',
    'title'       => 'OxidEsales Module Speed Kit',
    'description' => 'Implements an interface to Speed Kit',
    'thumbnail'   => 'pictures/logo.png',
    'version'     => '0.1.0',
    'author'      => 'OXID eSales AG',
    'url'         => 'https://www.speedkit.com/',
    'email'       => 'info@oxid-esales.com',
    'extend'      => [ ],
    'controllers' => [ ],
    'templates'   => [ ],
    'events' => [
        'onActivate' => '\OxidEsales\SpeedKit\Core\ModuleEvents::onActivate',
        'onDeactivate' => '\OxidEsales\SpeedKit\Core\ModuleEvents::onDeactivate'
    ],
    'blocks'      => [ ],
    'settings' => [
        /** Main */
        [
            'group' => 'oespeedkit_main',
            'name'  => 'oespeedkit_ScriptURL',
            'type'  => 'str',
            'value' => 'https://example.app.baqend.com/v1/speedkit/install.js?d=production'
        ],
        [
            'group' => 'oespeedkit_main',
            'name'  => 'oespeedkit_LoggerEnabled',
            'type'  => 'bool',
            'value' => false
        ],
        [
            'group' => 'oespeedkit_main',
            'name'  => 'oespeedkit_Timeout',
            'type'  => 'num',
            'value' => 30
            //'value' => 30.5
        ],
        [
            'group'    => 'oespeedkit_main',
            'name'     => 'oespeedkit_Password',
            'type'     => 'password',
            'value'    => 'changeMe',
            'position' => 3
        ]
    ],
];
