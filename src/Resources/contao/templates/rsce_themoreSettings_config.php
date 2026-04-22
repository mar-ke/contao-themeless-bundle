<?php

use Doctrine\DBAL\Platforms\MySQLPlatform;
use Doctrine\DBAL\Platforms\AbstractMySQLPlatform;

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
		
		'headTags' => [
			'label' => ['Zusätzliche Head-Tags', ''],
			'inputType' => 'textarea',
			'eval' => [
				'useRawRequestData'=>true, 
				'class'=>'monospace', 
				'rte'=>'ace|html', 
				'helpwizard'=>true,
			],
			'sql' => [
				'type'=>'text', 
				'length'=>AbstractMySQLPlatform::LENGTH_LIMIT_MEDIUMTEXT, 
					'notnull'=>false
			],
		],

	],
);