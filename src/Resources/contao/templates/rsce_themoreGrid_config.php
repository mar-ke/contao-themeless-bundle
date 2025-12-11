<?php

return array(
	'label' => array(
		'Grid-Wrapper [ANFANG]',
		'',
	),
    'types' => array('content'),
    'contentCategory' => 'themore',
	'standardFields' => array('cssID'),
	'beTemplate' => 'be_rsce_themoreGrid', 
	'wrapper' => array(
		'type' => 'start',
	),
	'fields' => array(
		'grid' => array(
			'label' => array('Grid für Desktop-Größe auswählen', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Eine Spalte',
				'grid2Col' => 'Zwei Spalten',
				'grid3Col' => 'Drei Spalten',
				'grid4Col' => 'Vier Spalten',
				'grid5Col' => 'Fünf Spalten',
				'grid6Col' => 'Sechs Spalten',
				'grid-66-33' => 'Zwei Spalten (66% 33%)',
				'grid-33-66' => 'Zwei Spalten (33% 66%)',
				'grid-75-25' => 'Zwei Spalten (75% 25%)',
				'grid-25-75' => 'Zwei Spalten (25% 75%)'
			),
			'eval' => array('tl_class' => 'w50'),
		),
		'gridTablet' => array(
			'label' => array('Grid für Tablet-Größe auswählen', ''),
			'inputType' => 'select',
			'options' => array(
				'grid1ColTablet' => 'Eine Spalte',
				'grid2ColTablet' => 'Zwei Spalten',
				'grid3ColTablet' => 'Drei Spalten',
				'grid4ColTablet' => 'Vier Spalten',
				'grid5ColTablet' => 'Fünf Spalten',
				'grid6ColTablet' => 'Sechs Spalten',
				'grid-66-33Tablet' => 'Zwei Spalten (66% 33%)',
				'grid-33-66Tablet' => 'Zwei Spalten (33% 66%)',
				'grid-75-25Tablet' => 'Zwei Spalten (75% 25%)',
				'grid-25-75Tablet' => 'Zwei Spalten (25% 75%)'
			),
			'eval' => array('tl_class' => 'w50'),
		),
		'gridSmartphone' => array(
			'label' => array('Grid für Smartphone-Größe auswählen', ''),
			'inputType' => 'select',
			'options' => array(
				'grid1ColSmartphone' => 'Eine Spalte',
				'grid2ColSmartphone' => 'Zwei Spalten',
				'grid3ColSmartphone' => 'Drei Spalten',
				'grid4ColSmartphone' => 'Vier Spalten',
				'grid5ColSmartphone' => 'Fünf Spalten',
				'grid6ColSmartphone' => 'Sechs Spalten',
				'grid-66-33Smartphone' => 'Zwei Spalten (66% 33%)',
				'grid-33-66Smartphone' => 'Zwei Spalten (33% 66%)',
				'grid-75-25Smartphone' => 'Zwei Spalten (75% 25%)',
				'grid-25-75Smartphone' => 'Zwei Spalten (25% 75%)'
			),
			'eval' => array('tl_class' => 'w50'),
		),
		'placeContent' => array(
			'label' => array('Inhalt ausrichten', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Ausrichtung wählen',
				'baseline' => 'Oben',
				'center' => 'Mitte',
				'end' => 'unten',
			),
			'eval' => array('tl_class' => 'w50'),
		),
        'gridFaktor' => array(
            'label' => array('Grid-Faktor', 'Gebe eine Zahl ein, die mit der Grid-Gap multipliziert wird. z.B. 0 für kein Grid-Gap, 2 für einen großen Abstand '),
            'eval' => array('rgxp' => 'prcnt', 'tl_class' => 'clr'),
            'inputType' => 'text',
            'default' => 1,
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
	),
);