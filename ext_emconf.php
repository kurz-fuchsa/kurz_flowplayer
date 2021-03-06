<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "kurz_flowplayer"
 *
 * Auto generated by Extension Builder 2021-07-19
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'FAL flowplayer Driver',
    'description' => 'Provides an extended local driver for the TYPO3 File Abstraction Layer (FAL) with the possibility to use the flowplayer API.',
    'category' => 'driver',
    'author' => 'Alexander Fuchs',
    'author_email' => 'alexander.fuchs@kurz.de',
    'state' => 'beta',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '10.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
