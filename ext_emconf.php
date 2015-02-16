<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "moox_core".
 *
 * Auto generated 07-01-2015 13:43
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'MOOX Bootstrap Responsive',
	'description' => 'Makes TYPO3 fully responsive using Bootstrap, HTML5 Boilerplate, jQuery and Superfish. Extended by MOOX Design Templates, MOOX News and other MOOX Extensions. Best way to use the MOOX Core Extension is to install a Template, as moox_core will be autoinstalled by dependencies.',
	'category' => 'fe',
	'version' => '0.9.50',
	'state' => 'beta',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'MOOX Team',
	'author_email' => 'moox@dcn.de',
	'author_company' => 'DCN GmbH',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-6.2.99',
			'flux' => '7.1.0-7.2.99',
			'vhs' => '2.1.0-2.2.99',
			'fluidcontent' => '',
			'fluidpages' => '',
			'realurl' => '',
		),
		'conflicts' => 
		array (
			'css_styled_content' => '',
		),
		'suggests' => 
		array (
		),
	),
);

