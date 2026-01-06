<?php



use Doctrine\DBAL\Platforms\MySQLPlatform;

if (!class_exists('themoreIconPicker')) {

	class themoreIconPicker {
		
	    public static function showIcons(): array {
			
			$GLOBALS['TL_JAVASCRIPT'][] = '/bundles/markethemeless/js/be_iconPicker.js';
			$GLOBALS['TL_CSS'][] = '/bundles/markethemeless/css/_backend/icons_form.css';
				    	
			$basePath = $_SERVER['DOCUMENT_ROOT'] . '/assets/contao-component-fontawesome-free/fontawesomefree/svgs/';
			$subDirs = ['regular', 'solid', 'brands'];
			
			$svgFiles[''] = "Kein Icon";
			
			foreach ($subDirs as $dir) {
			    $svgDir = $basePath . $dir;
			
			    if (is_dir($svgDir)) {
			        foreach (scandir($svgDir) as $file) {
			            if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
			                $svgFiles['assets/contao-component-fontawesome-free/fontawesomefree/svgs/' . $dir . '/' . $file] = '<img src="assets/contao-component-fontawesome-free/fontawesomefree/svgs/' . $dir . '/' . $file . '" width="30px" height="30px">';
			            }
			        }
			    }
			}

			return $svgFiles;
	    }
		
		public static function getFilesInline() {
				
			$path = '/bundles/markethemeless/js/be_iconPicker.js';
			
			return "<script>console.log('hat geladen')</script>";
			
			if (file_exists($path)) {
				$js = file_get_contents($path);
				
				// XSS-sicher, falls du fremde Dateien einliest
				$js = trim($js);
				
				return "<script>\n" . $js . "\n</script>";
				
			}
			
			return '';
			
		}
		
		
		
	}
	
	
	
}

return array(
	'label' => array(
		'Icon Picker',
		'',
	),
    'types' => array('content'),
	'config' => [
		'onload_callback' => [
			['themoreIconPicker', 'getFilesInline']
		]
	],
    'contentCategory' => 'themore',
    'beTemplate' => 'be_rsce_themoreIcons', 
	'standardFields' => array('cssID'),
	'fields' => array(

		'icon' => [
		    'label' => ['Checkbox', 'Help text'], // Or a reference to the global language array
		    'inputType' => 'radio',
		    'options_callback' => [
		        'themoreIconPicker', 'showIcons' // Defines a method that returns the options array. Class can be a service. 
		    ],
		    'sql' => [
		        'type' => 'blob',
		        'length' => MySQLPlatform::LENGTH_LIMIT_BLOB,
		        'notnull' => false,
		    ],
		],
		
        'icon_config_clr' => array(
            'label' => array('Icon Einstellungen', ''),
            'inputType' => 'group',
	    ),

		'iconColorCode' => array(
			'label' => array('Individuelle Iconfarbe', ''),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,
				'colorpicker'=>true,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'iconColorClass' => array(
			'label' => array('Iconfarbe CSS-Klasse', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Individuelle Farbe',
				'black' => 'Schwarz',
				'var(--main-color)' => 'Hauptfarbe',
				'var(--second-color)' => 'Zweitfarbe',
				'white' => 'Weiß',
				'var(--lightgray-color)' => 'Hellgrau',
				'var(--gray-color)' => 'Grau',
				'var(--darkergray-color)' => 'Dunkelgrau'

			),
			'eval' => array('tl_class' => 'w50'),
		),
		
		'iconPosition' => [
		    'label' => ['Position des Icons', ''],
		
		    'inputType' => 'select',
		    'options' => [
		    	'auto' => 'Inline (auto)' , 
		    	'block' => 'Über / Unter Text' , 
		    ],
			'eval' => array(
				'tl_class'=>'w50'

			),
		    'sql' => [
		        'type' => 'string',
		        'length' => 8, // Must be large enough to store all possible values
		        'default' => 'auto',
		    ],
		],
		
		'icon_class' => array(
			'label' => array('Zusätzliche Icon Klasse', ''),
			'inputType' => 'text',
			'eval' => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
        'text_clr' => array(
            'label' => array('Texte', ''),
            'inputType' => 'group',
        ),
	
		'text_before' => array(
			'label' => array('Text vor dem Icon', ''),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'text_after' => array(
			'label' => array('Text nach dem Icon', ''),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'tagType' => [
		    'label' => ['HTML Tag', 'Entscheide, ob du das Icon in einem Text / einer Headline / einem Button darstellen möchtest'],
		
		    'inputType' => 'select',
		    'options' => [
		    	'p' => 'Absatz', 
		    	'btnAccent' => 'Button Akzentfarbe', 
		    	'btnSecond' => 'Button Zweitfarbe',
		    	'btnGray' => 'Button Hellgrau', 
		    	'btnBlack' => 'Button Schwarz', 
		    	'h1' => 'Headline | h1', 
		    	'h2' => 'Headline | h2' , 
		    	'h3' => 'Headline | h3' , 
		    	'h4' => 'Headline | h4' , 
		    	'h5' => 'Headline | h5' , 
		    	'h6' => 'Headline | h6' , 
		    ],
			'eval' => array(
				'tl_class'=>'clr'

			),
		    'sql' => [
		        'type' => 'string',
		        'length' => 20, // Must be large enough to store all possible values
		        'default' => 'auto',
		    ],
		],
		
        'link_clr' => array(
            'label' => array('Link', ''),
            'inputType' => 'group',
        ),
			
		'url' => array(
			'label' => array('Link', ''),
			'search' => true,
			'inputType' => 'text',
			'eval' => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>2048, 'dcaPicker'=>true, 'tl_class'=>'w50'),
			'sql' => "text NULL"
		),
		
		'link_title' => array(
			'label' => array('Titel des Links', ''),
			'inputType' => 'text',
			'eval' => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'target' => [
		    'label' => ['Link in einem neuen Fenster', ''],
		    'inputType' => 'checkbox',
		    'sql' => [
		        'type' => 'boolean',
		        'default' => false,
		    ],
		],
		
        'bg_clr' => array(
            'label' => array('Icon Hintergrund', ''),
            'inputType' => 'group',
        ),

		'iconBackgroundClass' => array(
			'label' => array('Hintergrund für das Icon', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Kein Hintergrund',
				'bgAccent iconBG' => 'Hauptfarbe',
				'bgSecond iconBG' => 'Zweitfarbe',
				'bgWhite iconBG' => 'Weiß',
				'bgLightgray iconBG' => 'Hellgrau',
				'bgGray iconBG' => 'Grau',
				'bgDarkgray iconBG' => 'Dunkelgrau',
				'bgBlack iconBG' => 'Schwarz',

			),
			'eval' => array('tl_class' => 'w50'),
		),
		
		'iconBackgroundRadius' => array(
			'label' => array('Border Radius für den Hintergrund', ''),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),		
		

	),
);

