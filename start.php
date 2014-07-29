<?php

/**
 * 
 * @param type $options
 */
function html_excerpt($options = array()) {
	$defaults = array(
		'html' => '',
		'length' => 250,
		'type' => 'chars', // also 'words'
		'elipses' => '...'
	);
	
	$params = array_merge($defaults, $options);
	
	$result = '';
	
	switch ($params['type']) {
		case 'words':
			$result = TruncateHTML::truncateWords($params['html'], $params['length'], $params['elipses']);
			break;
		default:
			$result = TruncateHTML::truncateChars($params['html'], $params['length'], $params['elipses']);
			break;
	}
	
	return $result;
}