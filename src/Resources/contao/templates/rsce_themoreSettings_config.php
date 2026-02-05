<?php

use Doctrine\DBAL\Platforms\MySQLPlatform;

return array(
	'label' => ['themeless Setting', ''] ,
    'types' => ['content'],
    'contentCategory' => 'themore',
	'fields' => [
	
		'loadwowjs' => [
			'label' => ['WOW JS laden', 'Dafür muss die Erweitung: inspiredminds/contao-wowjs geladen werden'],
			'inputType' => 'checkbox',
			'sql' => [
				'type' => 'boolean',
				'default' => false,
			],
		],
			
		'cssFiles' => [
			'label' => ['Zusätzliche CSS Dateien', ''],
			'exclude' => true,
			'inputType' => 'fileTree',
			'eval' => [
				'fieldType' => 'checkbox',
				'files' => true,
				'multiple' => true,
				'extensions' => 'css',
			],
			'sql' => [
				'type' => 'blob',
				'length' => MySQLPlatform::LENGTH_LIMIT_BLOB,
				'notnull' => false,
			],
		],

	],
);