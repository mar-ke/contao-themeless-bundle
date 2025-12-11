<?php

return array(
	'label' => array(
		'Hintergrund-Wrapper [Ende]',
		'',
	),
    'types' => array('content'),
    'contentCategory' => 'themore',
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
