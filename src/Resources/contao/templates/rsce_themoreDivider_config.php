<?php

return array(
	'label' => array(
		'Trenner',
		'',
	),
    'types' => array('content'),
    'contentCategory' => 'themore',
	'standardFields' => array('cssID'),
	
	'fields' => array(

        'height' => array(
            'label' => array('Höhe', 'Gib die Höhe des Trenners mit Einheit an: 5px, 10%, ...'),
            'eval' => array('tl_class' => 'w50'),
            'inputType' => 'text',
        ),
        
        'width' => array(
            'label' => array('Breite', 'Gib die Breite des Trenners mit Einheit an: 200px, 50%, ...'),
            'eval' => array('tl_class' => 'w50'),
            'inputType' => 'text',
        ),
        
        'position' => array(
            'label' => array('Ausrichtung', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Links',
				'center' => 'Mittig',
				'right' => 'Rechts'
			),
			'eval' => array('tl_class' => 'w50'),
        ),
        
		'form' => array(
			'label' => array('Die Form des Trenners', 'Je nach gewählter Form, erhältst du andere Einstellungsmöglichkeiten'),
			'inputType' => 'select',
			'options' => array(
				'' => 'Form wählen',
				'border' => 'Border',
				'bg' => 'Background-color',

			),
			'eval' => array('mandatory' => 'true', 'tl_class' => 'w50'),
		),
		
		// if ( form == 'border' )
			

			
			'dividerColorClass' => array(
				'label' => array('Hintergrundfarbe', ''),
				'inputType' => 'select',
				'options' => array(
					'' => 'Hintergrundfarbe wählen',
					'Main' => 'Hauptfarbe',
					'Second' => 'Zweitfarbe',
					'White' => 'Weiß',
					'Lightgray' => 'Hellgrau',
					'Gray' => 'Grau',
					'Darkgray' => 'Dunkelgrau',
					'Black' => 'Schwarz',
					'own' => 'eigene Farbe wählen'
	
				),
				'eval' => array('tl_class' => 'w50'),
				'dependsOn' => array(
					'field' => 'form',  
					'value' => 'border',
				),
			),
			
			// if ( dividerColorClass == 'own' )
			
				'dividerColor' => array(
					'label' => array('Individuelle Hintergrundfarbe', ''),
					'inputType' => 'text',
					'eval' => array(
						'maxlength'=>255,
						'colorpicker'=>true,
						'tl_class' => 'w50'
		
					),
					'dependsOn' => array(
						'field' => 'dividerColorClass',  
						'value' => 'own',
					),
					'sql' => "varchar(255) NOT NULL default ''",
				),
				
			// endif
			
			'borderType' => array(
				'label' => array('Art der Trennlinie', ''),
				'inputType' => 'select',
				'options' => array(
					'solid' => 'Durchgängig',
					'dotted' => 'Gepunktet',
					'dashed' => 'Gestrichelt',
					'double' => 'CSS double-style',
					'groove' => 'CSS groove-style',
					'ridge' => 'CSS ridge-style',
					'inset' => 'CSS inset-style',
					'outset' => 'CSS outset-style'
				),
				'dependsOn' => array(
					'field' => 'form',  
					'value' => 'border',
				),
				'eval' => array('tl_class' => 'w50 clr'),
			),
			
		// endif	
		
		// if ( form == 'background-color' )

			'ellipse' => array (
			    'label' => array('Ellipse', 'Außenränder werden dünner, als das Mittelstück'),
			    'inputType' => 'checkbox',
			    'sql' => array(
			        'type' => 'boolean',
			        'default' => false,
			    ),
				'dependsOn' => array(
					'field' => 'form',  
					'value' => 'bg',
				),
				'eval' => array('tl_class' => 'w50'),
			),
	        
			'dividerBGColorClass' => array(
				'label' => array('Hintergrundfarbe', ''),
				'inputType' => 'select',
				'options' => array(
					'' => 'Hintergrundfarbe wählen',
					'Main' => 'Hauptfarbe',
					'Second' => 'Zweitfarbe',
					'White' => 'Weiß',
					'Lightgray' => 'Hellgrau',
					'Gray' => 'Grau',
					'Darkgray' => 'Dunkelgrau',
					'Black' => 'Schwarz',
					'ownBG' => 'eigene Farbe wählen',
					'gradient' => 'Farbverlauf ( links -> rechts )'
	
				),
				'eval' => array('tl_class' => 'w50'),
				'dependsOn' => array(
					'field' => 'form',  
					'value' => 'bg',
				),
			),
			
			// if ( dividerBGColorClass == 'own' )
			
				'dividerBGColor' => array(
					'label' => array('Individuelle Hintergrundfarbe', ''),
					'inputType' => 'text',
					'eval' => array(
						'maxlength'=>255,
						'colorpicker'=>true,
						'tl_class' => 'w50'
		
					),
					'dependsOn' => array(
						'field' => 'dividerBGColorClass',  
						'value' => 'ownBG',
					),
					'sql' => "varchar(255) NOT NULL default ''",
				),
				
			// endif
			
			// if ( dividerBGColorClass == 'gradient' )
			
				'linearGradient_01' => array(
					'label' => array('Verlauf Farbe 1', ''),
					'inputType' => 'text',
					'eval' => array(
						'maxlength'=>255,
						'colorpicker'=>true,
						'tl_class' => 'w50'
		
					),
					'dependsOn' => array(
						'field' => 'dividerBGColorClass',  
						'value' => 'gradient',
					),
					'sql' => "varchar(255) NOT NULL default ''",
				),
				
				'linearGradient_02' => array(
					'label' => array('Verlauf Farbe 2', ''),
					'inputType' => 'text',
					'eval' => array(
						'maxlength'=>255,
						'colorpicker'=>true,
						'tl_class' => 'w50'
		
					),
					'dependsOn' => array(
						'field' => 'dividerBGColorClass',  
						'value' => 'gradient',
					),
					'sql' => "varchar(255) NOT NULL default ''",
				),
				
				'linearGradient_03' => array(
					'label' => array('Verlauf Farbe 3', ''),
					'inputType' => 'text',
					'eval' => array(
						'maxlength'=>255,
						'colorpicker'=>true,
						'tl_class' => 'w50'
		
					),
					'dependsOn' => array(
						'field' => 'dividerBGColorClass',  
						'value' => 'gradient',
					),
					'sql' => "varchar(255) NOT NULL default ''",
				)
				
			// endif
			
		// endif	


        
	),
);


