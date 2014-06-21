<?php
if (TYPO3_MODE === 'BE') {
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY, // Extension Key
		'tools', // Category
		'tx_theme_builder_m1', // Module name
		'', // Position
		array( // Controller
			'Build' => 'index,create,list'
		),
		array( # configuration
			'access'  => 'admin',
			'icon'    => 'EXT:' . $_EXTKEY  . '/ext_icon.gif',
			'labels'  => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml',
		)
	);
}