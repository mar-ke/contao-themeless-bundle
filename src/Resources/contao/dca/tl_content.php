<?php

// contao/dca/tl_content.php
use Doctrine\DBAL\Platforms\MySQLPlatform;
use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_content']['fields']['more_slider_settings'] = [
	'label' => ['Slider Einstellungen', 'Hier kannst du mehr Parameter für diesen Slider definieren. Siehe: <a href="https://swiperjs.com/swiper-api#parameters" target="blank">Doku von swiper.js</a>'],
		'inputType' => 'textarea',
		'sql' => [
			'type' => 'text',
			'length' => MySQLPlatform::LENGTH_LIMIT_TEXT,
			'notnull' => false,
		],
];

PaletteManipulator::create()
	->addField('more_slider_settings', 'sliderContinuous')

	->applyToPalette('swiper', 'tl_content') 
;