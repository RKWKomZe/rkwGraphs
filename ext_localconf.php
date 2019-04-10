<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.RkwGraphs',
            'Graphs',
            [
                'Graphs' => 'donut, bars, candlesticks'
            ],
            // non-cacheable actions
            [
                'Graphs' => ''
            ]
        );
    },
    $_EXTKEY
);
