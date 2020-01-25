<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1487112285] = [
    'nodeName' => 'AdditionalInfoPageTitle',
    'priority' => 70,
    'class' => \Susanne\Carl\FormEngine\AdditionalPageTitle::class
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1485351217] = [
    'nodeName' => 'GenerateData',
    'priority' => 30,
    'class' => \Susanne\Carl\FormEngine\FieldControl\GenerateDataControl::class
];
