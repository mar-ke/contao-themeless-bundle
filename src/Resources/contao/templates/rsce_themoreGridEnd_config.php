<?php

return array(
	'label' => array(
		'Grid-Wrapper [Ende]',
		'',
	),
    'types' => array('content'),
    'contentCategory' => 'themore',
    'beTemplate' => 'be_rsce_themoreGrid', 
	'wrapper' => array(
		'type' => 'stop',
	),
	'fields' => array(
		
		'container_tag' => array(
			'label' => array('Wähle den Wrapper-Tag', 'Verwende hier die selbe Einstellung wie beim Start-Wrapper.'),
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
