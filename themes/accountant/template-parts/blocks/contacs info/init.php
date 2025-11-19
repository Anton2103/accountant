<?php
/**
 * Contacts Info Block Configuration
 *
 * @package accountant
 */

return [
	'title' => __( 'Contacts Info', 'accountant' ),
	'description' => __( 'Display contact information and social links', 'accountant' ),
	'category' => 'layout',
	'icon' => 'phone',
	'align' => 'center',
	'mode' => 'preview',
	'supports' => [
		'align' => false,
		'mode' => true,
	],
	'example' => [
		'attributes' => [
			'mode' => 'preview',
		],
	],
];