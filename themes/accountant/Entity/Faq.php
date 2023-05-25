<?php

namespace Entity;

use Service\PostTypeCreator;

class Faq extends PostType {

	public static $MACHINE_NAME = 'faq';

	public static function init($singularName, $pluralName)
	{
		parent::init($singularName, $pluralName);

		PostTypeCreator::setArgs([
			'supports'            => ['title', 'editor'],
			'exclude_from_search' => true,
			'has_archive'         => false,
			'hierarchical'        => true,
		], self::$MACHINE_NAME);

	}
}