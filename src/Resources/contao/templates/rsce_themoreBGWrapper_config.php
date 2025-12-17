<?php

return array(
	'label' => array(
		'Hintergrund-Wrapper [ANFANG]',
		'',
	),
	'types' => array('content'),
	'contentCategory' => 'themore',
	'standardFields' => array('cssID'),
	'wrapper' => array(
		'type' => 'start',
	),
	'fields' => array(

		'containerSize' => array(
			'label' => array('Container-Size', 'Wenn der Artikel auf fullWidth steht, der Inhalt jedoch die definierte Container-Breite haben soll, empfiehlt sich diese Einstellung.'),
			'inputType' => 'checkbox',
			'sql' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'eval' => array(
				'tl_class'=>'w50', 
			),
		),
		
		'maxWidth' => array(
			'label' => array('Individuelle Max-Breite', 'Hier wird die CCS-Eingeschaft max-width vergeben. Hier können Werte wie: 90%, 800px, 60vw, ... vergeben werden.'),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'container_tag' => array(
			'label' => array('Wähle den Wrapper-Tag', 'Je nach Inhalt ist es hierbei ratsam eine alternative zum <div>-Tag zu verwenden. Bei Fragen dazu suche nach "Semantischen HTML Tags".'),
			'inputType' => 'select',
			'options' => array(
				'' => 'div (standard)',
				'section' => 'section',
				'article' => 'article'
			),
			'eval' => array('tl_class' => 'w50'),
		),
		
		'description_clr' => array(
			'label' => array('Hintergrundfarbe', ''),
			'inputType' => 'group',
		),
		
		'bgColorCode' => array(
			'label' => array('Individuelle Hintergrundfarbe', ''),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,
				'colorpicker'=>true,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'bgColorClass' => array(
			'label' => array('Hintergrundfarbe CSS-Klasse', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Kein Hintergrund',
				'bgMain' => 'Hauptfarbe',
				'bgSecond' => 'Zweitfarbe',
				'bgWhite' => 'Weiß',
				'bgLightgray' => 'Hellgrau',
				'bgGray' => 'Grau',
				'bgDarkgray' => 'Dunkelgrau',
				'bgBlack' => 'Schwarz',

			),
			'eval' => array('tl_class' => 'w50'),
		),
		
		'bgSettings' => array(
			'label' => array('Hintergrund Styling', 'Hier können Inline-Styles für den Hintergrund eingegeben werden. background:linear-gradient(red,blue)'),
			'inputType' => 'text',
			'eval' => array(
				'maxlength'=>255
			),
			'sql' => "varchar(255) NOT NULL default ''"
		),		
	
		'description_img' => array(
			'label' => array('Hintergrundbild', ''),
			'inputType' => 'group',
		),
		
		'singleSRC' => array(
			'label' => array('Hintergrund Bild', ''),
			'exclude'   => true,
			'inputType' => 'fileTree',
			'eval'      => array(
				'filesOnly'  => true,
				'fieldType'  => 'radio',
				'extensions' => 'jpg,png,gif,webp,svg',
				'tl_class' => 'cbx clr'
			),
			'sql'       => "binary(16) NULL"
		),
		
		'size' => array(
			'label' => array('Bildbreite und Bildhöhe', ''),
			'inputType' => 'imageSize',
			'options' => Contao\System::getContainer()->get('contao.image.sizes')->getAllOptions(),
			'reference' => &$GLOBALS['TL_LANG']['MSC'],
			'eval' => array(
				'rgxp' => 'digit',
				'includeBlankOption' => true,
			)
		),
	
		'bgImageSettings' => array(
			'label' => array('Hintergrundbild Einstellungen', 'Hier können Inline-Styles für das Hintergrundbild eingegeben werden. left:5%; right: 40%'),
			'inputType' => 'text',
			'eval' => array(
				'maxlength'=>255
			),
			'sql' => "varchar(255) NOT NULL default ''"
		),
		
		'bgImageClass' => array(
			'label' => array('Klasse für das Hintergrundbild', 'Vergebe eine Klasse für das Hintergrundbild'),
			'inputType' => 'text',
			'eval' => array(
				'maxlength'=>255
			),
			'sql' => "varchar(255) NOT NULL default ''"
		),
	
		'description_offset' => array(
			'label' => array('Overlay einbinden ', ''),
			'inputType' => 'group',
		),
		
		'offsetCheck' => array(
			'label' => array('de' => array('Ein farbiges Overlay einfügen','')),
			'default' => 0,
			'inputType' => 'checkbox',
			'eval' => array('tl_class' => 'clr'),
		),
		
		'offsetHeight' => array(
			'label' => array('Höhe des Overlays', 'Trage einen Wert von 1 bis 100 ein'),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,
			),
			'dependsOn' => array(
				'field' => 'offsetCheck',  
				'value' => '1',
			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'offsetPosition' => array(
			'label' => array('Position des Overlays', ''),
			'inputType' => 'select',
			'options' => array(
				'top' => 'Oben',
				'bottom' => 'Unten',
				'center' => 'Mitte',
				'both' => 'Oben und Unten'

			),
			'dependsOn' => array(
				'field' => 'offsetCheck',  
				'value' => '1',
			),
			'eval' => array('tl_class' => 'w50'),
		),
		
		'offsetBgColorCode' => array(
			'label' => array('Individuelle Farbe des Overlays', ''),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,
				'colorpicker'=>true,
			),
			'dependsOn' => array(
				'field' => 'offsetCheck',  
				'value' => '1',
			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
	

	),
);