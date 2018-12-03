<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {

    /**
     * ContentElementWizard for Pi1
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:powermail_cond/Configuration/TSConfig/WebList.typoscript">'
    );

    /**
     * Include Plugins
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'In2code.powermail_cond',
        'Pi1',
        [
            'Condition' => 'buildCondition'
        ],
        [
            'Condition' => 'buildCondition'
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['In2code\\Powermail\\Domain\\Validator\\InputValidator'] = [
        'className' => \In2code\PowermailCond\Domain\Validator\ConditionAwareValidator::class
    ];
});
