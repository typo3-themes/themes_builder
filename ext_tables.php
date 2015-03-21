<?php
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		$_EXTKEY, // Extension Key
		'tools', // Category
		'tx_theme_builder_m1', // Module name
		'', // Position
		array( // Controller
			'Build' => 'index,create,list'
		),
		array( # configuration
			'access'  => 'admin',
			'icon'    => 'EXT:' . $_EXTKEY  . '/ext_icon.png',
			'labels'  => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml',
		)
	);
}