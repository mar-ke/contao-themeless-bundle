<?php

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
		

	],
);